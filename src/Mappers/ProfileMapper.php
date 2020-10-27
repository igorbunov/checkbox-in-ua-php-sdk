<?php

namespace Checkbox\Mappers;

use Checkbox\Models\Profile;

class ProfileMapper
{
    public function jsonToObject($json): ?Profile
    {
        if (is_null($json)) {
            return null;
        }

        $organization = (new OrganizationMapper())->jsonToObject($json['organization']);

        $profile = new Profile(
            $json['id'],
            $json['full_name'],
            $json['nin'],
            $json['key_id'],
            $json['signature_type'],
            $json['created_at'],
            $json['updated_at'],
            $organization
        );

        return $profile;
    }

    public function objectToJson(Profile $obj)
    {
        pre('objectToJson', $obj);
    }
}
