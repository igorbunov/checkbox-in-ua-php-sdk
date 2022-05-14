<?php

namespace igorbunov\Checkbox\Models\Cashier;

class Cashier
{
    /** @var string $id */
    public $id;
    /** @var string $full_name */
    public $full_name;
    /** @var string $nin */
    public $nin;
    /** @var string $key_id */
    public $key_id;
    /** @var string $signature_type */
    public $signature_type;
    /** @var string $created_at */
    public $created_at;
    /** @var string $updated_at */
    public $updated_at;
    /** @var string $certificate_end */
    public $certificate_end;
    /** @var string $blocked */
    public $blocked;
    /** @var Organization|null $organization */
    public $organization;

    public function __construct(
        string $id,
        string $full_name,
        string $nin,
        string $key_id,
        string $signature_type,
        string $created_at,
        string $updated_at,
        string $certificate_end,
        string $blocked,
        ?Organization $organization
    ) {
        $this->id = $id;
        $this->full_name = $full_name;
        $this->nin = $nin;
        $this->key_id = $key_id;
        $this->signature_type = $signature_type;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->certificate_end = $certificate_end;
        $this->blocked = $blocked;
        $this->organization = $organization;
    }
}
