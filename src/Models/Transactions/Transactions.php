<?php

namespace igorbunov\Checkbox\Models\Transactions;

use igorbunov\Checkbox\Models\Meta;

class Transactions
{
    /** @var array<Transaction> $results */
    public $results;
    /** @var Meta|null $meta */
    public $meta;

    /**
     * Constructor
     *
     * @param array<Transaction> $transacitons
     * @param Meta|null $meta
     *
     */
    public function __construct(array $transacitons, ?Meta $meta)
    {
        foreach ($transacitons as $transaciton) {
            if (!is_a($transaciton, Transaction::class)) {
                throw new \Exception('This is not a transaction class');
            }

            $this->results[] = $transaciton;
        }

        $this->meta = $meta;
    }
}
