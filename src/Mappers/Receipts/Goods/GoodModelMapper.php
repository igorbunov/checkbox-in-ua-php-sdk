<?php

namespace Checkbox\Mappers\Receipts\Goods;

use Checkbox\Models\Receipts\Goods\GoodModel;

class GoodModelMapper
{
    public function jsonToObject($json): ?GoodModel
    {
        if (is_null($json)) {
            return null;
        }

        $goods = new GoodModel(
            $json['code'],
            $json['price'],
            $json['name'],
            $json['barcode'] ?? '',
            $json['header'] ?? '',
            $json['footer'] ?? '',
            $json['uktzed'] ?? ''
        );

        return $goods;
    }

    public function objectToJson(GoodModel $obj)
    {
        pre('objectToJson', $obj);
    }
}
