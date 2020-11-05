<?php

namespace Checkbox\Mappers\Receipts\Goods;

use Checkbox\Mappers\Receipts\Discounts\DiscountsMapper;
use Checkbox\Mappers\Receipts\Taxes\GoodTaxesMapper;
use Checkbox\Models\Receipts\Goods\GoodItemModel;

class GoodItemModelMapper
{
    public function jsonToObject($json): ?GoodItemModel
    {
        if (is_null($json)) {
            return null;
        }

        $goodModel = (new GoodModelMapper())->jsonToObject($json['good']);
        $taxes = (new GoodTaxesMapper())->jsonToObject($json['taxes']);
        $discounts = (new DiscountsMapper())->jsonToObject($json['discounts']);

        $goods = new GoodItemModel(
            $goodModel,
            $json['quantity'],
            $discounts,
            $taxes,
            $json['is_return'],
            $json['sum'],
            $json['good_id'] ?? ''
        );

        return $goods;
    }

    public function objectToJson(GoodItemModel $itemModel)
    {
        $result = [
            'good' => (new GoodModelMapper())->objectToJson($itemModel->good),
            'quantity' => $itemModel->quantity,
            'is_return' => $itemModel->is_return,
            'discounts' => (new DiscountsMapper())->objectToJson($itemModel->discounts)
        ];

        return $result;
    }
}