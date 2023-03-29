<?php

namespace igorbunov\Checkbox\Mappers\Receipts\Goods;

use igorbunov\Checkbox\Mappers\Receipts\Taxes\GoodTaxMapper;
use igorbunov\Checkbox\Mappers\Shifts\TaxesMapper;
use igorbunov\Checkbox\Models\Receipts\Goods\GoodModel;

class GoodModelMapper
{
    /**
     * @param mixed $json
     * @return GoodModel|null
     */
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

    /**
     * @param GoodModel $goodModel
     * @return array<string, mixed>
     */
    public function objectToJson(GoodModel $goodModel): array
    {
        $goodTaxeRatesArr = [];

        if (!is_null($goodModel->taxes)) {
            foreach ($goodModel->taxes->results as $tax) {
                $goodTaxeRatesArr[] = $tax->code;
            }
        }

        return [
            'code' => $goodModel->code,
            'name' => $goodModel->name,
            'barcode' => $goodModel->barcode ?? '',
            'header' => $goodModel->header ?? '',
            'footer' => $goodModel->footer ?? '',
            'price' => $goodModel->price,
            'tax' => $goodTaxeRatesArr,
            'uktzed' => $goodModel->uktzed
        ];
    }
}
