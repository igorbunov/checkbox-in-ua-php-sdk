<?php

namespace Checkbox\Models\CashRegisters;

use Checkbox\Models\Meta;

class CashRegisters
{
    public $results;
    public $meta;

    public function __construct(array $shifts, Meta $meta)
    {
        $this->results = $shifts;
        $this->meta = $meta;
    }
}
