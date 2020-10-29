<?php

namespace Checkbox\Mappers\Receipts\Goods;

use Checkbox\Models\Receipts\Goods\Goods;

class GoodsMapper
{
    public function jsonToObject($json): ?Goods
    {
        if (is_null($json)) {
            return null;
        }

        $result = [];

        foreach ($json as $goodRow) {
            $result[] = (new GoodItemModelMapper())->jsonToObject($goodRow);
        }

        $goods = new Goods($result);

        return $goods;
    }

    public function objectToJson(Goods $goods)
    {
        $result = [];

        foreach ($goods->results as $goodRow) {
            $result[] = (new GoodItemModelMapper())->objectToJson($goodRow);
        }

        return $result;
    }
}
