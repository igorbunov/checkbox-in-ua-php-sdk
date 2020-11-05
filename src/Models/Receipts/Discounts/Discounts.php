<?php

namespace igorbunov\Checkbox\Models\Receipts\Discounts;

class Discounts
{
    public $results = [];

    public function __construct(array $discounts)
    {
        foreach ($discounts as $discount) {
            if (!is_a($discount, DiscountModel::class)) {
                throw new \Exception('Discount has wrong class');
            }

            $this->results[] = $discount;
        }
    }
}
