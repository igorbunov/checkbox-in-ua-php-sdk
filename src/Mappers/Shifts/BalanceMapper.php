<?php

namespace igorbunov\Checkbox\Mappers\Shifts;

use igorbunov\Checkbox\Models\Shifts\Balance;

class BalanceMapper
{
    public function jsonToObject($json): ?Balance
    {
        if (is_null($json)) {
            return null;
        }

        $balance = new Balance(
            $json['initial'],
            $json['balance'],
            $json['cash_sales'],
            $json['card_sales'],
            $json['cash_returns'],
            $json['card_returns'],
            $json['service_in'],
            $json['service_out'],
            $json['updated_at']
        );

        return $balance;
    }

    public function objectToJson(Balance $obj)
    {
        pre('objectToJson', $obj);
    }
}
