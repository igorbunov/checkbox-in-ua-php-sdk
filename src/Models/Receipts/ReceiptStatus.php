<?php

namespace igorbunov\Checkbox\Models\Receipts;

class ReceiptStatus
{
    const CREATED = 'CREATED';
    const DONE = 'DONE';
    const ERROR = 'ERROR';

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
            self::CREATED,
            self::DONE,
            self::ERROR
        ];
    }

    private function validate()
    {
        if (!in_array($this->value, $this->allowedValues)) {
            throw new \Exception("Status '{$this->value}' is not allowed");
        }
    }

    public function getValue()
    {
        return $this->value;
    }
}
