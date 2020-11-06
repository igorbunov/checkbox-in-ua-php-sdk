<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Mappers\Receipts\Payments\CashPaymentMapper;
use igorbunov\Checkbox\Models\Receipts\Payments\PaymentParent;
use igorbunov\Checkbox\Models\Receipts\ServiceReceipt;

class ServiceReceiptMapper
{
    /**
     * @param ServiceReceipt $receipt
     * @return array<string, array<string, int|string>|null>
     */
    public function objectToJson(ServiceReceipt $receipt): array
    {
        $payment = null;

        if ($receipt->payment->type == PaymentParent::TYPE_CASH) {
            $payment = (new CashPaymentMapper())->objectToJson($receipt->payment);
        } elseif ($receipt->payment->type == PaymentParent::TYPE_CARD) {
            $payment = (new CashPaymentMapper())->objectToJson($receipt->payment);
        }

        return [
            'payment' => $payment
        ];
    }
}
