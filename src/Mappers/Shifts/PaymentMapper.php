<?php

namespace igorbunov\Checkbox\Mappers\Shifts;

use igorbunov\Checkbox\Models\Shifts\Payment;

class PaymentMapper
{
    /**
     * @param mixed $json
     * @return Payment|null
     */
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
}
