<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Models\Receipts\Delivery;

class DeliveryMapper
{
    /**
     * @param Delivery $delivery
     * @return array<string, mixed>
     */
    public function objectToJson(Delivery $delivery): array
    {
        $output = [];

        if (!empty($delivery->getEmails())) {
            $output['emails'] = $delivery->getEmails();
        }

        if (!empty($delivery->getPhone())) {
            $output['phone'] = $delivery->getPhone();
        }

        return $output;
    }
}
