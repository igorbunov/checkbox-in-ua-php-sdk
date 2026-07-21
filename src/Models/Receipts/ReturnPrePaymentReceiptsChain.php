<?php

namespace igorbunov\Checkbox\Models\Receipts;

class ReturnPrePaymentReceiptsChain
{
    /** @var string $cashier_name */
    public $cashier_name;
    /** @var string $departament */
    public $departament;
    /** @var Delivery $delivery */
    public Delivery $delivery;

    public function __construct(string $cashier_name, string $departament, Delivery $delivery)
    {
        $this->cashier_name = $cashier_name;
        $this->departament = $departament;
        $this->delivery = $delivery;
    }
}
