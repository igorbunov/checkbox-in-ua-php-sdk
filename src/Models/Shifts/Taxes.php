<?php

namespace Checkbox\Models\Shifts;

class Taxes
{
    public $taxes;

    public function __construct(array $taxes)
    {
        $this->taxes = $taxes;
    }
}