<?php

namespace igorbunov\Checkbox\Mappers\Receipts;

use igorbunov\Checkbox\Models\Receipts\ReturnPrePaymentReceiptsChain;

class ReturnPrePaymentReceiptsChainMapper
{
    /**
     * @param ReturnPrePaymentReceiptsChain $receipt
     * @return array<string, mixed>
     */
    public function objectToJson(ReturnPrePaymentReceiptsChain $receipt): array
    {
        return [
            'cashier_name' => $receipt->cashier_name,
            'departament' => $receipt->departament,
            'delivery' => (new DeliveryMapper())->objectToJson($receipt->delivery)
        ];
    }
}
