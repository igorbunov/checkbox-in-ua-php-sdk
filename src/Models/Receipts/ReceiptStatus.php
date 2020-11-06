<?php

namespace igorbunov\Checkbox\Models\Receipts;

class ReceiptStatus
{
    public const CREATED = 'CREATED';
    public const DONE = 'DONE';
    public const ERROR = 'ERROR';

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
            self::CREATED,
            self::DONE,
            self::ERROR
        ];
    }

    private function validate(): void
    {
        if (!in_array($this->value, $this->allowedValues)) {
            throw new \Exception("Status '{$this->value}' is not allowed");
        }
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
