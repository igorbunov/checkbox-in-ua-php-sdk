<?php

namespace Checkbox\Models;

class Taxes
{
    public $taxes;

    public function __construct(array $taxes)
    {
        $this->taxes = $taxes;
    }
}