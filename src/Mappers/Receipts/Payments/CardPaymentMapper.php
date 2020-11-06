<?php

namespace igorbunov\Checkbox\Mappers\Receipts\Payments;

use igorbunov\Checkbox\Models\Receipts\Payments\CardPaymentPayload;
use igorbunov\Checkbox\Models\Receipts\Payments\PaymentParent;

class CardPaymentMapper
{
    /**
     * @param mixed $json
     * @return CardPaymentPayload|null
     */
    public function jsonToObject($json): ?CardPaymentPayload
    {
        if (is_null($json)) {
            return null;
        }

        $receipt = new CardPaymentPayload(
            $json['value'],
            $json['label'] ?? '',
            $json['code'] ?? 0,
            $json['card_mask'] ?? '0000 0000 0000 0000'
        );

        return $receipt;
    }

    /**
     * @param PaymentParent $obj
     * @return array<string, mixed>
     */
    public function objectToJson(PaymentParent $obj)
    {
        $result = [
            'type' => $obj->type,
            'value' => $obj->value
        ];

        if (!empty($obj->code)) {
            $result['code'] = $obj->code;
        }

        if (!empty($obj->label)) {
            $result['label'] = $obj->label;
        }

        if (!empty($obj->card_mask)) {
            $result['card_mask'] = $obj->card_mask;
        }

        return $result;
    }
}
