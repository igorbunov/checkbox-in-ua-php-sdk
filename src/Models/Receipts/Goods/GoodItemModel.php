<?php

namespace igorbunov\Checkbox\Models\Receipts\Goods;

use igorbunov\Checkbox\Models\Receipts\Discounts\Discounts;
use igorbunov\Checkbox\Models\Receipts\Taxes\GoodTaxes;

class GoodItemModel
{
    /** @var GoodModel|null $good */
    public $good;
    /** @var string $good_id */
    public $good_id;
    /** @var int $sum */
    public $sum;
    /** @var int $quantity */
    public $quantity;
    /** @var bool $is_return */
    public $is_return;
    /** @var GoodTaxes|null $taxes */
    public $taxes;
    /** @var Discounts|null $discounts */
    public $discounts;

    public function __construct(
        ?GoodModel $good,
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
