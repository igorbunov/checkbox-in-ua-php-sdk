<?php

namespace igorbunov\Checkbox\Models\Shifts;

use igorbunov\Checkbox\Models\Cashier\Cashier;
use igorbunov\Checkbox\Models\CashRegisters\CashRegister;

class CreateShift
{
    /** @var string $id */
    public $id;
    /** @var string $serial */
    public $serial;
    /** @var string $status */
    public $status;
    /** @var ZReport|null $z_report */
    public $z_report;
    /** @var string|null $opened_at */
    public $opened_at;
    /** @var string|null $closed_at */
    public $closed_at;
    /** @var InitialTransaction|null $initial_transaction */
    public $initial_transaction;
    /** @var ClosingTransaction|null $closing_transaction */
    public $closing_transaction;
    /** @var string $created_at */
    public $created_at;
    /** @var string|null $updated_at */
    public $updated_at;
    /** @var Balance|null $balance */
    public $balance;
    /** @var Taxes|null $taxes */
    public $taxes;
    /** @var CashRegister|null $cash_register */
    public $cash_register;
    /** @var Cashier|null $cashier */
    public $cashier;

    public function __construct(
        string $id,
        string $serial,
        string $status,
        ?ZReport $z_report,
        ?string $opened_at,
        ?string $closed_at,
        ?InitialTransaction $initial_transaction,
        ?ClosingTransaction $closing_transaction,
        string $created_at,
        ?string $updated_at,
        ?Balance $balance,
        ?Taxes $taxes,
        ?CashRegister $cash_register,
        ?Cashier $cashier
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
