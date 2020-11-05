<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Mappers\MetaMapper;
use igorbunov\Checkbox\Models\Receipts\Receipts;

class ReceiptsMapper
{
    public function jsonToObject($json): ?Receipts
    {
        if (is_null($json)) {
            return null;
        }

        $receiptsArr = [];

        foreach ($json['results'] as $jsonRow) {
            $receiptsArr[] = (new ReceiptMapper())->jsonToObject($jsonRow);
        }

        $meta = (new MetaMapper())->jsonToObject($json['meta']);

        $shift = new Receipts(
            $receiptsArr,
            $meta
        );

        return $shift;
    }

    public function objectToJson(Receipts $obj)
    {
        pre('objectToJson', $obj);
    }
}
