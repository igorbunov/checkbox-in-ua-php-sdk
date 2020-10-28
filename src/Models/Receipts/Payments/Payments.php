<?php

namespace Checkbox\Models\Receipts\Payments;

class Payments
{
    public $results;

    public function __construct(array $payments)
    {
        foreach ($payments as $payment) {
            if (
                is_a($payment,  CardPaymentPayload::class) or
                is_a($payment,  CashPaymentPayload::class)
            ) {
                $this->results[] = $payment;
            }
        }

        if (count($this->results) == 0) {
            throw new \Exception('There\'s no payments');
        }
    }
}