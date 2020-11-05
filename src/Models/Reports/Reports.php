<?php

namespace igorbunov\Checkbox\Models\Reports;

use igorbunov\Checkbox\Models\Meta;
use igorbunov\Checkbox\Models\Shifts\ZReport;

class Reports
{
    public $results;
    public $meta;

    public function __construct(array $reports, Meta $meta)
    {
        foreach ($reports as $report) {
            if (!is_a($report, ZReport::class)) {
                throw new \Exception('This is not zreport class');
            }

            $this->results[] = $report;
        }

        $this->meta = $meta;
    }
}