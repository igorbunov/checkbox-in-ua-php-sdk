<?php

namespace igorbunov\Checkbox\Models\Shifts;

class Payment
{
    /** @var string $id */
    public $id;
    /** @var string $type */
    public $type;
    /** @var string $label */
    public $label;
    /** @var int $sell_sum */
    public $sell_sum;
    /** @var int $return_sum */
    public $return_sum;
    /** @var string $service_in */
    public $service_in;
    /** @var string $service_out */
    public $service_out;

    public function __construct(
        string $id,
        string $type,
        string $label,
        int $sell_sum,
        int $return_sum,
        string $service_in,
        string $service_out
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
