<?php

namespace igorbunov\Checkbox\Models\Receipts\Discounts;

class DiscountModel
{
    public const TYPE_DISCOUNT = 'DISCOUNT';
    public const TYPE_EXTRA_CHARGE = 'EXTRA_CHARGE';

    public const MODE_PERCENT = 'PERCENT';
    public const MODE_VALUE = 'VALUE';

    private $allowedTypes = [];
    private $allowedModes = [];

    public $type;
    public $mode;
    public $value;
    public $tax_code;
    public $tax_codes;
    public $name;
    public $sum;

    public function __construct(
        string $type,
        string $mode,
        int $value,
        int $sum,
        string $tax_code = '',
        array $tax_codes = [],
        string $name = ''
    ) {
        $this->initAllowedTypes();
        $this->initAllowedModes();

        $this->type = $type;
        $this->mode = $mode;
        $this->value = $value;
        $this->sum = $sum;
        $this->tax_code = $tax_code;
        $this->tax_codes = $tax_codes;
        $this->name = $name;

        $this->validateTypes();
        $this->validateModes();
    }

    private function initAllowedTypes()
    {
        $this->allowedTypes = [
            self::TYPE_DISCOUNT,
            self::TYPE_EXTRA_CHARGE
        ];
    }

    private function initAllowedModes()
    {
        $this->allowedModes = [
            self::MODE_PERCENT,
            self::MODE_VALUE
        ];
    }

    private function validateTypes()
    {
        if (!in_array($this->type, $this->allowedTypes)) {
            throw new \Exception("Type '{$this->type}' is not allowed");
        }
    }

    private function validateModes()
    {
        if (!in_array($this->mode, $this->allowedModes)) {
            throw new \Exception("Mode '{$this->mode}' is not allowed");
        }
    }
}
