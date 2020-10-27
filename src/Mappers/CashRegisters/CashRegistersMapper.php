<?php

namespace Checkbox\Mappers\CashRegisters;

use Checkbox\Mappers\MetaMapper;
use Checkbox\Models\CashRegisters\CashRegisters;

class CashRegistersMapper
{
    public function jsonToObject($json): ?CashRegisters
    {
        if (is_null($json)) {
            return null;
        }

        $shiftsArr = [];

        foreach ($json['results'] as $jsonRow) {
            $shiftsArr[] = (new CashRegisterMapper())->jsonToObject($jsonRow);
        }

        $meta = (new MetaMapper())->jsonToObject($json['meta']);

        $registers = new CashRegisters(
            $shiftsArr,
            $meta
        );

        return $registers;
    }

    public function objectToJson(CashRegisters $obj)
    {
        pre('objectToJson', $obj);
    }
}
