<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Mappers\Receipts\Payments\PaymentsMapper;
use igorbunov\Checkbox\Models\Receipts\AfterPaymentReceipt;

class AfterPaymentReceiptMapper
{
    /**
     * @param AfterPaymentReceipt $receipt
     * @return array<string, mixed>
     */
    public function objectToJson(AfterPaymentReceipt $receipt): array
    {
        $output = [
            'cashier_name' => $receipt->cashier_name,
            'departament' => $receipt->departament,
            'delivery' => (new DeliveryMapper())->objectToJson($receipt->delivery),
            'payments' => (new PaymentsMapper())->objectToJson($receipt->payments),
            'header' => $receipt->header,
            'footer' => $receipt->footer
        ];

        if ($receipt->id) {
            $output['id'] = $receipt->id;
        }

        return $output;
    }
}
