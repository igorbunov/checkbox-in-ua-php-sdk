<?php

namespace Checkbox\Mappers\Receipts\Taxes;

use Checkbox\Models\Receipts\Taxes\GoodTaxes;

class GoodTaxesMapper
{
    public function jsonToObject($json): ?GoodTaxes
    {
        if (is_null($json)) {
            return null;
        }

        $result = [];

        foreach ($json as $row) {
            $result[] = (new GoodTaxMapper())->jsonToObject($row);
        }

        $taxes = new GoodTaxes($result);

        return $taxes;
    }

    public function objectToJson(GoodTaxes $obj)
    {
        pre('objectToJson', $obj);
    }
}
