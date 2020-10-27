<?php

namespace Checkbox\Mappers\Shifts;

use Checkbox\Models\Shifts\CashRegister;

class CashRegisterMapper
{
    public function jsonToObject($json): ?CashRegister
    {
        if (is_null($json)) {
            return null;
        }

        $cashRegister = new CashRegister(
            $json['id'],
            $json['fiscal_number'],
            $json['created_at'],
            $json['updated_at']
        );

        return $cashRegister;
    }

    public function objectToJson(CashRegister $obj)
    {
        pre('objectToJson', $obj);
    }
}
