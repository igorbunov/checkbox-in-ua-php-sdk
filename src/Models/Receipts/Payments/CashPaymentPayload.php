<?php

namespace Checkbox\Models\Receipts\Payments;

class CashPaymentPayload
{
    public $type = 'CASH';
    public $value;
    public $label;

    public function __construct(
        int $value,
        string $label = ''
    )
    {
        $this->value = $value;

        if (mb_strlen($label) > 128) {
            throw new \Exception('Label is too long');
        }

        $this->label = $label;
    }
}