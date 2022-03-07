<?php

namespace igorbunov\Checkbox;

use igorbunov\Checkbox\Models\CashRegisters\CashRegistersQueryParams;
use igorbunov\Checkbox\Models\Receipts\ReceiptsQueryParams;
use igorbunov\Checkbox\Models\Reports\PeriodicalReportQueryParams;
use igorbunov\Checkbox\Models\Reports\ReportsQueryParams;
use igorbunov\Checkbox\Models\Shifts\ShiftsQueryParams;
use igorbunov\Checkbox\Models\Transactions\TransactionsQueryParams;

class Routes
{
    /** @var string $apiUrl */
    private $apiUrl;

    public function __construct(string $appUrl)
    {
        $this->apiUrl = $appUrl;
    }

    public function singInCashier(): string
    {
        return $this->apiUrl . '/cashier/signin';
    }

    public function singOutCashier(): string
    {
        return $this->apiUrl . '/cashier/signout';
    }

    public function signInCashierViaSignature(): string
    {
        return $this->apiUrl . '/cashier/signinSignature';
    }

    public function signInCashierViaPinCode(): string
    {
        return $this->apiUrl . '/cashier/signinPinCode';
    }

    public function getCashierProfile(): string
    {
        return $this->apiUrl . '/cashier/me';
    }

    public function getCashierShift(): string
    {
        return $this->apiUrl . '/cashier/shift';
    }

    public function createShift(): string
    {
        return $this->apiUrl . '/shifts';
    }

    public function getShifts(ShiftsQueryParams $queryParams): string
    {
        $params = [];

        if (count($queryParams->statuses) > 0) {
            foreach ($queryParams->statuses as $status) {
                $params[] = "statuses={$status}";
            }
        }

        $value = ($queryParams->desc) ? 'true' : 'false';
        $params[] = "desc={$value}";

        $params[] = "limit={$queryParams->limit}";
        $params[] = "offset={$queryParams->offset}";

        $params = implode('&', $params);

        return $this->apiUrl . '/shifts?' . $params;
    }

    public function closeShift(): string
    {
        return $this->apiUrl . '/shifts/close';
    }

    public function getShift(string $shiftId): string
    {
        return $this->apiUrl . '/shifts/' . $shiftId;
    }

    public function pingTaxServiceAction(): string
    {
        return $this->apiUrl . '/cashier/ping-tax-service';
    }

    public function getCashRegisters(CashRegistersQueryParams $queryParams): string
    {
        $params = [];

        if (!is_null($queryParams->inUse)) {
            $value = ($queryParams->inUse) ? 'true' : 'false';

            $params[] = "in_use={$value}";
        }

        $params[] = "limit={$queryParams->limit}";
        $params[] = "offset={$queryParams->offset}";

        $params = implode('&', $params);

        return $this->apiUrl . '/cash-registers?' . $params;
    }

    public function getCashRegister(string $registerId): string
    {
        return $this->apiUrl . '/cash-registers/' . $registerId;
    }

    public function getCashRegisterInfo(): string
    {
        return $this->apiUrl . '/cash-registers/info';
    }

    public function getReceipt(string $receiptId): string
    {
        return $this->apiUrl . '/receipts/' . $receiptId;
    }

    public function createSellReceipt(): string
    {
        return $this->apiUrl . '/receipts/sell';
    }

    public function createServiceReceipt(): string
    {
        return $this->apiUrl . '/receipts/service';
    }

    public function getReceipts(ReceiptsQueryParams $queryParams): string
    {
        $params = [];

        if (!empty($queryParams->fiscal_code)) {
            $params[] = "fiscal_code={$queryParams->fiscal_code}";
        }

        if (!empty($queryParams->serial)) {
            $params[] = "serial={$queryParams->serial}";
        }

        $value = ($queryParams->desc) ? 'true' : 'false';
        $params[] = "desc={$value}";

        $params[] = "limit={$queryParams->limit}";
        $params[] = "offset={$queryParams->offset}";

        $params = implode('&', $params);

        return $this->apiUrl . '/receipts?' . $params;
    }

    public function getReceiptPdf(string $receiptId): string
    {
        return $this->apiUrl . '/receipts/' . $receiptId . '/pdf';
    }

    public function getReceiptHtml(string $receiptId): string
    {
        return $this->apiUrl . '/receipts/' . $receiptId . '/html';
    }

    public function getReceiptText(string $receiptId): string
    {
        return $this->apiUrl . '/receipts/' . $receiptId . '/text';
    }

    public function getReceiptQrCodeImage(string $receiptId): string
    {
        return $this->apiUrl . '/receipts/' . $receiptId . '/qrcode';
    }

    public function getReceiptImagePng(string $receiptId, int $width = 30, int $paperWidth = 58): string
    {
        return $this->apiUrl . '/receipts/' . $receiptId . '/png?width=' . $width . '&paper_width=' . $paperWidth;
    }

    public function getAllTaxes(): string
    {
        return $this->apiUrl . '/tax';
    }

    public function createXReport(): string
    {
        return $this->apiUrl . '/reports';
    }

    public function getReport(string $reportId): string
    {
        return $this->apiUrl . '/reports/' . $reportId;
    }

    public function getReportText(string $reportId, int $printArea): string
    {
        return $this->apiUrl . '/reports/' . $reportId . '/text?width=' . $printArea;
    }

    public function getPeriodicalReport(PeriodicalReportQueryParams $queryParams): string
    {
        return $this->apiUrl . '/reports/periodical?from_date=' . $queryParams->from_date
            . '&to_date=' . $queryParams->to_date
            . '&width=' . $queryParams->width;
    }

    public function getReports(ReportsQueryParams $queryParams): string
    {
        $params = [];

        if (!empty($queryParams->from_date)) {
            $params[] = "from_date={$queryParams->from_date}";
        }

        if (!empty($queryParams->to_date)) {
            $params[] = "to_date={$queryParams->to_date}";
        }

        if (!empty($queryParams->shift_id) and is_array($queryParams->shift_id)) {
            foreach ($queryParams->shift_id as $shiftId) {
                $params[] = "shift_id={$shiftId}";
            }
        }

        if (!is_null($queryParams->is_z_report)) {
            if ($queryParams->is_z_report) {
                $params[] = "is_z_report=true";
            } else {
                $params[] = "is_z_report=false";
            }
        }

        $value = ($queryParams->desc) ? 'true' : 'false';
        $params[] = "desc={$value}";

        $params[] = "limit={$queryParams->limit}";
        $params[] = "offset={$queryParams->offset}";

        $params = implode('&', $params);

        return $this->apiUrl . '/reports?' . $params;
    }

    public function getTransactions(TransactionsQueryParams $queryParams): string
    {
        $params = [];

        foreach ($queryParams->statuses as $status) {
            $params[] = "status={$status}";
        }

        foreach ($queryParams->types as $type) {
            $params[] = "type={$type}";
        }

        $params[] = "limit={$queryParams->limit}";
        $params[] = "offset={$queryParams->offset}";

        $params = implode('&', $params);

        return $this->apiUrl . '/transactions?' . $params;
    }

    public function getTransaction(string $transactionId): string
    {
        return $this->apiUrl . '/transactions/' . $transactionId;
    }

    public function updateTransaction(string $transactionId): string
    {
        return $this->apiUrl . '/transactions/' . $transactionId;
    }
}
