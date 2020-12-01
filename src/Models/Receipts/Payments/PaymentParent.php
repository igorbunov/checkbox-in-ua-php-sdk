<?php

namespace igorbunov\Checkbox\Models\Receipts\Payments;

class PaymentParent
{
    public const TYPE_CASH = 'CASH';
    public const TYPE_CARD = 'CARD';

    /** @var string $type */
    public $type;
    /** @var string $value */
    public $value;
    /** @var string $label */
    public $label;

    public function __construct(
        string $type,
        string $value,
        string $label = ''
    ) {
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
