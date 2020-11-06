<?php

declare(strict_types=1);

namespace igorbunov\Checkbox\Mappers;

use igorbunov\Checkbox\Models\CashRegisters\CashRegistersQueryParams;
use PHPUnit\Framework\TestCase;

class CashRegistersQueryParamsTest extends TestCase
{
    public function testParamsWithError(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new CashRegistersQueryParams(true, 3, -2));
    }

    public function testParamsWithError2(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new CashRegistersQueryParams(false, 2300, 1));
    }

    public function testParamsWithError4(): void
    {
        $this->assertIsObject(new CashRegistersQueryParams(true, 3, 0));
    }
}
