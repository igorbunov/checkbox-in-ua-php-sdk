<?php

namespace Checkbox\Mappers\Receipts;

use Checkbox\Mappers\Receipts\Payments\CashPaymentMapper;
use Checkbox\Models\Receipts\Payments\PaymentParent;
use Checkbox\Models\Receipts\ServiceReceipt;

class ServiceReceiptMapper
{
    public function jsonToObject($json): ?ServiceReceipt
    {
        if (is_null($json)) {
            return null;
        }
    }

    public function objectToJson(ServiceReceipt $receipt)
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
