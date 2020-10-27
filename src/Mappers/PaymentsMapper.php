<?php

namespace Checkbox\Mappers;

use Checkbox\Models\Payments;

class PaymentsMapper
{
    public function jsonToObject($json): ?Payments
    {
        if (is_null($json)) {
            return null;
        }

        $paymentArr = [];

        foreach ($json as $jsonRow) {
            $paymentArr[] = (new PaymentsMapper())->jsonToObject($jsonRow);
        }

        $taxes = new Payments($paymentArr);

        return $taxes;
    }

    public function objectToJson(Payments $obj)
    {
        pre('objectToJson', $obj);
    }
}
