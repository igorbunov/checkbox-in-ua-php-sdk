<?php

namespace igorbunov\Checkbox\Models\Shifts;

class ZReport
{
    /** @var string $id */
    public $id;
    /** @var string $serial */
    public $serial;
    /** @var string $is_z_report */
    public $is_z_report;
    /** @var Payments|null $payments */
    public $payments;
    /** @var Taxes|null $taxes */
    public $taxes;
    /** @var string $sell_receipts_count */
    public $sell_receipts_count;
    /** @var string $return_receipts_count */
    public $return_receipts_count;
    /** @var string $transfers_count */
    public $transfers_count;
    /** @var string $transfers_sum */
    public $transfers_sum;
    /** @var string $created_at */
    public $created_at;
    /** @var string|null $updated_at */
    public $updated_at;

    public function __construct(
        string $id,
        string $serial,
        string $is_z_report,
        ?Payments $payments,
        ?Taxes $taxes,
        string $sell_receipts_count,
        string $return_receipts_count,
        string $transfers_count,
        string $transfers_sum,
        string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->serial = $serial;
        $this->is_z_report = $is_z_report;
        $this->payments = $payments;
        $this->taxes = $taxes;
        $this->sell_receipts_count = $sell_receipts_count;
        $this->return_receipts_count = $return_receipts_count;
        $this->transfers_count = $transfers_count;
        $this->transfers_sum = $transfers_sum;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
