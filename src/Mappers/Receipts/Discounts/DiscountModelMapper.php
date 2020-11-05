<?php

namespace igorbunov\Checkbox\Mappers\Receipts\Discounts;

use igorbunov\Checkbox\Models\Receipts\Discounts\DiscountModel;

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

    public function objectToJson(DiscountModel $discountModel)
    {
        return [
            'type' => $discountModel->type,
            'mode' => $discountModel->mode,
            'value' => $discountModel->value,
            'tax_code' => $discountModel->tax_code,
            'tax_codes' => $discountModel->tax_codes,
            'name' => $discountModel->name
        ];
    }
}