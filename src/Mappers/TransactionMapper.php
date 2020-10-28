<?php

namespace Checkbox\Mappers;

use Checkbox\Models\Transaction;

class TransactionMapper
{
    public function jsonToObject($json): ?Transaction
    {
        if (is_null($json)) {
            return null;
        }

        $transaction = new Transaction(
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

    public function objectToJson(Transaction $obj)
    {
        pre('objectToJson', $obj);
    }
}
