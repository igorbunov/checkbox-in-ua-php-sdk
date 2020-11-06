<?php

namespace igorbunov\Checkbox\Models\Reports;

class ReportsQueryParams
{
    /** @var string $from_date */
    public $from_date;
    /** @var string $to_date */
    public $to_date;
    /** @var array<string> $shift_id */
    public $shift_id;
    /** @var bool|null $is_z_report */
    public $is_z_report;
    /** @var bool $desc */
    public $desc;
    /** @var int $limit */
    public $limit;
    /** @var int $offset */
    public $offset;

    /**
     * Constructor
     *
     * @param string $from_date
     * @param string $to_date
     * @param array<string> $shift_id
     * @param bool|null $is_z_report
     * @param bool $desc
     * @param int $limit
     * @param int $offset
     *
     */
    public function __construct(
        string $from_date = '',
        string $to_date = '',
        array $shift_id = [],
        ?bool $is_z_report = null,
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

        if (!is_null($is_z_report)) {
            $this->is_z_report = filter_var($is_z_report, FILTER_VALIDATE_BOOLEAN);
        }

        $this->desc = $desc;
        $this->limit = $limit;
        $this->offset = $offset;
    }
}
