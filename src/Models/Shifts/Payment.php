<?php

namespace Checkbox\Models\Shifts;

class Payment
{
    public $id;
    public $type;
    public $label;
    public $sell_sum;
    public $return_sum;
    public $service_in;
    public $service_out;

    public function __construct(
        $id,
        $type,
        $label,
        $sell_sum,
        $return_sum,
        $service_in,
        $service_out
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->label = $label;
        $this->sell_sum = $sell_sum;
        $this->return_sum = $return_sum;
        $this->service_in = $service_in;
        $this->service_out = $service_out;
    }
}