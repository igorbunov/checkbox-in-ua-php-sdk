<?php

namespace igorbunov\Checkbox\Models\Receipts\Goods;

use igorbunov\Checkbox\Models\Receipts\Discounts\Discounts;
use igorbunov\Checkbox\Models\Receipts\Taxes\GoodTaxes;

class GoodItemModel
{
    public $good;
    public $good_id;
    public $sum;
    public $quantity;
    public $is_return;
    public $taxes;
    public $discounts;

    public function __construct(
        GoodModel $good,
        int $quantity,
        ?Discounts $discounts = null,
        ?GoodTaxes $taxes = null,
        bool $is_return = false,
        int $sum = 0,
        string $good_id = ''
    ) {
        $this->good = $good;
        $this->sum = $sum;
        $this->quantity = $quantity;
        $this->is_return = $is_return;
        $this->taxes = $taxes;
        $this->good_id = $good_id;
        $this->discounts = $discounts;
    }
}
