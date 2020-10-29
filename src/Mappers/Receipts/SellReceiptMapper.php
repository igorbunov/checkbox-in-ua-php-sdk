<?php

namespace Checkbox\Mappers\Receipts;

use Checkbox\Mappers\Receipts\Discounts\DiscountsMapper;
use Checkbox\Mappers\Receipts\Goods\GoodsMapper;
use Checkbox\Mappers\Receipts\Payments\PaymentsMapper;
use Checkbox\Models\Receipts\SellReceipt;

class SellReceiptMapper
{
    public function jsonToObject($json): ?SellReceipt
    {
        if (is_null($json)) {
            return null;
        }
    }

    public function objectToJson(SellReceipt $receipt)
    {
        $delivery = [];

        if (!empty($receipt->deliveryEmail)) {
            $delivery['email'] = $receipt->deliveryEmail;
        }

        return [
            'cashier_name' => $receipt->cashier_name,
            'departament' => $receipt->departament,
            'goods' => (new GoodsMapper())->objectToJson($receipt->goods),
            'delivery' => $delivery,
            'discounts' => (new DiscountsMapper())->objectToJson($receipt->discounts),
            'payments' => (new PaymentsMapper())->objectToJson($receipt->payments),
            'header' => $receipt->header,
            'footer' => $receipt->footer,
            'barcode' => $receipt->barcode
        ];
    }
}
