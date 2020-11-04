<?php

namespace Checkbox\Mappers\Receipts\Payments;


use Checkbox\Models\Receipts\Payments\CardPaymentPayload;

class CardPaymentMapper
{
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

    public function objectToJson(CardPaymentPayload $obj)
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
