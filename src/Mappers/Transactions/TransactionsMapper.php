<?php

namespace Checkbox\Mappers\Transactions;

use Checkbox\Mappers\MetaMapper;
use Checkbox\Models\Transactions\Transactions;

class TransactionsMapper
{
    public function jsonToObject($json): ?Transactions
    {
        if (is_null($json)) {
            return null;
        }

        $transactionArr = [];

        foreach ($json['results'] as $jsonRow) {
            $transactionArr[] = (new TransactionMapper())->jsonToObject($jsonRow);
        }

        $meta = (new MetaMapper())->jsonToObject($json['meta']);

        $transactions = new Transactions(
            $transactionArr,
            $meta
        );

        return $transactions;
    }

    public function objectToJson(Transactions $obj)
    {
        pre('objectToJson', $obj);
    }
}
