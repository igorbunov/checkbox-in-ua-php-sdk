<?php

namespace igorbunov\Checkbox\Models\Receipts;

class ReceiptTypes
{
    public const SELL = 'SELL';
    public const RETURN = 'RETURN';
    public const SERVICE_IN = 'SERVICE_IN';
    public const SERVICE_OUT = 'SERVICE_OUT';
    public const PRE_PAYMENT = 'PRE_PAYMENT';

    /** @var array<string> $allowedValues */
    private $allowedValues = [];
    /** @var string $value */
    private $value = '';

    public function __construct(string $value)
    {
        $this->initAllowedValues();

        $this->value = $value;

        $this->validate();
    }

    private function initAllowedValues(): void
    {
        $this->allowedValues = [
            self::SELL,
            self::RETURN,
            self::SERVICE_IN,
            self::SERVICE_OUT,
            self::PRE_PAYMENT
        ];
    }

    private function validate(): void
    {
        if (!in_array($this->value, $this->allowedValues)) {
            throw new \Exception("Type '{$this->value}' is not allowed");
        }
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
