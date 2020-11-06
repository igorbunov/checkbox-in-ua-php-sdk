<?php

namespace igorbunov\Checkbox\Models\CashRegisters;

use igorbunov\Checkbox\Models\Meta;

class CashRegisters
{
    /** @var array<mixed> $results */
    public $results;
    /** @var Meta|null $meta */
    public $meta;

    /**
     * Constructor
     *
     * @param array<mixed> $shifts
     * @param Meta|null $meta
     *
     */
    public function __construct(array $shifts, ?Meta $meta)
    {
        $this->results = $shifts;
        $this->meta = $meta;
    }
}
