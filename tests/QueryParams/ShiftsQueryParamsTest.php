<?php

declare(strict_types=1);

namespace igorbunov\Checkbox\Mappers;

use PHPUnit\Framework\TestCase;
use igorbunov\Checkbox\Models\Shifts\ShiftsQueryParams;

class ShiftsQueryParamsTest extends TestCase
{
    public function testParamsWithError(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new ShiftsQueryParams(
            [
                ShiftsQueryParams::STATUS_CLOSED,
                ShiftsQueryParams::STATUS_OPENED
            ],
            false,
            2,
            -1
        ));
    }

    public function testParamsWithError2(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new ShiftsQueryParams(
            [
                ShiftsQueryParams::STATUS_CLOSED,
            ],
            false,
            2000,
            10
        ));
    }

    public function testParamsWithError3(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new ShiftsQueryParams(
            [
                'some wrong status',
            ]
        ));
    }

    public function testParamsWithError4(): void
    {
        $this->assertIsObject(new ShiftsQueryParams(
            [
                ShiftsQueryParams::STATUS_CLOSED,
                ShiftsQueryParams::STATUS_CLOSING,
                ShiftsQueryParams::STATUS_OPENED,
                ShiftsQueryParams::STATUS_OPENING
            ],
            true,
            50,
            10
        ));
    }
}
