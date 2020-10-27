<?php

namespace Checkbox\Models\Shifts;

class Payments
{
    public $payments;

    public function __construct(array $payments)
    {
        $this->payments = $payments;
    }
}