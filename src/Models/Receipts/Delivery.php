<?php

namespace igorbunov\Checkbox\Models\Receipts;

class Delivery
{
    /** @var string $phone */
    private string $phone;
    /** @var array<string> $emails */
    private array $emails;

    /**
     * Constructor
     *
     * @param array<string> $emails
     * @param string $phone
     *
     */
    public function __construct(array $emails = [], string $phone = '')
    {
        $this->phone = $phone;
        $this->emails = $emails;
    }

    /**
     * @return string[]
     */
    public function getEmails(): array
    {
        return $this->emails;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
}
