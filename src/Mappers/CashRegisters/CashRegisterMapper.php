<?php

namespace igorbunov\Checkbox\Mappers\CashRegisters;

use igorbunov\Checkbox\Mappers\Shifts\ShiftMapper;
use igorbunov\Checkbox\Models\CashRegisters\CashRegister;

class CashRegisterMapper
{
    public function jsonToObject($json): ?CashRegister
    {
        if (is_null($json)) {
            return null;
        }

        $shift = (new ShiftMapper())->jsonToObject($json['shift'] ?? null);

        $cashRegister = new CashRegister(
            $json['id'],
            $json['fiscal_number'],
            $json['created_at'],
            $json['updated_at'],
            $shift,
            $json['offline_mode'] ?? null
        );

        return $cashRegister;
    }

    public function objectToJson(CashRegister $obj)
    {
        pre('objectToJson', $obj);
    }
}
