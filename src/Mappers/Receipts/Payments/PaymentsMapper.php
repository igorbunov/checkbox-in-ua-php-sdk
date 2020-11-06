<?php

namespace igorbunov\Checkbox\Mappers\Receipts\Payments;

use igorbunov\Checkbox\Models\Receipts\Payments\Payments;

class PaymentsMapper
{
    public const TYPE_CASH = 'CASH';
    public const TYPE_CARD = 'CARD';

    /**
     * @param mixed $json
     * @return Payments|null
     */
    public function jsonToObject($json): ?Payments
    {
        if (is_null($json)) {
            return null;
        }

        $results = [];

        foreach ($json as $payment) {
            if ($payment['type'] == self::TYPE_CASH) {
                $pay = (new CashPaymentMapper())->jsonToObject($payment);

                if (!is_null($pay)) {
                    $results[] = $pay;
                }
            } elseif ($payment['type'] == self::TYPE_CARD) {
                $pay = (new CardPaymentMapper())->jsonToObject($payment);

                if (!is_null($pay)) {
                    $results[] = $pay;
                }
            }
        }

        $receipt = new Payments($results);

        return $receipt;
    }

    /**
     * @param Payments $payments
     * @return array<mixed>
     */
    public function objectToJson(Payments $payments): array
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
