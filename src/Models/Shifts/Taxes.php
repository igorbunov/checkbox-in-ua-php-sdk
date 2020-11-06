<?php

namespace igorbunov\Checkbox\Models\Shifts;

class Taxes
{
    /** @var array<Tax> $taxes */
    public $taxes;

    /**
     * Constructor
     *
     * @param array<Tax> $taxes
     *
     */
    public function __construct(array $taxes)
    {
        $this->taxes = $taxes;
    }
}
