<?php

namespace igorbunov\Checkbox\Models\Receipts\Goods;

use igorbunov\Checkbox\Models\Receipts\Taxes\GoodTaxes;

class GoodModel
{
    /** @var string $code */
    public $code;
    /** @var string $barcode */
    public $barcode;
    /** @var string $name */
    public $name;
    /** @var string $header */
    public $header;
    /** @var string $footer */
    public $footer;
    /** @var string $uktzed */
    public $uktzed;
    /** @var float $price */
    public $price;
    /** @var GoodTaxes|null $taxes */
    public $taxes;

    public function __construct(
        string $code,
        float $price,
        string $name,
        string $barcode = '',
        string $header = '',
        string $footer = '',
        string $uktzed = '',
        ?GoodTaxes $taxes = null
    ) {
        $this->code = $code;
        $this->price = round($price);
        $this->name = $name;
        $this->barcode = $barcode;
        $this->header = $header;
        $this->footer = $footer;
        $this->uktzed = $uktzed;
        $this->taxes = $taxes;
    }
}
