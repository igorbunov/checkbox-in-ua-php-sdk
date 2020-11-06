<?php

namespace igorbunov\Checkbox\Models\CashRegisters;

use igorbunov\Checkbox\Models\Shifts\Shift;

class CashRegister
{
    /** @var string $id */
    public $id;
    /** @var string $fiscal_number */
    public $fiscal_number;
    /** @var string $created_at */
    public $created_at;
    /** @var string $updated_at */
    public $updated_at;
    /** @var Shift|null $shift */
    public $shift;
    /** @var bool|null $offline_mode */
    public $offline_mode;

    public function __construct(
        string $id,
        string $fiscal_number,
        string $created_at,
        string $updated_at,
        ?Shift $shift,
        ?bool $offline_mode = false
    ) {
        $this->id = $id;
        $this->fiscal_number = $fiscal_number;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->shift = $shift;
        $this->offline_mode = $offline_mode;
    }
}
