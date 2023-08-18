<?php

namespace igorbunov\Checkbox\Errors;

class BadRequestExceptionFactory
{
    /**
     * @param string $message
     * @return \Exception
     */
    public static function getExceptionByMessage($message)
    {
        if (
            $message === 'Каса зайнята іншим касиром'
            or $message === 'Касир вже працює з даною касою'
        ) {
            return new AlreadyOpenedShift($message);
        }

        if ($message === 'Зміну не відкрито') {
            return new NoActiveShift($message);
        }

        return new BadRequest($message);
    }
}
