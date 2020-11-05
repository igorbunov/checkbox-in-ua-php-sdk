<?php

namespace igorbunov\Checkbox\Models\CashRegisters;

use igorbunov\Checkbox\Models\Shifts\Shift;

class CashRegister
{
    public $id;
    public $fiscal_number;
    public $created_at;
    public $updated_at;
    public $shift;
    public $offline_mode;

    public function __construct(
        $id,
        $fiscal_number,
        $created_at,
        $updated_at,
        ?Shift $shift,
        $offline_mode
    ) {
        $this->id = $id;
        $this->fiscal_number = $fiscal_number;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->shift = $shift;
        $this->offline_mode = $offline_mode;
    }
}
