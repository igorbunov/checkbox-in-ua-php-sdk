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
            $json['sum'],
            $json['quantity'],
            $json['is_return'],
            $taxes,
            $json['good_id'] ?? '',
            $discounts
        );

        return $goods;
    }

    public function objectToJson(GoodItemModel $obj)
    {
        pre('objectToJson', $obj);
    }
}
