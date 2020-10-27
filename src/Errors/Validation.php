<?php

namespace Checkbox\Errors;

class Validation extends \Exception
{
    protected $detail = '';

    public function __construct($jsonResult, $code = 0, \Exception $previous = null) {
        $this->detail = $jsonResult["detail"] ?? '';

        parent::__construct('Помилка вилідації', $code, $previous);
    }

    public function getDetail()
    {
        return $this->detail;
    }
}
