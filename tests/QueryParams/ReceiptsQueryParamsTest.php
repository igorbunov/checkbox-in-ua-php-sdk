<?php

declare(strict_types=1);

namespace igorbunov\Checkbox\Mappers;

use igorbunov\Checkbox\Models\Receipts\ReceiptsQueryParams;
use PHPUnit\Framework\TestCase;

class ReceiptsQueryParamsTest extends TestCase
{
    public function testParamsWithError(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new ReceiptsQueryParams(
            'wefwefwf',
            'wefwefwf',
            false,
            2,
            -1
        ));
    }

    public function testParamsWithError2(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new ReceiptsQueryParams(
            'wefwefwf',
            'wefwefwf',
            false,
            2000,
            10
        ));
    }

    public function testParamsWithCorrect(): void
    {
        $this->assertIsObject(new ReceiptsQueryParams(
            '', '', false, 2, 0
        ));
    }
}
