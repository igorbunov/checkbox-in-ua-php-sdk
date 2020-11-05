<?php

declare(strict_types=1);

namespace igorbunov\Checkbox;

use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testGetValidValue(): void
    {
        $this->assertEquals(
            "testValue",
            (
                new Config(['testName' => 'testValue'])
            )->get('testName')
        );
    }

    public function testGetIsNotExistsValue(): void
    {
        $this->expectException(\Exception::class);
        $this->assertEquals(
            "testValue",
            (
                new Config(['testName' => 'testValue'])
            )->get('NotExistsKey')
        );
    }
}
