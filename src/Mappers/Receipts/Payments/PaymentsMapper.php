<?php

namespace Checkbox\Mappers\Receipts\Payments;

use Checkbox\Models\Receipts\Payments\Payments;

class PaymentsMapper
{
    const TYPE_CASH = 'CASH';
    const TYPE_CARD = 'CARD';

    public function jsonToObject($json): ?Payments
    {
        if (is_null($json)) {
            return null;
        }

        $results = [];

        foreach ($json as $payment) {
            if ($payment['type'] == self::TYPE_CASH) {
                $results[] = (new CashPaymentMapper())->jsonToObject($payment);
            } elseif ($payment['type'] == self::TYPE_CARD) {
                $results[] = (new CardPaymentMapper())->jsonToObject($payment);
            }
        }

        $receipt = new Payments($results);

        return $receipt;
    }

    public function objectToJson(Payments $payments)
    {
        $results = [];

        foreach ($payments->results as $payment) {
            if ($payment->type == self::TYPE_CASH) {
                $results[] = (new CashPaymentMapper())->objectToJson($payment);
            } elseif ($payment->type == self::TYPE_CARD) {
                $results[] = (new CardPaymentMapper())->objectToJson($payment);
            }
        }

        return $results;
    }
}
