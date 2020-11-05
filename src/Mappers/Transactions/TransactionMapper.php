<?php

namespace igorbunov\Checkbox\Mappers\Transactions;

use igorbunov\Checkbox\Models\Transactions\Transaction;

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
            $json['updated_at'],
            $json['request_data'] ?? '',
            $json['request_signature'] ?? '',
            $json['response_id'] ?? '',
            $json['response_data_signature'] ?? null,
            $json['response_data'] ?? null
        );

        return $transaction;
    }

    public function objectToJson(Transaction $obj)
    {
        var_dump('objectToJson', $obj);
    }
}
