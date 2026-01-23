<?php

namespace igorbunov\Checkbox\Models\Receipts\Payments;

class ProviderTypeEnum
{
    public const TAPXPHONE = "TAPXPHONE";
    public const POSCONTROL = "POSCONTROL";
    public const TERMINAL = "TERMINAL";
    public const ANDROID_PAYLINK = "ANDROID_PAYLINK";
    public const DESKTOP_PAYLINK = "DESKTOP_PAYLINK";

    /**
     * @return array<array-key, string>
     */
    public static function getKeys(): array
    {
        return [
            self::TAPXPHONE,
            self::POSCONTROL,
            self::TERMINAL,
            self::ANDROID_PAYLINK,
            self::DESKTOP_PAYLINK
        ];
    }

    public static function isCorrectValue(string $value): bool
    {
        return in_array($value, self::getKeys());
    }
}
