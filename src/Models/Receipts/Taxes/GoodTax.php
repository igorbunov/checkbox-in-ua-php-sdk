<?php

namespace igorbunov\Checkbox\Models\Receipts\Taxes;

class GoodTax
{
    public $id;
    public $code;
    public $label;
    public $symbol;
    public $rate;
    public $extra_rate;
    public $included;
    public $created_at;
    public $updated_at;
    public $value;
    public $extra_value;

    public function __construct(
        $id,
        $code,
        $label,
        $symbol,
        $rate,
        $extra_rate,
        $included,
        $created_at,
        $updated_at,
        $value,
        $extra_value
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