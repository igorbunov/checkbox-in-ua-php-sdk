<?php

namespace igorbunov\Checkbox\Mappers\Reports;

use igorbunov\Checkbox\Mappers\MetaMapper;
use igorbunov\Checkbox\Mappers\Shifts\ZReportMapper;
use igorbunov\Checkbox\Models\Reports\Reports;

class ReportsMapper
{
    public function jsonToObject($json): ?Reports
    {
        if (is_null($json)) {
            return null;
        }

        $shiftsArr = [];

        foreach ($json['results'] as $jsonRow) {
            $shiftsArr[] = (new ZReportMapper())->jsonToObject($jsonRow);
        }

        $meta = (new MetaMapper())->jsonToObject($json['meta']);

        $shift = new Reports(
            $shiftsArr,
            $meta
        );

        return $shift;
    }

    public function objectToJson(Reports $obj)
    {
        pre('objectToJson', $obj);
    }
}
