<?php

namespace igorbunov\Checkbox\Models\Shifts;

class Payments
{
    /** @var array<Payment> $payments */
    public $payments;

    /**
     * Constructor
     *
     * @param array<Payment> $payments
     *
     */
    public function __construct(array $payments)
    {
        $this->payments = $payments;
    }
}
