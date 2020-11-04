<?php

namespace Checkbox\Models\Receipts;

use Checkbox\Models\Receipts\Payments\PaymentParent;

class ServiceReceipt
{
    public $payment;

    public function __construct(
        PaymentParent $payment
    ) {
        $this->payment = $payment;
    }
}
