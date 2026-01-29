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
            (new Routes(""))->signInCashier()
        );
    }

    public function testSingOutCashier(): void
    {
        $this->assertStringContainsString(
            "signout",
            (new Routes(""))->signOutCashier()
        );
    }
    public function testSignInCashierViaSignature(): void
    {
        $this->assertStringContainsString(
            "signinSignature",
            (new Routes(""))->signInCashierViaSignature()
        );
    }
    public function testSignInCashierViaPinCode(): void
    {
        $this->assertStringContainsString(
            "test/cashier/signinPinCode",
            (new Routes("test"))->signInCashierViaPinCode()
        );
    }

    public function testGetTransaction(): void
    {
        $this->assertEquals(
            "test/transactions/asdfasdf",
            (new Routes("test"))->getTransaction("asdfasdf")
        );
    }

    public function testUpdateTransaction(): void
    {
        $transactionId = "sadf3123123a";
        $this->assertStringContainsString(
            "test/transactions/sadf3123123a",
            (new Routes("test"))->updateTransaction($transactionId)
        );
    }

    public function testCreatePrepaymentReceipt(): void
    {
        $this->assertStringContainsString(
            "test/prepayment-receipts",
            (new Routes("test"))->createPrepaymentReceipt()
        );
    }

    public function testAfterPrepaymentReceipt(): void
    {
        $this->assertStringContainsString(
            "test/prepayment-receipts/2345234524352345",
            (new Routes("test"))->createAfterPaymentReceipt("2345234524352345")
        );
    }
}
