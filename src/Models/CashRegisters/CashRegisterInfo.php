<?php

namespace igorbunov\Checkbox\Models\CashRegisters;

class CashRegisterInfo
{
    /** @var string $id */
    public $id;
    /** @var string $fiscal_number */
    public $fiscal_number;
    /** @var string $created_at */
    public $created_at;
    /** @var string $updated_at */
    public $updated_at;
    /** @var string $address */
    public $address;
    /** @var string $title */
    public $title;
    /** @var DocumentsState|null $documents_state */
    public $documents_state;

    public function __construct(
        string $id,
        string $fiscal_number,
        string $created_at,
        string $updated_at,
        string $address,
        string $title,
        ?DocumentsState $documents_state
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
