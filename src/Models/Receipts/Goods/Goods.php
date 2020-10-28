<?php

namespace Checkbox\Models\Receipts\Goods;

class Goods
{
    public $results;

    public function __construct(array $goods)
    {
        $this->results = $goods;
    }
}