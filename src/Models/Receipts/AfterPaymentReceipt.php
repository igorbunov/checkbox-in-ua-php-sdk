<?php

namespace igorbunov\Checkbox\Models\Receipts;

use igorbunov\Checkbox\Models\Receipts\Payments\Payments;

class AfterPaymentReceipt
{
    /** @var string $cashier_name */
    public $cashier_name;
    /** @var string $departament */
    public string $departament;
    /** @var Delivery $delivery */
    public Delivery $delivery;
    /** @var string $id */
    public string $id;
    /** @var Payments $payments */
    public $payments;
    /** @var string $header */
    public $header;
    /** @var string $footer */
    public $footer;

    public function __construct(
        string $cashier_name,
        string $departament,
        Delivery $delivery,
        Payments $payments,
        string $header = '',
        string $footer = '',
        string $id = ''
    ) {
        $this->cashier_name = $cashier_name;
        $this->departament = $departament;
        $this->delivery = $delivery;
        $this->payments = $payments;
        $this->header = $header;
        $this->footer = $footer;
        $this->id = $id;
    }
}
