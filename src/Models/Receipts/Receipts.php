<?php

namespace igorbunov\Checkbox\Models\Receipts;

use igorbunov\Checkbox\Models\Meta;

class Receipts
{
    public $results = [];
    public $meta;

    public function __construct(array $receipts, Meta $meta)
    {
        foreach ($receipts as $receipt) {
            if (!is_a($receipt, Receipt::class)) {
                throw new \Exception('This is not a Receipt class');
            }

            $this->results[] = $receipt;
        }

        $this->meta = $meta;
    }
}
