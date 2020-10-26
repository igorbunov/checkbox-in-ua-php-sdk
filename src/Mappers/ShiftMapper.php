<?php

namespace Checkbox\Mappers;

use Checkbox\Models\Shift;

class ShiftMapper
{
    public function jsonToObject($json): Shift
    {
        $balance = (new BalanceMapper())->jsonToObject($json['balance']);
        $initialTransaction = (new InitialTransactionMapper())->jsonToObject($json['initial_transaction']);
        $cashRegister = (new CashRegisterMapper())->jsonToObject($json['cash_register']);
        $taxes = (new TaxesMapper())->jsonToObject($json['taxes']);

        $shift = new Shift(
            $json['id'],
            $json['serial'],
            $json['status'],
            $json['z_report'],
            $json['opened_at'],
            $json['closed_at'],
            $initialTransaction,
            $json['closing_transaction'],
            $json['created_at'],
            $json['updated_at'],
            $balance,
            $taxes,
            $cashRegister
        );

        return $shift;
    }

    public function objectToJson(Shift $obj)
    {
        pre('objectToJson', $obj);
    }
}
