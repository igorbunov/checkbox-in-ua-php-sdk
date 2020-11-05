<?php

namespace igorbunov\Checkbox\Models\Shifts;

use igorbunov\Checkbox\Models\Cashier\Cashier;
use igorbunov\Checkbox\Models\CashRegisters\CashRegister;

class CloseShift
{
    public $id;
    public $serial;
    public $status;
    public $z_report;
    public $opened_at;
    public $closed_at;
    public $initial_transaction;
    public $closing_transaction;
    public $created_at;
    public $updated_at;
    public $balance;
    public $taxes;
    public $cash_register;
    public $cashier;

    public function __construct(
        $id,
        $serial,
        $status,
        ZReport $z_report,
        $opened_at,
        $closed_at,
        InitialTransaction $initial_transaction,
        ClosingTransaction $closing_transaction,
        $created_at,
        $updated_at,
        Balance $balance,
        Taxes $taxes,
        CashRegister $cash_register,
        Cashier $cashier
    ) {
        $this->id = $id;
        $this->serial = $serial;
        $this->status = $status;
        $this->z_report = $z_report;
        $this->opened_at = $opened_at;
        $this->closed_at = $closed_at;
        $this->initial_transaction = $initial_transaction;
        $this->closing_transaction = $closing_transaction;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->balance = $balance;
        $this->taxes = $taxes;
        $this->cash_register = $cash_register;
        $this->cashier = $cashier;
    }
}
