<?php

namespace Checkbox;

use Checkbox\Models\CashRegisters\CashRegistersQueryParams;
use Checkbox\Models\Shifts\ShiftsQueryParams;

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

    public function getShifts(ShiftsQueryParams $queryParams): string
    {
        $params = [];

        if (count($queryParams->statuses) > 0) {
            foreach ($queryParams->statuses as $status) {
                $params[] = "statuses={$status}";
            }
        }

        $value = ($queryParams->desc) ? 'true' : 'false';
        $params[] = "desc={$value}";

        $params[] = "limit={$queryParams->limit}";
        $params[] = "offset={$queryParams->offset}";

        $params = implode('&', $params);
pre($params);
        return $this->apiUrl . '/shifts?' . $params;
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

    public function getCashRegisters(CashRegistersQueryParams $queryParams): string
    {
        $params = [];

        if (!is_null($queryParams->inUse)) {
            $value = ($queryParams->inUse) ? 'true' : 'false';

            $params[] = "in_use={$value}";
        }

        $params[] = "limit={$queryParams->limit}";
        $params[] = "offset={$queryParams->offset}";

        $params = implode('&', $params);

        return $this->apiUrl . '/cash-registers?' . $params;
    }

    public function getCashRegister(string $registerId): string
    {
        return $this->apiUrl . '/cash-registers/' . $registerId;
    }
}
