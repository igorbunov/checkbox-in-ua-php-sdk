<?php

namespace igorbunov\Checkbox\Models\Receipts;

use igorbunov\Checkbox\Models\Receipts\Payments\PaymentParent;

class ServiceReceipt
{
    public $payment;

    public function __construct(
        PaymentParent $payment
    ) {
        $this->payment = $payment;
    }
}
