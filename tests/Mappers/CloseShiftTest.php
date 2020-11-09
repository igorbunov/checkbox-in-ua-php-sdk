<?php

declare(strict_types=1);

namespace igorbunov\Checkbox\Mappers;

use igorbunov\Checkbox\Mappers\Shifts\CloseShiftMapper;
use PHPUnit\Framework\TestCase;

class CloseShiftTest extends TestCase
{
    /** @var  string $jsonString */
    private $jsonString;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->jsonString = '{
           "id":"903e3aa6-68d6-4c0b-ab68-4e05137a3f6e",
           "serial":28,
           "status":"CLOSING",
           "z_report":{
              "id":"c91dc85d-a593-4aea-95da-eaf649a74c6c",
              "serial":28,
              "is_z_report":true,
              "payments":[
                 
              ],
              "taxes":[
                 {
                    "id":"4080d825-efff-4014-9e55-d7a8905f2e0a",
                    "code":1234567891,
                    "label":"Побори",
                    "symbol":"Я",
                    "rate":12.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-22T15:42:36+00:00"
                 },
                 {
                    "id":"0a94d8c7-da75-4fa4-a7f9-ad088fbffb1a",
                    "code":1234567890,
                    "label":"ПДВ",
                    "symbol":"A",
                    "rate":5.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-07T11:22:07+00:00"
                 },
                 {
                    "id":"99315e9e-9093-4c90-a075-9ce33f95d53a",
                    "code":123123,
                    "label":"4",
                    "symbol":"Д",
                    "rate":5.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-22T16:14:11+00:00"
                 },
                 {
                    "id":"41beaf48-c099-4a3c-a0d8-0af9160e64a6",
                    "code":4,
                    "label":"ПДВ",
                    "symbol":"В",
                    "rate":7.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-26T10:53:33+00:00"
                 },
                 {
                    "id":"93ecb830-2c58-4667-b00b-c391ecfdf21a",
                    "code":2,
                    "label":"Акцизний збір",
                    "symbol":"Г",
                    "rate":0.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-26T10:53:41+00:00"
                 },
                 {
                    "id":"9eec6b87-916a-459a-99e9-d6ab45ae7ed8",
                    "code":3,
                    "label":"Без ПДВ",
                    "symbol":"Е",
                    "rate":0.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-26T10:54:08+00:00"
                 },
                 {
                    "id":"1d61350c-7922-437a-a451-12341af59c31",
                    "code":1,
                    "label":"ПДВ А",
                    "symbol":"Є",
                    "rate":20.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-26T10:54:18+00:00"
                 },
                 {
                    "id":"cff48fa8-432c-4a54-9012-e104c8ece99f",
                    "code":5,
                    "label":"Не є об\'єктом оподаткування",
                    "symbol":"И",
                    "rate":0.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-26T10:54:47+00:00"
                 },
                 {
                    "id":"e205f37e-0f32-4fb2-a559-4d4b433eff50",
                    "code":1230321,
                    "label":"Без ПДВ",
                    "symbol":"Б",
                    "rate":0.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-08T16:22:21+00:00"
                 },
                 {
                    "id":"95dcaf12-c2a1-40d3-bcc6-a5961a5793db",
                    "code":123124,
                    "label":"1",
                    "symbol":"Ж",
                    "rate":1.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-08T16:24:47+00:00"
                 },
                 {
                    "id":"f5e91ef7-6e2a-4069-ad02-f99c675aa0ea",
                    "code":33333,
                    "label":"2",
                    "symbol":"З",
                    "rate":1.0,
                    "sell_sum":0,
                    "return_sum":0,
                    "sales_turnover":0,
                    "returns_turnover":0,
                    "created_at":"2020-10-08T16:25:03+00:00"
                 }
              ],
              "sell_receipts_count":0,
              "return_receipts_count":0,
              "transfers_count":0,
              "transfers_sum":0,
              "created_at":"2020-11-06T13:04:56.252478+00:00",
              "updated_at":"2020-11-06T13:04:56.401242+00:00"
           },
           "opened_at":"2020-11-06T12:53:38.778699+00:00",
           "closed_at":null,
           "initial_transaction":{
              "id":"21f26cb4-3b02-4798-90b6-e0a04e9d2ff9",
              "type":"SHIFT_OPEN",
              "serial":0,
              "status":"DONE",
              "request_signed_at":"2020-11-06T12:53:37.742162+00:00",
              "request_received_at":null,
              "response_status":null,
              "response_error_message":null,
              "created_at":"2020-11-06T12:53:36.332968+00:00",
              "updated_at":"2020-11-06T12:53:38.772624+00:00"
           },
           "closing_transaction":{
              "id":"14c37e84-dd80-40e9-9da9-02ec3f610368",
              "type":"Z_REPORT",
              "serial":4,
              "status":"PENDING",
              "request_signed_at":null,
              "request_received_at":null,
              "response_status":null,
              "response_error_message":null,
              "created_at":"2020-11-06T13:04:56.252478+00:00",
              "updated_at":"2020-11-06T13:04:56.401242+00:00"
           },
           "created_at":"2020-11-06T12:53:36.332968+00:00",
           "updated_at":"2020-11-06T13:04:56.401242+00:00",
           "balance":{
              "initial":271230,
              "balance":271230,
              "cash_sales":0,
              "card_sales":0,
              "cash_returns":0,
              "card_returns":0,
              "service_in":0,
              "service_out":0,
              "updated_at":null
           },
           "taxes":[
              {
                 "id":"3bca1dc8-3225-4937-abb5-27abf78597b7",
                 "code":1234567891,
                 "label":"Побори",
                 "symbol":"Я",
                 "rate":12,
                 "extra_rate":15,
                 "included":true,
                 "created_at":"2020-10-22T15:42:36+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"a558c59b-7363-47d5-a4f6-ee82da50ac18",
                 "code":1234567890,
                 "label":"ПДВ",
                 "symbol":"A",
                 "rate":5,
                 "extra_rate":null,
                 "included":true,
                 "created_at":"2020-10-07T11:22:07+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"d0f0ed04-8410-4093-8293-a6c8fb43ad7b",
                 "code":123123,
                 "label":"4",
                 "symbol":"Д",
                 "rate":5,
                 "extra_rate":null,
                 "included":true,
                 "created_at":"2020-10-22T16:14:11+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"92dbdca8-fefb-4296-a4de-487cc073c34d",
                 "code":4,
                 "label":"ПДВ",
                 "symbol":"В",
                 "rate":7,
                 "extra_rate":0,
                 "included":true,
                 "created_at":"2020-10-26T10:53:33+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"a94b0a8e-762b-4487-bd5b-f210e548d1fc",
                 "code":2,
                 "label":"Акцизний збір",
                 "symbol":"Г",
                 "rate":0,
                 "extra_rate":5,
                 "included":true,
                 "created_at":"2020-10-26T10:53:41+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"f3a74b9a-dd1e-4a13-b84d-93597687ebb5",
                 "code":3,
                 "label":"Без ПДВ",
                 "symbol":"Е",
                 "rate":0,
                 "extra_rate":0,
                 "included":true,
                 "created_at":"2020-10-26T10:54:08+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"18ec2250-c140-47be-918c-d06850f3f595",
                 "code":1,
                 "label":"ПДВ А",
                 "symbol":"Є",
                 "rate":20,
                 "extra_rate":0,
                 "included":true,
                 "created_at":"2020-10-26T10:54:18+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"865e7836-d257-4902-8f2c-3b184cf21e8e",
                 "code":5,
                 "label":"Не є об\'єктом оподаткування",
                 "symbol":"И",
                 "rate":0,
                 "extra_rate":0,
                 "included":true,
                 "created_at":"2020-10-26T10:54:47+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"f5f270a0-ced5-4c33-b488-1059622ee5df",
                 "code":1230321,
                 "label":"Без ПДВ",
                 "symbol":"Б",
                 "rate":0,
                 "extra_rate":3,
                 "included":true,
                 "created_at":"2020-10-08T16:22:21+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"b8a503d6-a9ab-476d-8f1c-6aaafbf420fb",
                 "code":123124,
                 "label":"1",
                 "symbol":"Ж",
                 "rate":1,
                 "extra_rate":1,
                 "included":true,
                 "created_at":"2020-10-08T16:24:47+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              },
              {
                 "id":"b26d2c76-ee74-4c59-8ac0-a78e2fd04e74",
                 "code":33333,
                 "label":"2",
                 "symbol":"З",
                 "rate":1,
                 "extra_rate":6,
                 "included":true,
                 "created_at":"2020-10-08T16:25:03+00:00",
                 "updated_at":null,
                 "sales":0,
                 "returns":0,
                 "sales_turnover":0,
                 "returns_turnover":0
              }
           ],
           "cash_register":{
              "id":"3e650f3e-09b9-44e4-baea-f40f143cbb00",
              "fiscal_number":"4000037367",
              "created_at":"2020-09-28T10:57:51+00:00",
              "updated_at":"2020-11-06T13:04:56.401242+00:00"
           },
           "cashier":{
              "id":"b24a5d01-9660-4269-baf9-ffda938c8f56",
              "full_name":"usertestkey 82",
              "nin":"",
              "key_id":"f8d4d9a394699c44616a8d84250f2cdc08331007d915f652e436b94e067643ed",
              "signature_type":"AGENT",
              "created_at":"2020-09-29T11:38:55+00:00",
              "updated_at":"2020-09-29T11:52:36+00:00"
           }
        }';
    }

    public function testMapCreateShiftWithNull(): void
    {
        $this->assertNull(
            (new CloseShiftMapper())->jsonToObject(null)
        );
    }

    public function testMapCreateShiftMeta(): void
    {
        $jsonResponse = json_decode($this->jsonString, true);

        $mapped = (new CloseShiftMapper())->jsonToObject($jsonResponse);

        $this->assertEquals(
            '903e3aa6-68d6-4c0b-ab68-4e05137a3f6e',
            $mapped->id
        );
        $this->assertEquals(
            '21f26cb4-3b02-4798-90b6-e0a04e9d2ff9',
            $mapped->initial_transaction->id
        );
        $this->assertEquals(
            '271230',
            $mapped->balance->initial
        );
        $this->assertEquals(
            '3bca1dc8-3225-4937-abb5-27abf78597b7',
            $mapped->taxes->taxes[0]->id
        );
        $this->assertEquals(
            '3e650f3e-09b9-44e4-baea-f40f143cbb00',
            $mapped->cash_register->id
        );
        $this->assertEquals(
            'b24a5d01-9660-4269-baf9-ffda938c8f56',
            $mapped->cashier->id
        );
    }
}