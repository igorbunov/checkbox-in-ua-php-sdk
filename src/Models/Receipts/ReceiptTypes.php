<?php

namespace Checkbox\Models\Receipts;

class ReceiptTypes
{
    const SELL = 'SELL';
    const RETURN = 'RETURN';
    const SERVICE_IN = 'SERVICE_IN';
    const SERVICE_OUT = 'SERVICE_OUT';

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