<?php

namespace igorbunov\Checkbox\Models\Shifts;

use igorbunov\Checkbox\Models\Meta;

class Shifts
{
    public $results;
    public $meta;

    public function __construct(array $shifts, Meta $meta)
    {
        $this->results = $shifts;
        $this->meta = $meta;
    }
}
