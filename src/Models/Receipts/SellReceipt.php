<?php

namespace Checkbox\Models\Receipts;

use Checkbox\Models\Receipts\Discounts\Discounts;
use Checkbox\Models\Receipts\Goods\Goods;
use Checkbox\Models\Receipts\Payments\Payments;

class SellReceipt
{
    public $cashier_name;
    public $departament;
    public $goods;
    public $deliveryEmail;
    public $discounts;
    public $payments;
    public $header;
    public $footer;
    public $barcode;

    public function __construct(
        string $cashier_name,
        string $departament,
        Goods $goods,
        string $deliveryEmail = '',
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
