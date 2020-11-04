<?php

namespace Checkbox\Models\Reports;

class ReportsQueryParams
{
    public $from_date;
    public $to_date;
    public $shift_id;
    public $is_z_report;
    public $desc;
    public $limit;
    public $offset;

    public function __construct(
        string $from_date = '',
        string $to_date = '',
        array $shift_id = [],
        string $is_z_report = '',
        bool $desc = false,
        int $limit = 25,
        int $offset = 0
    ) {
        if ($offset < 0) {
            throw new \Exception('Offset cant be lower then 0');
        }

        if ($limit > 1000) {
            throw new \Exception('Limit cant be more then 1000');
        }

        $this->from_date = $from_date;
        $this->to_date = $to_date;

        if (empty($this->from_date) and empty($this->to_date)) {
            $this->shift_id = $shift_id;
        }

        if (!empty($is_z_report)) {
            $this->is_z_report = filter_var($is_z_report, FILTER_VALIDATE_BOOLEAN);
        }

        $this->desc = $desc;
        $this->limit = $limit;
        $this->offset = $offset;
    }
}
