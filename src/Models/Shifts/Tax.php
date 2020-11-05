<?php

namespace igorbunov\Checkbox\Models\Shifts;

class Tax
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
    public $sales;
    public $returns;
    public $sales_turnover;
    public $returns_turnover;

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
        $sales,
        $returns,
        $sales_turnover,
        $returns_turnover
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
