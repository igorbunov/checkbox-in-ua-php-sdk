<?php

namespace Checkbox\Mappers;

use Checkbox\Models\Payment;

class PaymentMapper
{
    public function jsonToObject($json): ?Payment
    {
        if (is_null($json)) {
            return null;
        }

        $payment = new Payment(
            $json['id'],
            $json['type'],
            $json['label'],
            $json['sell_sum'],
            $json['return_sum'],
            $json['service_in'],
            $json['service_out']
        );

        return $payment;
    }

    public function objectToJson(Payment $obj)
    {
        pre('objectToJson', $obj);
    }
}
