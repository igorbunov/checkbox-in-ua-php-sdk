<?php

namespace Checkbox\Mappers\Cashier;

use Checkbox\Models\Cashier\Cashier;

class CashierMapper
{
    public function jsonToObject($json): ?Cashier
    {
        if (is_null($json)) {
            return null;
        }

        $organization = (new OrganizationMapper())->jsonToObject($json['organization'] ?? null);

        $cashier = new Cashier(
            $json['id'],
            $json['full_name'],
            $json['nin'],
            $json['key_id'],
            $json['signature_type'],
            $json['created_at'],
            $json['updated_at'],
            $organization
        );

        return $cashier;
    }

    public function objectToJson(Cashier $obj)
    {
        pre('objectToJson', $obj);
    }
}
