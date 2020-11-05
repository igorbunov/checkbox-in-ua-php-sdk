<?php

namespace igorbunov\Checkbox\Mappers\Shifts;

use igorbunov\Checkbox\Models\Shifts\Payments;

class PaymentsMapper
{
    public function jsonToObject($json): ?Payments
    {
        if (is_null($json)) {
            return null;
        }

        $paymentArr = [];

        foreach ($json as $jsonRow) {
            $paymentArr[] = (new PaymentMapper())->jsonToObject($jsonRow);
        }

        $taxes = new Payments($paymentArr);

        return $taxes;
    }

    public function objectToJson(Payments $obj)
    {
        var_dump('objectToJson', $obj);
    }
}
