<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Models\Receipts\ReceiptStatus;

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
        var_dump('objectToJson', $obj);
    }
}
