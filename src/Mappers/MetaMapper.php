<?php

namespace igorbunov\Checkbox\Mappers;

use igorbunov\Checkbox\Models\Meta;

class MetaMapper
{
    public function jsonToObject($json): ?Meta
    {
        if (is_null($json)) {
            return null;
        }

        $meta = new Meta(
            $json['limit'],
            $json['offset']
        );

        return $meta;
    }

    public function objectToJson(Meta $obj)
    {
        pre('objectToJson', $obj);
    }
}
