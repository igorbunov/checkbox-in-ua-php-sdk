<?php

namespace igorbunov\Checkbox\Mappers\CashRegisters;

use igorbunov\Checkbox\Models\CashRegisters\CashRegisterInfo;

class CashRegisterInfoMapper
{
    /**
     * @param mixed $json
     * @return CashRegisterInfo|null
     */
    public function jsonToObject($json): ?CashRegisterInfo
    {
        if (is_null($json)) {
            return null;
        }

        $documentsState = (new DocumentsStateMapper())->jsonToObject($json['documents_state']);

        $cashRegisterInfo = new CashRegisterInfo(
            $json['id'],
            $json['fiscal_number'],
            $json['created_at'],
            $json['updated_at'],
            $json['address'],
            $json['title'],
            $documentsState
        );

        return $cashRegisterInfo;
    }
}
