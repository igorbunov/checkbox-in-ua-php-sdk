<?php

namespace igorbunov\Checkbox\Models\Reports;

class PeriodicalReportQueryParams
{
    /** @var string $from_date */
    public $from_date;
    /** @var string $to_date */
    public $to_date;
    /** @var int $width */
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
