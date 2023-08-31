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
            $json['card_mask'] ?? '0000 0000 0000 0000',
            $json['terminal'] ?? '',
            $json['rrn'] ?? '',
            $json['card_name'] ?? '',
            $json['auth_code'] ?? '',
            $json['payment_system'] ?? '',
            $json['receipt_no'] ?? '',
            $json['acquirer_and_seller'] ?? '',
            $json['commission'] ?? 0,
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

        if (!empty($obj->bank_name)) {
            $result['bank_name'] = $obj->bank_name;
        }

        if (!empty($obj->auth_code)) {
            $result['auth_code'] = $obj->auth_code;
        }

        if (!empty($obj->rrn)) {
            $result['rrn'] = $obj->rrn;
        }

        if (!empty($obj->payment_system)) {
            $result['payment_system'] = $obj->payment_system;
        }

        if (!empty($obj->terminal)) {
            $result['terminal'] = $obj->terminal;
        }

        if (!empty($obj->acquirer_and_seller)) {
            $result['acquirer_and_seller'] = $obj->acquirer_and_seller;
        }

        if (!empty($obj->receipt_no)) {
            $result['receipt_no'] = $obj->receipt_no;
        }

        if (!empty($obj->commision)) {
            $result['commission'] = $obj->commision;
        }

        return $result;
    }
}
