<?php

namespace igorbunov\Checkbox\Models\Shifts;

class Balance
{
    /** @var string $initial */
    public $initial;
    /** @var string $balance */
    public $balance;
    /** @var string $cash_sales */
    public $cash_sales;
    /** @var string $card_sales */
    public $card_sales;
    /** @var string $cash_returns */
    public $cash_returns;
    /** @var string $card_returns */
    public $card_returns;
    /** @var string $service_in */
    public $service_in;
    /** @var string $service_out */
    public $service_out;
    /** @var string|null $updated_at */
    public $updated_at;

    public function __construct(
        string $initial,
        string $balance,
        string $cash_sales,
        string $card_sales,
        string $cash_returns,
        string $card_returns,
        string $service_in,
        string $service_out,
        ?string $updated_at
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
