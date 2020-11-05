<?php

namespace igorbunov\Checkbox\Models\Receipts;

class ReceiptTypes
{
    public const SELL = 'SELL';
    public const RETURN = 'RETURN';
    public const SERVICE_IN = 'SERVICE_IN';
    public const SERVICE_OUT = 'SERVICE_OUT';

    private $allowedValues = [];
    private $value = '';

    public function __construct(string $value)
    {
        $this->initAllowedValues();

        $this->value = $value;

        $this->validate();
    }

    private function initAllowedValues()
    {
        $this->allowedValues = [
            self::SELL,
            self::RETURN,
            self::SERVICE_IN,
            self::SERVICE_OUT
        ];
    }

    private function validate()
    {
        if (!in_array($this->value, $this->allowedValues)) {
            throw new \Exception("Type '{$this->value}' is not allowed");
        }
    }

    public function getValue()
    {
        return $this->value;
    }
}
