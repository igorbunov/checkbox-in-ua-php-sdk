<?php

namespace igorbunov\Checkbox\Models\Receipts\Payments;

class Payments
{
    /** @var array<CardPaymentPayload|CashPaymentPayload> $results */
    public $results = [];

    /**
     * Constructor
     *
     * @param array<CardPaymentPayload|CashPaymentPayload> $payments
     *
     */
    public function __construct(array $payments)
    {
        foreach ($payments as $payment) {
            if (
                is_a($payment, CardPaymentPayload::class) or
                is_a($payment, CashPaymentPayload::class)
            ) {
                $this->results[] = $payment;
            }
        }

        if (count($payments) > 0 and count($this->results) == 0) {
            throw new \Exception('There\'s wrong payment classes payments');
        }
    }
}
