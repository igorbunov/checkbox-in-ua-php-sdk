<?php

namespace igorbunov\Checkbox\Models\Shifts;

class ShiftsQueryParams
{
    public $statuses;
    public $desc;
    public $limit;
    public $offset;
    private $allowedStatuses = [];

    const STATUS_CREATED = 'CREATED';
    const STATUS_OPENING = 'OPENING';
    const STATUS_OPENED = 'OPENED';
    const STATUS_CLOSING = 'CLOSING';
    const STATUS_CLOSED = 'CLOSED';

    public function __construct(
        array $statuses = [],
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

        $this->initAllowedStatuses();

        $this->statuses = $statuses;

        $this->validateStatuses();

        $this->offset = $offset;
        $this->limit = $limit;
        $this->desc = $desc;
    }

    private function initAllowedStatuses()
    {
        $this->allowedStatuses = [
            self::STATUS_CREATED,
            self::STATUS_OPENING,
            self::STATUS_OPENED,
            self::STATUS_CLOSING,
            self::STATUS_CLOSED
        ];
    }

    private function validateStatuses()
    {
        foreach ($this->statuses as $status) {
            if (!in_array($status, $this->allowedStatuses)) {
                throw new \Exception('Status "' . $status . '" is not allowed');
            }
        }
    }
}
