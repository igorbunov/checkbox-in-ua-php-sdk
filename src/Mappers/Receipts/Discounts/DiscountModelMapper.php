<?php

namespace Checkbox\Mappers\Receipts\Discounts;

use Checkbox\Models\Receipts\Discounts\DiscountModel;

class DiscountModelMapper
{
    public function jsonToObject($json): ?DiscountModel
    {
        if (is_null($json)) {
            return null;
        }

        $discount = new DiscountModel(
            $json['type'],
            $json['mode'],
            $json['value'],
            $json['sum'],
            $json['tax_code'] ?? 0,
            $json['tax_codes'] ?? [],
            $json['name'] ?? ''
        );

        return $discount;
    }

    public function objectToJson(DiscountModel $obj)
    {
        pre('objectToJson', $obj);
    }
}
