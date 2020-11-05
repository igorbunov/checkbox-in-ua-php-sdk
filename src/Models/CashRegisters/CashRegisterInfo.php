<?php

namespace igorbunov\Checkbox\Models\CashRegisters;

class CashRegisterInfo
{
    public $id;
    public $fiscal_number;
    public $created_at;
    public $updated_at;
    public $address;
    public $title;
    public $documents_state;

    public function __construct(
        $id,
        $fiscal_number,
        $created_at,
        $updated_at,
        $address,
        $title,
        DocumentsState $documents_state
    ) {
        $this->id = $id;
        $this->fiscal_number = $fiscal_number;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->address = $address;
        $this->title = $title;
        $this->documents_state = $documents_state;
    }
}
