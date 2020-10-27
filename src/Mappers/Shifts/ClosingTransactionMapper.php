<?php

namespace Checkbox\Mappers\Shifts;

use Checkbox\Models\Shifts\ClosingTransaction;

class ClosingTransactionMapper
{
    public function jsonToObject($json): ?ClosingTransaction
    {
        if (is_null($json)) {
            return null;
        }

        $transaction = new ClosingTransaction(
            $json['id'],
            $json['type'],
            $json['serial'],
            $json['status'],
            $json['request_signed_at'],
            $json['request_received_at'],
            $json['response_status'],
            $json['response_error_message'],
            $json['created_at'],
            $json['updated_at']
        );

        return $transaction;
    }

    public function objectToJson(ClosingTransaction $obj)
    {
        pre('objectToJson', $obj);
    }
}
