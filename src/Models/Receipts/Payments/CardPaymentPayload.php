<?php

namespace Checkbox\Models\Receipts\Payments;

class CardPaymentPayload
{
    public $type = 'CARD';
    public $code;
    public $value;
    public $label;
    public $card_mask;

    public function __construct(
        int $value,
        int $code = 0,
        string $label = '',
        string $card_mask = ''
    )
    {
        $this->value = $value;

        if (mb_strlen($label) > 128) {
            throw new \Exception('Label is too long');
        }

        $this->label = $label;
        $this->code = $code;
        $this->card_mask = $card_mask;
    }
}