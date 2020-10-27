<?php

namespace Checkbox\Models\Shifts;

class CashRegister
{
    public $id;
    public $fiscal_number;
    public $created_at;
    public $updated_at;

    public function __construct(
        $id,
        $fiscal_number,
        $created_at,
        $updated_at
    ) {
        $this->id = $id;
        $this->fiscal_number = $fiscal_number;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
