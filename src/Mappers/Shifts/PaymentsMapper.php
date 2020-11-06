<?php

namespace igorbunov\Checkbox\Mappers\Shifts;

use igorbunov\Checkbox\Models\Shifts\Payments;

class PaymentsMapper
{
    /**
     * @param mixed $json
     * @return Payments|null
     */
    public function jsonToObject($json): ?Payments
    {
        if (is_null($json)) {
            return null;
        }

        $paymentArr = [];

        foreach ($json as $jsonRow) {
            $payment = (new PaymentMapper())->jsonToObject($jsonRow);

            if (!is_null($payment)) {
                $paymentArr[] = $payment;
            }
        }

        $taxes = new Payments($paymentArr);

        return $taxes;
    }
}
