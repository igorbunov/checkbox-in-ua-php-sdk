<?php

namespace igorbunov\Checkbox\Models\Shifts;

class ZReport
{
    public $id;
    public $serial;
    public $is_z_report;
    public $payments;
    public $taxes;
    public $sell_receipts_count;
    public $return_receipts_count;
    public $transfers_count;
    public $transfers_sum;
    public $created_at;
    public $updated_at;

    public function __construct(
        $id,
        $serial,
        $is_z_report,
        ?Payments $payments,
        Taxes $taxes,
        $sell_receipts_count,
        $return_receipts_count,
        $transfers_count,
        $transfers_sum,
        $created_at,
        $updated_at
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
