<?php

namespace igorbunov\Checkbox\Models;

class Meta
{
    /** @var int $limit */
    public $limit;
    /** @var int $offset */
    public $offset;

    public function __construct(
        int $limit,
        int $offset
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
    }
}
