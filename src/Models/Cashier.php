<?php

namespace Checkbox\Models;

class Cashier
{
    public $id;
    public $full_name;
    public $nin;
    public $key_id;
    public $signature_type;
    public $created_at;
    public $updated_at;

    public function __construct(
        $id,
        $full_name,
        $nin,
        $key_id,
        $signature_type,
        $created_at,
        $updated_at
    ) {
        $this->id = $id;
        $this->full_name = $full_name;
        $this->nin = $nin;
        $this->key_id = $key_id;
        $this->signature_type = $signature_type;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
