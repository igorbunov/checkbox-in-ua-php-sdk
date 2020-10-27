<?php

namespace Checkbox\Models\Cashier;

class Organization
{
    public $id;
    public $title;
    public $edrpou;
    public $tax_number;
    public $created_at;
    public $updated_at;

    public function __construct(
        $id,
        $title,
        $edrpou,
        $tax_number,
        $created_at,
        $updated_at
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->edrpou = $edrpou;
        $this->tax_number = $tax_number;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
