<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Mappers\MetaMapper;
use igorbunov\Checkbox\Models\Receipts\Receipts;

class ReceiptsMapper
{
    /**
     * @param mixed $json
     * @return Receipts|null
     */
    public function jsonToObject($json): ?Receipts
    {
        if (is_null($json)) {
            return null;
        }

        $receiptsArr = [];

        foreach ($json['results'] as $jsonRow) {
            $receipt = (new ReceiptMapper())->jsonToObject($jsonRow);

            if (!is_null($receipt)) {
                $receiptsArr[] = $receipt;
            }
        }

        $meta = (new MetaMapper())->jsonToObject($json['meta']);

        $shift = new Receipts(
            $receiptsArr,
            $meta
        );

        return $shift;
    }
}
