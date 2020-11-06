<?php

namespace igorbunov\Checkbox\Mappers\Receipts\Discounts;

use igorbunov\Checkbox\Models\Receipts\Discounts\Discounts;

class DiscountsMapper
{
    /**
     * @param mixed $json
     * @return Discounts|null
     */
    public function jsonToObject($json): ?Discounts
    {
        if (is_null($json)) {
            return null;
        }

        $results = [];

        foreach ($json as $row) {
            $discount = (new DiscountModelMapper())->jsonToObject($row);

            if (!is_null($discount)) {
                $results[] = $discount;
            }
        }

        $discounts = new Discounts($results);

        return $discounts;
    }

    /**
     * @param Discounts|null $discounts
     * @return array<array<string, string>>
     */
    public function objectToJson(?Discounts $discounts = null): array
    {
        if (is_null($discounts)) {
            return [];
        }

        $results = [];

        foreach ($discounts->results as $discount) {
            $results[] = (new DiscountModelMapper())->objectToJson($discount);
        }

        return $results;
    }
}
