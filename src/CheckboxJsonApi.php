<?php

namespace Checkbox;

use Checkbox\Errors\InvalidCredentials;
use Checkbox\Errors\EmptyResponse;
use Checkbox\Errors\Validation;
use Checkbox\Mappers\Cashier\CashierMapper;
use Checkbox\Mappers\Shifts\CloseShiftMapper;
use Checkbox\Mappers\Shifts\CreateShiftMapper;
use Checkbox\Mappers\Shifts\ShiftMapper;
use Checkbox\Mappers\Shifts\ShiftsMapper;
use Checkbox\Models\Cashier\Cashier;
use Checkbox\Models\Shifts\CloseShift;
use Checkbox\Models\Shifts\CreateShift;
use Checkbox\Models\Shifts\Shift;
use Checkbox\Models\Shifts\Shifts;
use GuzzleHttp\Client;

class CheckboxJsonApi
{
    private $routes;
    private $guzzleClient;
    private $connectTimeout;
    private $config = null;
    private $requestOptions;

    const METHOD_GET = 'get';
    const METHOD_POST = 'post';

    public function __construct(Config $config = null, int $connectTimeoutSeconds = 5)
    {
        if (!is_null($config)) {
            $this->routes = new Routes($config);
        }

        $this->config = $config;
        $this->connectTimeout = $connectTimeoutSeconds;

        $this->guzzleClient = new Client([
            'verify' => false,
            'http_errors' => false
        ]);

        $this->requestOptions = [
            'connect_timeout' => $this->connectTimeout,
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ];

        if (!is_null($config)) {
            $this->requestOptions['headers']['X-License-Key'] = $this->config->get('licenseKey');
        }

        return $this;
    }

    public function setConfig(Config $config)
    {
        return new CheckboxJsonApi($config);
    }

    public function setConnectTimeout(int $connectTimeoutSeconds)
    {
        return new CheckboxJsonApi($this->config, $connectTimeoutSeconds);
    }


    private function setHeadersWithToken(string $token)
    {
        $this->requestOptions['headers']['Authorization'] = 'Bearer ' . $token;
    }

    private function validateResponseStatus($json, $statusCode)
    {
        switch ($statusCode) {
            case 403:
                throw new InvalidCredentials($json['message']);
                break;
            case 422:
                throw new Validation($json);
                break;
        }
    }

    // start Cashier methods //

    public function signInCashier()
    {
        $options = $this->requestOptions;
        $options['body'] = \json_encode([
            'login' => $this->config->get(Config::LOGIN),
            'password' => $this->config->get(Config::PASSWORD)
        ]);

        $response = $this->guzzleClient->request(
            self::METHOD_POST,
            $this->routes->singInCashier(),
            $options
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        if (is_null($jsonResponse)) {
            throw new EmptyResponse('Запрос вернул пустой результат');
        }

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        $this->setHeadersWithToken($jsonResponse['access_token']);

        return $this;
    }

    public function signOutCashier()
    {
        $response = $this->guzzleClient->request(
            self::METHOD_POST,
            $this->routes->singOutCashier(),
            $this->requestOptions
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return $this;
    }

    public function signInCashierViaSignature(string $signature)
    {
        $options = $this->requestOptions;
        $options['body'] = \json_encode([
            'signature' => $signature
        ]);

        $response = $this->guzzleClient->request(
            self::METHOD_POST,
            $this->routes->signInCashierViaSignature(),
            $options
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return $jsonResponse;
    }

    public function signInCashierViaPinCode(string $pinCode)
    {
        $options = $this->requestOptions;
        $options['body'] = \json_encode([
            'pin_code' => $pinCode
        ]);

        $response = $this->guzzleClient->request(
            self::METHOD_POST,
            $this->routes->signInCashierViaPinCode(),
            $options
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return $jsonResponse;
    }

    public function getCashierProfile(): Cashier
    {
        $response = $this->guzzleClient->request(
            self::METHOD_GET,
            $this->routes->getCashierProfile(),
            $this->requestOptions
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return (new CashierMapper())->jsonToObject($jsonResponse);
    }

    public function getCashierShift(): Shift
    {
        $response = $this->guzzleClient->request(
            self::METHOD_GET,
            $this->routes->getCashierShift(),
            $this->requestOptions
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        if (is_null($jsonResponse)) {
            throw new EmptyResponse('Запрос вернул пустой результат');
        }

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return (new ShiftMapper())->jsonToObject($jsonResponse);
    }

    public function pingTaxServiceAction()
    {
        $response = $this->guzzleClient->request(
            self::METHOD_POST,
            $this->routes->pingTaxServiceAction(),
            $this->requestOptions
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return $jsonResponse;
    }

    // end Cashier methods //

    // start Shift methods //

    public function getShifts(): Shifts
    {
        $response = $this->guzzleClient->request(
            self::METHOD_GET,
            $this->routes->getShifts(),
            $this->requestOptions
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return (new ShiftsMapper())->jsonToObject($jsonResponse);
    }

    public function createShift(): CreateShift
    {
        $response = $this->guzzleClient->request(
            self::METHOD_POST,
            $this->routes->createShift(),
            $this->requestOptions
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return (new CreateShiftMapper())->jsonToObject($jsonResponse);
    }

    public function getShift(string $shiftId): Shift
    {
        $response = $this->guzzleClient->request(
            self::METHOD_GET,
            $this->routes->getShift($shiftId),
            $this->requestOptions
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return (new ShiftMapper())->jsonToObject($jsonResponse);
    }

    public function closeShift(): CloseShift
    {
        $response = $this->guzzleClient->request(
            self::METHOD_POST,
            $this->routes->closeShift(),
            $this->requestOptions
        );

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        $this->validateResponseStatus($jsonResponse, $response->getStatusCode());

        return (new CloseShiftMapper())->jsonToObject($jsonResponse);
    }

    // end Shift methods //




}