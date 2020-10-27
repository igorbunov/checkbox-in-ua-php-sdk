<?php

namespace Checkbox\Mappers;

use Checkbox\Models\Taxes;

class TaxesMapper
{
    public function jsonToObject($json): ?Taxes
    {
        if (is_null($json)) {
            return null;
        }

        $taxessArr = [];

        foreach ($json as $jsonRow) {
            $taxessArr[] = (new TaxMapper())->jsonToObject($jsonRow);
        }

        $taxes = new Taxes($taxessArr);

        return $taxes;
    }

    public function objectToJson(Taxes $obj)
    {
        pre('objectToJson', $obj);
    }
}
