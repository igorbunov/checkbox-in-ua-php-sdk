<?php

namespace igorbunov\Checkbox\Errors;

class Validation extends \Exception implements Exception
{
    /** @var array<mixed> $detail */
    protected $detail;

    /**
     * Constructor
     *
     * @param mixed $jsonResult
     * @param int $code
     * @param \Exception $previous
     *
     */
    public function __construct($jsonResult, $code = 0, \Exception $previous = null)
    {
        $this->detail = $jsonResult['detail'] ?? [];

        parent::__construct('Помилка вилідації', $code, $previous);
    }

    /**
     * @return array<mixed>
     */
    public function getDetail(): array
    {
        return $this->detail;
    }
}
