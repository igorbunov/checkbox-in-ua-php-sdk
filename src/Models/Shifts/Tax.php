<?php

namespace igorbunov\Checkbox\Models\Shifts;

class Tax
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
    /** @var string $extra_rate */
    public $extra_rate;
    /** @var string $included */
    public $included;
    /** @var string $created_at */
    public $created_at;
    /** @var string $updated_at */
    public $updated_at;
    /** @var string $sales */
    public $sales;
    /** @var string $returns */
    public $returns;
    /** @var string $sales_turnover */
    public $sales_turnover;
    /** @var string $returns_turnover */
    public $returns_turnover;

    public function __construct(
        string $id,
        string $code,
        string $label,
        string $symbol,
        string $rate,
        string $extra_rate,
        string $included,
        string $created_at,
        string $updated_at,
        string $sales,
        string $returns,
        string $sales_turnover,
        string $returns_turnover
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
        $this->sales = $sales;
        $this->returns = $returns;
        $this->sales_turnover = $sales_turnover;
        $this->returns_turnover = $returns_turnover;
    }
}
