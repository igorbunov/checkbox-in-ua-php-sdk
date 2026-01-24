<?php

namespace igorbunov\Checkbox\Models\Receipts;

use igorbunov\Checkbox\Models\Receipts\Payments\Payments;

class AfterPaymentReceipt
{
    /** @var string $cashier_name */
    public $cashier_name;
    /** @var string $departament */
    public $departament;
    /** @var Delivery $delivery */
    public Delivery $delivery;
    /** @var string $id */
    public string $id;
    /** @var Payments $payments */
    public $payments;
    /** @var string $header */
    public $header;
    /** @var string $footer */
    public $footer;
}