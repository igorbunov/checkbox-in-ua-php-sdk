<?php

namespace igorbunov\Checkbox\Models\Receipts\Discounts;

class DiscountModel
{
    public const TYPE_DISCOUNT = 'DISCOUNT';
    public const TYPE_EXTRA_CHARGE = 'EXTRA_CHARGE';

    public const MODE_PERCENT = 'PERCENT';
    public const MODE_VALUE = 'VALUE';

    /** @var array<string> $allowedTypes */
    private $allowedTypes = [];
    /** @var array<string> $allowedModes */
    private $allowedModes = [];

    /** @var string $type */
    public $type;
    /** @var string $mode */
    public $mode;
    /** @var int $value */
    public $value;
    /** @var string $tax_code */
    public $tax_code;
    /** @var array<string> $tax_codes */
    public $tax_codes;
    /** @var string $name */
    public $name;
    /** @var int $sum */
    public $sum;

    /**
     * Constructor
     *
     * @param string $type
     * @param string $mode
     * @param int $value
     * @param int $sum
     * @param string $tax_code
     * @param array<string> $tax_codes
     * @param string $name
     *
     */
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

    private function initAllowedTypes(): void
    {
        $this->allowedTypes = [
            self::TYPE_DISCOUNT,
            self::TYPE_EXTRA_CHARGE
        ];
    }

    private function initAllowedModes(): void
    {
        $this->allowedModes = [
            self::MODE_PERCENT,
            self::MODE_VALUE
        ];
    }

    private function validateTypes(): void
    {
        if (!in_array($this->type, $this->allowedTypes)) {
            throw new \Exception("Type '{$this->type}' is not allowed");
        }
    }

    private function validateModes(): void
    {
        if (!in_array($this->mode, $this->allowedModes)) {
            throw new \Exception("Mode '{$this->mode}' is not allowed");
        }
    }
}
