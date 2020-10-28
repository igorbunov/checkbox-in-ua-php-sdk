<?php

namespace Checkbox\Models\Receipts\Taxes;

class GoodTaxes
{
    public $results;

    public function __construct(array $taxes)
    {
        foreach ($taxes as $tax) {
            if (!is_a($tax,  GoodTax::class)) {
                throw new \Exception('Tax has wrong class');
            }

            $this->results[] = $tax;
        }
    }
}