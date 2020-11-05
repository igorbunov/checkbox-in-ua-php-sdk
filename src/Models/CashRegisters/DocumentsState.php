<?php

namespace igorbunov\Checkbox\Models\CashRegisters;

class DocumentsState
{
    public $last_receipt_code;
    public $last_report_code;
    public $last_z_report_code;

    public function __construct(
        int $last_receipt_code,
        int $last_report_code,
        int $last_z_report_code
    ) {
        $this->last_receipt_code = $last_receipt_code;
        $this->last_report_code = $last_report_code;
        $this->last_z_report_code = $last_z_report_code;
    }
}
