<?php

declare(strict_types=1);

namespace igorbunov\Checkbox\Mappers;

use igorbunov\Checkbox\Mappers\Receipts\DeliveryMapper;
use igorbunov\Checkbox\Models\Receipts\Delivery;
use PHPUnit\Framework\TestCase;

class DeliveryTest extends TestCase
{
    public function testAddEmailToJson(): void
    {
        $delivery = new Delivery(["test@mail.com"]);
        $delivery->addEmail("test2@mail.com");
        $mapped = (new DeliveryMapper())->objectToJson($delivery);

        $this->assertEquals(
            [
                "emails" => ["test@mail.com", "test2@mail.com"]
            ],
            $mapped
        );
    }

    public function testSetPhoneToJson(): void
    {
        $delivery = new Delivery(["test@mail.com"]);
        $delivery->setPhone("+3803124234");
        $mapped = (new DeliveryMapper())->objectToJson($delivery);

        $this->assertEquals(
            [
                "emails" => ["test@mail.com"],
                "phone" => "+3803124234"
            ],
            $mapped
        );
    }

    public function testObjectToJson(): void
    {
        $mapped = (new DeliveryMapper())->objectToJson(
            new Delivery(["test@mail.com"])
        );

        $this->assertEquals(
            [
                "emails" => ["test@mail.com"]
            ],
            $mapped
        );
    }
}
