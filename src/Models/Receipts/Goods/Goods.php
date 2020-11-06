<?php

namespace igorbunov\Checkbox\Models\Receipts\Goods;

class Goods
{
    /** @var array<GoodItemModel> $results */
    public $results;

    /**
     * Constructor
     *
     * @param array<GoodItemModel> $goods
     *
     */
    public function __construct(array $goods)
    {
        $this->results = $goods;
    }
}
