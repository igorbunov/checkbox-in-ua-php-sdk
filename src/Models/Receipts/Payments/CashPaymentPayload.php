<?php

namespace igorbunov\Checkbox\Models\Receipts\Payments;

class CashPaymentPayload extends PaymentParent
{
    public function __construct(
        int $value,
        string $label = 'Готівкою'
    )
    {
        parent::__construct(parent::TYPE_CASH, $value, $label);
    }
}