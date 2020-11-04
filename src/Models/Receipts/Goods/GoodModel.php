<?php

namespace Checkbox\Models\Receipts\Goods;

use Checkbox\Models\Receipts\Taxes\GoodTaxes;

class GoodModel
{
    public $code;
    public $barcode;
    public $name;
    public $header;
    public $footer;
    public $uktzed;
    public $price;
    public $taxes;

    public function __construct(
        string $code,
        int $price,
        string $name,
        string $barcode = '',
        string $header = '',
        string $footer = '',
        string $uktzed = '',
        ?GoodTaxes $taxes = null
    ) {
        $this->code = $code;
        $this->price = $price;
        $this->name = $name;
        $this->barcode = $barcode;
        $this->header = $header;
        $this->footer = $footer;
        $this->uktzed = $uktzed;
        $this->taxes = $taxes;
    }
}