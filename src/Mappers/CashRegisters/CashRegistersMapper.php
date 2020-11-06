<?php

namespace igorbunov\Checkbox\Mappers\CashRegisters;

use igorbunov\Checkbox\Mappers\MetaMapper;
use igorbunov\Checkbox\Models\CashRegisters\CashRegisters;

class CashRegistersMapper
{
    /**
     * @param mixed $json
     * @return CashRegisters|null
     */
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
}
