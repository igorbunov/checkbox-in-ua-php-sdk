<?php

namespace igorbunov\Checkbox\Mappers\Receipts\Goods;

use igorbunov\Checkbox\Models\Receipts\Goods\Goods;

class GoodsMapper
{
    /**
     * @param mixed $json
     * @return Goods|null
     */
    public function jsonToObject($json): ?Goods
    {
        if (is_null($json)) {
            return null;
        }

        $result = [];

        foreach ($json as $goodRow) {
            $good = (new GoodItemModelMapper())->jsonToObject($goodRow);

            if (!is_null($good)) {
                $result[] = $good;
            }
        }

        $goods = new Goods($result);

        return $goods;
    }

    /**
     * @param Goods $goods
     * @return array<mixed>
     */
    public function objectToJson(Goods $goods): array
    {
        $result = [];

        foreach ($goods->results as $goodRow) {
            $result[] = (new GoodItemModelMapper())->objectToJson($goodRow);
        }

        return $result;
    }
}
