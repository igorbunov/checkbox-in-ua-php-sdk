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
    /** @var bool */
    public $offline_mode;
    /** @var bool */
    public $stay_offline;
    /** @var bool */
    public $has_shift;

    /** @var DocumentsState|null $documents_state */
    public $documents_state;

    public function __construct(
        string $id,
        string $fiscal_number,
        string $created_at,
        string $updated_at,
        string $address,
        string $title,
        bool $offline_mode,
        bool $stay_offline,
        bool $has_shift,
        ?DocumentsState $documents_state
    ) {
        $this->id = $id;
        $this->fiscal_number = $fiscal_number;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->address = $address;
        $this->title = $title;
        $this->offline_mode = $offline_mode;
        $this->stay_offline = $stay_offline;
        $this->has_shift = $has_shift;
        $this->documents_state = $documents_state;
    }
}
