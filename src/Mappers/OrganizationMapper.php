<?php

namespace Checkbox\Mappers;

use Checkbox\Models\Organization;

class OrganizationMapper
{
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
            $json['updated_at']
        );

        return $organization;
    }

    public function objectToJson(Organization $obj)
    {
        pre('objectToJson', $obj);
    }
}
