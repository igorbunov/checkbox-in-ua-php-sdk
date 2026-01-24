<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Mappers\Receipts\Discounts\DiscountsMapper;
use igorbunov\Checkbox\Mappers\Receipts\Goods\GoodsMapper;
use igorbunov\Checkbox\Mappers\Receipts\Payments\PaymentsMapper;
use igorbunov\Checkbox\Models\Receipts\PrepaymentReceipt;
use igorbunov\Checkbox\Models\Receipts\SellReceipt;

class PrepaymentReceiptMapper
{
    /**
     * @param PrepaymentReceipt $receipt
     * @return array<string, mixed>
     */
    public function objectToJson(PrepaymentReceipt $receipt): array
    {
        $output = [
            'cashier_name' => $receipt->cashier_name,
            'departament' => $receipt->departament,
            'goods' => (new GoodsMapper())->objectToJson($receipt->goods),
            'delivery' => (new DeliveryMapper())->objectToJson($receipt->delivery),
            'discounts' => (new DiscountsMapper())->objectToJson($receipt->discounts),
            'payments' => (new PaymentsMapper())->objectToJson($receipt->payments),
            'header' => $receipt->header,
            'footer' => $receipt->footer,
            'barcode' => $receipt->barcode
        ];

        if ($receipt->id) {
            $output['id'] = $receipt->id;
        }

        if ($receipt->related_receipt_id) {
            $output['related_receipt_id'] = $receipt->related_receipt_id;
        }

        if ($receipt->custom_relation_id) {
            $output['custom_relation_id'] = $receipt->custom_relation_id;
        }

        if ($receipt->ettn) {
            $output['ettn'] = $receipt->ettn;
        }

        return $output;
    }
}
