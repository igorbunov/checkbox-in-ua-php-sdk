<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Models\Receipts\ReceiptTypes;

class ReceiptTypeMapper
{
    public function jsonToObject($json): ?ReceiptTypes
    {
        if (is_null($json)) {
            return null;
        }

        $receipt = new ReceiptTypes($json);

        return $receipt;
    }

    public function objectToJson(ReceiptTypes $obj)
    {
        pre('objectToJson', $obj);
    }
}
