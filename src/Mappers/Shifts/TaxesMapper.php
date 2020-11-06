<?php

namespace igorbunov\Checkbox\Mappers\Shifts;

use igorbunov\Checkbox\Models\Shifts\Taxes;

class TaxesMapper
{
    /**
     * @param mixed $json
     * @return Taxes|null
     */
    public function jsonToObject($json): ?Taxes
    {
        if (is_null($json)) {
            return null;
        }

        $taxessArr = [];

        foreach ($json as $jsonRow) {
            $tax = (new TaxMapper())->jsonToObject($jsonRow);

            if (!is_null($tax)) {
                $taxessArr[] = $tax;
            }
        }

        $taxes = new Taxes($taxessArr);

        return $taxes;
    }
}
