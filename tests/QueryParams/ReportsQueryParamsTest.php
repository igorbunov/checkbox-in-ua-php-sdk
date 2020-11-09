<?php

declare(strict_types=1);

namespace igorbunov\Checkbox\Mappers;

use igorbunov\Checkbox\Models\Reports\ReportsQueryParams;
use PHPUnit\Framework\TestCase;

class ReportsQueryParamsTest extends TestCase
{
    public function testParamsWithError(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new ReportsQueryParams(
            '2020-10-27 00:00:00',
            '2020-11-04 13:15:00',
            [],
            false,
            true,
            30000,
            0
        ));
    }

    public function testParamsWithError2(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new ReportsQueryParams(
            '2020-10-27 00:00:00',
            '2020-11-04 13:15:00',
            [],
            false,
            true,
            3,
            -10
        ));
    }

    public function testParamsWithoutError1(): void
    {
        $this->assertIsObject(new ReportsQueryParams(
            '',
            '',
            [
                'someewiwewetweg'
            ],
            false,
            true,
            3,
            0
        ));
    }

    public function testParamsWithoutError2(): void
    {
        $this->assertIsObject(new ReportsQueryParams(
            '2020-10-27 00:00:00',
            '2020-11-04 13:15:00',
            [],
            false,
            true,
            3,
            0
        ));
    }
}
