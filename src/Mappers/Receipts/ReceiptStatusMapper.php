<?php

namespace Checkbox\Mappers\Receipts;

use Checkbox\Models\Receipts\ReceiptStatus;

class ReceiptStatusMapper
{
    public function jsonToObject($json): ?ReceiptStatus
    {
        if (is_null($json)) {
            return null;
        }

        $receipt = new ReceiptStatus($json);

        return $receipt;
    }

    public function objectToJson(ReceiptStatus $obj)
    {
        pre('objectToJson', $obj);
    }
}
