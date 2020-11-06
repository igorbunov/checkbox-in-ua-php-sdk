<?php

namespace igorbunov\Checkbox\Models\Receipts\Discounts;

class Discounts
{
    /** @var array<DiscountModel> $results */
    public $results = [];

    /**
     * Constructor
     *
     * @param array<DiscountModel> $discounts
     *
     */
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
