<?php

namespace igorbunov\Checkbox\Models\Cashier;

class Organization
{
    /** @var string $id */
    public $id;
    /** @var string $title */
    public $title;
    /** @var string $edrpou */
    public $edrpou;
    /** @var string $tax_number */
    public $tax_number;
    /** @var string $created_at */
    public $created_at;
    /** @var string $updated_at */
    public $updated_at;
    /** @var string $subscription_exp */
    public $subscription_exp;

    public function __construct(
        string $id,
        string $title,
        string $edrpou,
        string $tax_number,
        string $created_at,
        string $updated_at,
        string $subscription_exp
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->edrpou = $edrpou;
        $this->tax_number = $tax_number;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->subscription_exp = $subscription_exp;
    }
}
