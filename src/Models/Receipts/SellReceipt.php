<?php

namespace igorbunov\Checkbox\Models\Receipts;

use igorbunov\Checkbox\Models\Receipts\Discounts\Discounts;
use igorbunov\Checkbox\Models\Receipts\Goods\Goods;
use igorbunov\Checkbox\Models\Receipts\Payments\Payments;

class SellReceipt
{
    /** @var string $cashier_name */
    public $cashier_name;
    /** @var string $departament */
    public $departament;
    /** @var Goods $goods */
    public $goods;
    /** @var string $deliveryEmail */
    public $deliveryEmail;
    /** @var Discounts|null $discounts */
    public $discounts;
    /** @var Payments $payments */
    public $payments;
    /** @var string $header */
    public $header;
    /** @var string $footer */
    public $footer;
    /** @var string $barcode */
    public $barcode;

    public function __construct(
        string $cashier_name,
        string $departament,
        Goods $goods,
        string $deliveryEmail,
        Payments $payments,
        ?Discounts $discounts = null,
        string $header = '',
        string $footer = '',
        string $barcode = ''
    ) {
        $this->cashier_name = $cashier_name;
        $this->departament = $departament;
        $this->goods = $goods;
        $this->deliveryEmail = $deliveryEmail;
        $this->discounts = $discounts;
        $this->payments = $payments;
        $this->header = $header;
        $this->footer = $footer;
        $this->barcode = $barcode;
    }
}
