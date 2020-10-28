<?php

namespace Checkbox\Mappers\Receipts\Discounts;

use Checkbox\Models\Receipts\Discounts\Discounts;

class DiscountsMapper
{
    public function jsonToObject($json): ?Discounts
    {
        if (is_null($json)) {
            return null;
        }

        $results = [];

        foreach ($json as $row) {
            $results[] = (new DiscountModelMapper())->jsonToObject($row);
        }

        $discounts = new Discounts($results);

        return $discounts;
    }

    public function objectToJson(Discounts $obj)
    {
        pre('objectToJson', $obj);
    }
}
