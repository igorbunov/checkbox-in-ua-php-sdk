<?php

namespace Checkbox\Mappers;

use Checkbox\Models\Shifts;

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
        pre('objectToJson', $obj);
    }
}
