<?php

namespace igorbunov\Checkbox\Models\Shifts;

class Balance
{
    public $initial;
    public $balance;
    public $cash_sales;
    public $card_sales;
    public $cash_returns;
    public $card_returns;
    public $service_in;
    public $service_out;
    public $updated_at;

    public function __construct(
        $initial,
        $balance,
        $cash_sales,
        $card_sales,
        $cash_returns,
        $card_returns,
        $service_in,
        $service_out,
        $updated_at
    ) {
        $this->initial = $initial;
        $this->balance = $balance;
        $this->cash_sales = $cash_sales;
        $this->card_sales = $card_sales;
        $this->cash_returns = $cash_returns;
        $this->card_returns = $card_returns;
        $this->service_in = $service_in;
        $this->service_out = $service_out;
        $this->updated_at = $updated_at;
    }
}
