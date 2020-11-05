<?php

namespace igorbunov\Checkbox\Mappers\Shifts;

use igorbunov\Checkbox\Models\Shifts\Taxes;

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

    public function objectToJson(array $taxessArr)
    {
        return $taxessArr;
    }
}
