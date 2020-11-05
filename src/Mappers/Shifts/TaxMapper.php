<?php

namespace igorbunov\Checkbox\Mappers\Shifts;

use igorbunov\Checkbox\Models\Shifts\Tax;

class TaxMapper
{
    public function jsonToObject($json): ?Tax
    {
        if (is_null($json)) {
            return null;
        }

        $tax = new Tax(
            $json['id'],
            $json['code'],
            $json['label'],
            $json['symbol'],
            $json['rate'],
            $json['extra_rate'] ?? '',
            $json['included'] ?? '',
            $json['created_at'],
            $json['updated_at'] ?? '',
            $json['sales'] ?? '',
            $json['returns'] ?? '',
            $json['sales_turnover'],
            $json['returns_turnover']
        );

        return $tax;
    }

    public function objectToJson(Tax $obj)
    {
        var_dump('objectToJson', $obj);
    }
}
