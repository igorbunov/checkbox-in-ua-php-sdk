<?php

declare(strict_types=1);

namespace igorbunov\Checkbox;

use PHPUnit\Framework\TestCase;

class RoutesTest extends TestCase
{
    public function testConstruct(): void
    {
        $this->assertTrue(
            is_object(
                new Routes("")
            )
        );
    }
    public function testSingInCashier(): void
    {
        $this->assertStringContainsString(
            "signin",
            (new Routes(""))->singInCashier()
        );
    }

    public function testSingOutCashier(): void
    {
        $this->assertStringContainsString(
            "signout",
            (new Routes(""))->singOutCashier()
        );
    }
    public function testSignInCashierViaSignature(): void
    {
        $this->assertStringContainsString(
            "signinSignature",
            (new Routes(""))->signInCashierViaSignature()
        );
    }
}
