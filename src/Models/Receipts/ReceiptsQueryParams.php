<?php

namespace igorbunov\Checkbox\Models\Receipts;

class ReceiptsQueryParams
{
    /** @var string $fiscal_code */
    public $fiscal_code;
    /** @var string $serial */
    public $serial;
    /** @var bool $desc */
    public $desc;
    /** @var int $limit */
    public $limit;
    /** @var int $offset */
    public $offset;

    public function __construct(
        string $fiscal_code = '',
        string $serial = '',
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

        $this->fiscal_code = $fiscal_code;
        $this->serial = $serial;
        $this->desc = $desc;
        $this->offset = $offset;
        $this->limit = $limit;
    }
}
