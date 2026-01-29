<?php

namespace igorbunov\Checkbox\Models\Receipts;

use igorbunov\Checkbox\Models\Receipts\Discounts\Discounts;
use igorbunov\Checkbox\Models\Receipts\Goods\Goods;
use igorbunov\Checkbox\Models\Receipts\Payments\Payments;

class PrepaymentReceipt extends SellReceipt
{
    /** @var string $custom_relation_id */
    public string $custom_relation_id;
    /** @var string $ettn */
    public string $ettn;
    public function __construct(
        string $cashier_name,
        string $departament,
        Goods $goods,
        Delivery $delivery,
        Payments $payments,
        ?Discounts $discounts = null,
        string $header = '',
        string $footer = '',
        string $barcode = '',
        string $id = '',
        string $related_receipt_id = '',
        string $custom_relation_id = '',
        string $ettn = '',
    ) {
        parent::__construct(
            $cashier_name,
            $departament,
            $goods,
            $delivery,
            $payments,
            $discounts,
            $header,
            $footer,
            $barcode,
            $id,
            $related_receipt_id
        );
        $this->custom_relation_id = $custom_relation_id;
        $this->ettn = $ettn;
    }
}
