<?php

namespace igorbunov\Checkbox\Models\Receipts;

use igorbunov\Checkbox\Models\Receipts\Discounts\Discounts;
use igorbunov\Checkbox\Models\Receipts\Goods\Goods;
use igorbunov\Checkbox\Models\Receipts\Payments\Payments;
use igorbunov\Checkbox\Models\Receipts\Taxes\GoodTaxes;
use igorbunov\Checkbox\Models\Shifts\Shift;
use igorbunov\Checkbox\Models\Transactions\Transaction;

class Receipt
{
    public $id;
    public $type;
    public $transaction;
    public $serial;
    public $status;
    public $goods;
    public $payments;
    public $total_sum;
    public $total_payment;
    public $total_rest;
    public $fiscal_code;
    public $fiscal_date;
    public $delivered_at;
    public $created_at;
    public $updated_at;
    public $taxes;
    public $discounts;
    public $header;
    public $footer;
    public $barcode;
    public $is_created_offline;
    public $is_sent_dps;
    public $sent_dps_at;
    public $shift;

    public function __construct(
        string $id,
        ReceiptTypes $type,
        Transaction $transaction,
        int $serial,
        ReceiptStatus $status,
        Goods $goods,
        Payments $payments,
        int $total_sum,
        int $total_payment,
        int $total_rest,
        string $fiscal_code,
        string $fiscal_date,
        string $delivered_at,
        string $created_at,
        string $updated_at,
        GoodTaxes $taxes,
        Discounts $discounts,
        string $header,
        string $footer,
        string $barcode,
        bool $is_created_offline,
        bool $is_sent_dps,
        string $sent_dps_at,
        Shift $shift
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->transaction = $transaction;
        $this->serial = $serial;
        $this->status = $status;
        $this->goods = $goods;
        $this->payments = $payments;
        $this->total_sum = $total_sum;
        $this->total_payment = $total_payment;
        $this->total_rest = $total_rest;
        $this->fiscal_code = $fiscal_code;
        $this->fiscal_date = $fiscal_date;
        $this->delivered_at = $delivered_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->taxes = $taxes;
        $this->discounts = $discounts;
        $this->header = $header;
        $this->footer = $footer;
        $this->barcode = $barcode;
        $this->is_created_offline = $is_created_offline;
        $this->is_sent_dps = $is_sent_dps;
        $this->sent_dps_at = $sent_dps_at;
        $this->shift = $shift;
    }
}
