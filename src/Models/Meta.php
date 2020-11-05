<?php

namespace igorbunov\Checkbox\Models;

class Meta
{
    public $limit;
    public $offset;

    public function __construct(
        $limit,
        $offset
    ) {
        $this->limit = $limit;
        $this->offset = $offset;
    }
}
