<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Models\Receipts\ReceiptTypes;

class ReceiptTypeMapper
{
    /**
     * @param mixed $json
     * @return ReceiptTypes|null
     */
    public function jsonToObject($json): ?ReceiptTypes
    {
        if (is_null($json)) {
            return null;
        }

        $receipt = new ReceiptTypes($json);

        return $receipt;
    }
}
