<?php

namespace igorbunov\Checkbox\Mappers\Receipts\Goods;

use igorbunov\Checkbox\Mappers\Receipts\Discounts\DiscountsMapper;
use igorbunov\Checkbox\Mappers\Receipts\Taxes\GoodTaxesMapper;
use igorbunov\Checkbox\Models\Receipts\Goods\GoodItemModel;

class GoodItemModelMapper
{
    /**
     * @param mixed $json
     * @return GoodItemModel|null
     */
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

    /**
     * @param GoodItemModel $itemModel
     * @return array<string, mixed>
     */
    public function objectToJson(GoodItemModel $itemModel): array
    {
        if (is_null($itemModel->good)) {
            return [];
        }

        $result = [
            'good' => (new GoodModelMapper())->objectToJson($itemModel->good),
            'quantity' => $itemModel->quantity,
            'is_return' => $itemModel->is_return,
            'discounts' => (new DiscountsMapper())->objectToJson($itemModel->discounts)
        ];

        return $result;
    }
}
