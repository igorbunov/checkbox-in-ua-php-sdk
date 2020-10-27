<?php

namespace Checkbox\Models;

class Payments
{
    public $payments;

    public function __construct(array $payments)
    {
        $this->payments = $payments;
    }
}