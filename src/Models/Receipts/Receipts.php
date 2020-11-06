<?php

namespace igorbunov\Checkbox\Models\Receipts;

use igorbunov\Checkbox\Models\Meta;

class Receipts
{
    /** @var array<Receipt> $results */
    public $results = [];
    /** @var Meta|null $meta */
    public $meta;

    /**
     * Constructor
     *
     * @param array<Receipt> $receipts
     * @param Meta|null $meta
     *
     */
    public function __construct(array $receipts, ?Meta $meta)
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
