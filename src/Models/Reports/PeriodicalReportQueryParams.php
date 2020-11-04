<?php

namespace Checkbox\Models\Reports;

class PeriodicalReportQueryParams
{
    public $from_date;
    public $to_date;
    public $width;

    public function __construct(
        string $from_date,
        string $to_date,
        int $width = 42
    ) {
        if ($width < 10 or $width > 250) {
            throw new \Exception('That print area is not valid');
        }

        $this->from_date = $from_date;
        $this->to_date = $to_date;
        $this->width = $width;
    }
}
