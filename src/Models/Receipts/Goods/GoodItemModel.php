<?php

namespace Checkbox\Models\Receipts\Goods;

use Checkbox\Models\Receipts\Discounts\Discounts;
use Checkbox\Models\Receipts\Taxes\GoodTaxes;

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
        int $sum,
        int $quantity,
        bool $is_return = false,
        ?GoodTaxes $taxes = null,
        string $good_id = '',
        ?Discounts $discounts = null
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
