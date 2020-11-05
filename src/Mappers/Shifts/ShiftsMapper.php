<?php

namespace igorbunov\Checkbox\Mappers\Shifts;

use igorbunov\Checkbox\Mappers\MetaMapper;
use igorbunov\Checkbox\Models\Shifts\Shifts;

class ShiftsMapper
{
    public function jsonToObject($json): ?Shifts
    {
        if (is_null($json)) {
            return null;
        }

        $shiftsArr = [];

        foreach ($json['results'] as $jsonRow) {
            $shiftsArr[] = (new ShiftMapper())->jsonToObject($jsonRow);
        }

        $meta = (new MetaMapper())->jsonToObject($json['meta']);

        $shift = new Shifts(
            $shiftsArr,
            $meta
        );

        return $shift;
    }

    public function objectToJson(Shifts $obj)
    {
        var_dump('objectToJson', $obj);
    }
}
