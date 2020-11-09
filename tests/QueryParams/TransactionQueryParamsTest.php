<?php

declare(strict_types=1);

namespace igorbunov\Checkbox\Mappers;

use igorbunov\Checkbox\Models\Transactions\TransactionsQueryParams;
use PHPUnit\Framework\TestCase;

class TransactionQueryParamsTest extends TestCase
{
    public function testParamsWithError(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new TransactionsQueryParams(
            [
                TransactionsQueryParams::STATUS_CREATED,
            ],
            [
                TransactionsQueryParams::TYPE_Z_REPORT
            ],
            2,
            -1
        ));
    }

    public function testParamsWithError2(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new TransactionsQueryParams(
            [
                TransactionsQueryParams::STATUS_CREATED,
            ],
            [
                TransactionsQueryParams::TYPE_Z_REPORT
            ],
            2000,
            10
        ));
    }

    public function testParamsWithError3(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new TransactionsQueryParams(
            [
                'some wrong status',
            ],
            [
                TransactionsQueryParams::TYPE_Z_REPORT
            ]
        ));
    }

    public function testParamsWithError4(): void
    {
        $this->expectException(\Exception::class);

        $this->assertIsObject(new TransactionsQueryParams(
            [
                TransactionsQueryParams::STATUS_CREATED,
            ], [
                'some wrong type'
            ]
        ));
    }

    public function testParamsWithoutError(): void
    {
        $this->assertIsObject(new TransactionsQueryParams(
            [
                TransactionsQueryParams::STATUS_CREATED,
                TransactionsQueryParams::STATUS_DONE,
                TransactionsQueryParams::STATUS_SIGNED
            ],
            [
                TransactionsQueryParams::TYPE_RECEIPT,
                TransactionsQueryParams::TYPE_SHIFT_OPEN,
                TransactionsQueryParams::TYPE_Z_REPORT
            ],
            2,
            0
        ));
    }
}
