<?php

namespace igorbunov\Checkbox\Mappers\CashRegisters;

use igorbunov\Checkbox\Models\CashRegisters\DocumentsState;

class DocumentsStateMapper
{
    public function jsonToObject($json): ?DocumentsState
    {
        if (is_null($json)) {
            return null;
        }

        $state = new DocumentsState(
            $json['last_receipt_code'],
            $json['last_report_code'],
            $json['last_z_report_code']
        );

        return $state;
    }

    public function objectToJson(DocumentsState $obj)
    {
        var_dump('objectToJson', $obj);
    }
}
