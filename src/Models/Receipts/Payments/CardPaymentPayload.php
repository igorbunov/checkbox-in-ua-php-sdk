<?php

namespace Checkbox\Models\Receipts\Payments;

class CardPaymentPayload extends PaymentParent
{
    public $code;
    public $card_mask;

    public function __construct(
        int $value,
        string $label = 'Безготівковий',
        int $code = 0,
        string $card_mask = ''
    )
    {
        parent::__construct(parent::TYPE_CARD, $value, $label);

        $this->code = $code;
        $this->card_mask = $card_mask;
    }
}