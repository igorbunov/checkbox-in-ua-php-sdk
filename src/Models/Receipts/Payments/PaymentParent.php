<?php

namespace Checkbox\Models\Receipts\Payments;

class PaymentParent
{
    const TYPE_CASH = 'CASH';
    const TYPE_CARD = 'CARD';

    public $type;
    public $value;
    public $label;

    public function __construct(
        string $type,
        int $value,
        string $label = ''
    )
    {
        if (!in_array($type, [self::TYPE_CASH, self::TYPE_CARD])) {
            throw new \Exception('Wrong payment type');
        }

        $this->type = $type;
        $this->value = $value;

        if (mb_strlen($label) > 128) {
            throw new \Exception('Label is too long');
        }

        $this->label = $label;
    }
}