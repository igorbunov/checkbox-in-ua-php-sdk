<?php

namespace igorbunov\Checkbox\Mappers\Cashier;

use igorbunov\Checkbox\Models\Cashier\Organization;

class OrganizationMapper
{
    /**
     * @param mixed $json
     * @return Organization|null
     */
    public function jsonToObject($json): ?Organization
    {
        if (is_null($json)) {
            return null;
        }

        $organization = new Organization(
            $json['id'],
            $json['title'],
            $json['edrpou'],
            $json['tax_number'],
            $json['created_at'],
            $json['updated_at'],
            $json['subscription_exp'] ?? ''
        );

        return $organization;
    }
}
