<?php

namespace Checkbox;

class Routes
{
    private $config;
    private $apiUrl;

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->apiUrl = $this->config->get(Config::API_URL);
    }

    public function singInCashier(): string
    {
        return $this->apiUrl . '/cashier/signin';
    }

    public function singOutCashier(): string
    {
        return $this->apiUrl . '/cashier/signout';
    }

    public function signInCashierViaSignature(): string
    {
        return $this->apiUrl . '/cashier/signinSignature';
    }

    public function signInCashierViaPinCode(): string
    {
        return $this->apiUrl . '/cashier/signinPinCode';
    }

    public function getCashierProfile(): string
    {
        return $this->apiUrl . '/cashier/me';
    }

    public function getCashierShift(): string
    {
        return $this->apiUrl . '/cashier/shift';
    }

    public function createShift(): string
    {
        return $this->apiUrl . '/shifts';
    }

    public function getShifts(): string
    {
        return $this->apiUrl . '/shifts';
    }

    public function closeShift(): string
    {
        return $this->apiUrl . '/shifts/close';
    }

    public function getShift(string $shiftId): string
    {
        return $this->apiUrl . '/shifts/' . $shiftId;
    }

    public function pingTaxServiceAction(): string
    {
        return $this->apiUrl . '/cashier/ping-tax-service';
    }
}
