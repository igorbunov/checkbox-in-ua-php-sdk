<?php

declare(strict_types=1);

namespace igorbunov\Checkbox\Mappers;

use igorbunov\Checkbox\Mappers\Shifts\ShiftMapper;
use PHPUnit\Framework\TestCase;

class CashierShiftTest extends TestCase
{
    public function testMapShiftWithNull(): void
    {
        $this->assertNull(
            (new ShiftMapper())->jsonToObject(null)
        );
    }
/*
    public function testMapProfileWithJson(): void
    {
        $jsonString = '{
           "id":"b24a5d01-9660-4269-baf9-ffda938c8f56",
           "full_name":"usertestkey 82",
           "nin":"",
           "key_id":"f8d4d9a394699c4461fegw331007d915f652e436b94e067643ed",
           "signature_type":"AGENT",
           "created_at":"2020-09-29T11:38:55+00:00",
           "updated_at":"2020-09-29T11:52:36+00:00",
           "organization":{
              "id":"c5a4205e-92d8-4640-ba69-d0d271d6a4aa",
              "title":"ПрАТ \"Літак\"",
              "edrpou":"3455355",
              "tax_number":"12136789012",
              "created_at":"2020-08-09T15:17:28+00:00",
              "updated_at":"2020-10-26T16:25:10+00:00"
           }
        }';

        $jsonResponse = json_decode($jsonString, true);

        $mapped = (new CashierMapper())->jsonToObject($jsonResponse);

        $this->assertEquals(
            'b24a5d01-9660-4269-baf9-ffda938c8f56',
            $mapped->id
        );

        $this->assertEquals(
            'usertestkey 82',
            $mapped->full_name
        );

        $this->assertEquals(
            'f8d4d9a394699c4461fegw331007d915f652e436b94e067643ed',
            $mapped->key_id
        );

        $this->assertEquals(
            'c5a4205e-92d8-4640-ba69-d0d271d6a4aa',
            $mapped->organization->id
        );

        $this->assertEquals(
            '12136789012',
            $mapped->organization->tax_number
        );
    }
    */
}
