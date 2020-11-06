<?php

namespace igorbunov\Checkbox\Models\Receipts\Taxes;

class GoodTax
{
    /** @var string $id */
    public $id;
    /** @var string $code */
    public $code;
    /** @var string $label */
    public $label;
    /** @var string $symbol */
    public $symbol;
    /** @var string $rate */
    public $rate;
    /** @var string|null $extra_rate */
    public $extra_rate;
    /** @var string $included */
    public $included;
    /** @var string $created_at */
    public $created_at;
    /** @var string|null $updated_at */
    public $updated_at;
    /** @var int $value */
    public $value;
    /** @var string $extra_value */
    public $extra_value;

    public function __construct(
        string $id,
        string $code,
        string $label,
        string $symbol,
        string $rate,
        ?string $extra_rate,
        string $included,
        string $created_at,
        ?string $updated_at,
        int $value,
        string $extra_value
    ) {
        $this->id = $id;
        $this->code = $code;
        $this->label = $label;
        $this->symbol = $symbol;
        $this->rate = $rate;
        $this->extra_rate = $extra_rate;
        $this->included = $included;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->value = $value;
        $this->extra_value = $extra_value;
    }
}
