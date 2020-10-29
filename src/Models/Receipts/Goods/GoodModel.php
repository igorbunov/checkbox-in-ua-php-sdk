<?php

namespace Checkbox\Models\Receipts\Goods;

class GoodModel
{
    public $code;
    public $barcode;
    public $name;
    public $header;
    public $footer;
    public $uktzed;
    public $price;
    public $tax;

    public function __construct(
        string $code,
        int $price,
        string $name,
        string $barcode = '',
        string $header = '',
        string $footer = '',
        string $uktzed = '',
        array $tax = []
    ) {
        $this->code = $code;
        $this->price = $price;
        $this->name = $name;
        $this->barcode = $barcode;
        $this->header = $header;
        $this->footer = $footer;
        $this->uktzed = $uktzed;
        $this->tax = $tax;
    }
}