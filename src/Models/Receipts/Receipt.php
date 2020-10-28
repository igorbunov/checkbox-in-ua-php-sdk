<?php

namespace Checkbox\Models\Receipts;

use Checkbox\Models\Receipts\Discounts\Discounts;
use Checkbox\Models\Receipts\Goods\Goods;
use Checkbox\Models\Receipts\Payments\Payments;
use Checkbox\Models\Receipts\Taxes\GoodTaxes;
use Checkbox\Models\Shifts\Shift;
use Checkbox\Models\Transaction;

class Receipt
{
    public $id;
    public $type;
    public $transaction;
    public $serial;
    public $status;
    public $goods;
    public $payments;
    public $total_sum;
    public $total_payment;
    public $total_rest;
    public $fiscal_code;
    public $fiscal_date;
    public $delivered_at;
    public $created_at;
    public $updated_at;
    public $taxes;
    public $discounts;
    public $header;
    public $footer;
    public $barcode;
    public $is_created_offline;
    public $is_sent_dps;
    public $sent_dps_at;
    public $shift;

    public function __construct(
        string $id,
        ReceiptTypes $type,
        Transaction $transaction,
        int $serial,
        ReceiptStatus $status,
        Goods $goods,
        Payments $payments,
        int $total_sum,
        int $total_payment,
        int $total_rest,
        string $fiscal_code,
        string $fiscal_date,
        string $delivered_at,
        string $created_at,
        string $updated_at,
        GoodTaxes $taxes,
        Discounts $discounts,
        string $header,
        string $footer,
        string $barcode,
        bool $is_created_offline,
        bool $is_sent_dps,
        string $sent_dps_at,
        Shift $shift
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->transaction = $transaction;
        $this->serial = $serial;
        $this->status = $status;
        $this->goods = $goods;
        $this->payments = $payments;
        $this->total_sum = $total_sum;
        $this->total_payment = $total_payment;
        $this->total_rest = $total_rest;
        $this->fiscal_code = $fiscal_code;
        $this->fiscal_date = $fiscal_date;
        $this->delivered_at = $delivered_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->taxes = $taxes;
        $this->discounts = $discounts;
        $this->header = $header;
        $this->footer = $footer;
        $this->barcode = $barcode;
        $this->is_created_offline = $is_created_offline;
        $this->is_sent_dps = $is_sent_dps;
        $this->sent_dps_at = $sent_dps_at;
        $this->shift = $shift;
    }
}

/*
array(24) {
  ["id"]=>
  string(36) "c6a66550-44b8-4767-9bb0-66f0123c8efa"
  ["type"]=>
  string(4) "SELL"
  ["transaction"]=>
  array(10) {
    ["id"]=>
    string(36) "87dbd622-0f06-492b-9fa6-7c4237ff32dd"
    ["type"]=>
    string(7) "RECEIPT"
    ["serial"]=>
    int(4)
    ["status"]=>
    string(4) "DONE"
    ["request_signed_at"]=>
    string(32) "2020-10-05T11:20:33.322373+00:00"
    ["request_received_at"]=>
    string(32) "2020-10-05T11:20:34.371321+00:00"
    ["response_status"]=>
    string(2) "OK"
    ["response_error_message"]=>
    NULL
    ["created_at"]=>
    string(32) "2020-10-05T11:20:32.531352+00:00"
    ["updated_at"]=>
    string(32) "2020-10-05T11:20:35.003179+00:00"
  }
  ["serial"]=>
  int(0)
  ["status"]=>
  string(4) "DONE"
  ["goods"]=>
  array(1) {
    [0]=>
    array(7) {
      ["good"]=>
      array(7) {
        ["code"]=>
        string(9) "some code"
        ["barcode"]=>
        string(0) ""
        ["name"]=>
        string(12) "Биовак"
        ["header"]=>
        string(13) "header good 1"
        ["footer"]=>
        string(13) "footer good 1"
        ["uktzed"]=>
        NULL
        ["price"]=>
        int(10)
      }
      ["good_id"]=>
      NULL
      ["sum"]=>
      int(0)
      ["quantity"]=>
      int(1)
      ["is_return"]=>
      bool(false)
      ["taxes"]=>
      array(1) {
        [0]=>
        array(11) {
          ["id"]=>
          string(36) "77d9be25-f8c2-4378-a467-6b28976a26f2"
          ["code"]=>
          int(1)
          ["label"]=>
          string(6) "ПДВ"
          ["symbol"]=>
          string(2) "А"
          ["rate"]=>
          int(20)
          ["extra_rate"]=>
          NULL
          ["included"]=>
          bool(true)
          ["created_at"]=>
          string(25) "2020-08-22T19:48:42+00:00"
          ["updated_at"]=>
          NULL
          ["value"]=>
          int(0)
          ["extra_value"]=>
          int(0)
        }
      }
      ["discounts"]=>
      array(0) {
      }
    }
  }
  ["payments"]=>
  array(1) {
    [0]=>
    array(3) {
      ["type"]=>
      string(4) "CASH"
      ["value"]=>
      int(10)
      ["label"]=>
      string(6) "string"
    }
  }
  ["total_sum"]=>
  int(0)
  ["total_payment"]=>
  int(10)
  ["total_rest"]=>
  int(9)
  ["fiscal_code"]=>
  string(11) "FapcbmT9Tkc"
  ["fiscal_date"]=>
  string(32) "2020-10-05T11:20:35.003179+00:00"
  ["delivered_at"]=>
  string(32) "2020-10-05T11:20:37.144020+00:00"
  ["created_at"]=>
  string(32) "2020-10-05T11:20:32.585347+00:00"
  ["updated_at"]=>
  string(32) "2020-10-05T11:20:37.144020+00:00"
  ["taxes"]=>
  array(1) {
    [0]=>
    array(11) {
      ["id"]=>
      string(36) "bd06c405-f4d9-4058-a863-931e5eafd7b2"
      ["code"]=>
      int(1)
      ["label"]=>
      string(6) "ПДВ"
      ["symbol"]=>
      string(2) "А"
      ["rate"]=>
      int(20)
      ["extra_rate"]=>
      NULL
      ["included"]=>
      bool(true)
      ["created_at"]=>
      string(25) "2020-08-22T19:48:42+00:00"
      ["updated_at"]=>
      NULL
      ["value"]=>
      int(0)
      ["extra_value"]=>
      int(0)
    }
  }
  ["discounts"]=>
  array(0) {
  }
  ["header"]=>
  NULL
  ["footer"]=>
  string(11) "footer text"
  ["barcode"]=>
  string(0) ""
  ["is_created_offline"]=>
  bool(false)
  ["is_sent_dps"]=>
  bool(false)
  ["sent_dps_at"]=>
  NULL
  ["shift"]=>
  array(14) {
    ["id"]=>
    string(36) "eae0b00a-b5ac-4959-9e1b-533593b55f3c"
    ["serial"]=>
    int(0)
    ["status"]=>
    string(6) "CLOSED"
    ["z_report"]=>
    array(11) {
      ["id"]=>
      string(36) "1cd942ba-03a9-460a-a37e-00623a9c16ea"
      ["serial"]=>
      int(0)
      ["is_z_report"]=>
      bool(true)
      ["payments"]=>
      array(3) {
        [0]=>
        array(7) {
          ["id"]=>
          string(36) "e8f06cd0-16d5-4423-b70a-9ff731c5d5f4"
          ["type"]=>
          string(4) "CASH"
          ["label"]=>
          string(6) "string"
          ["sell_sum"]=>
          int(5010)
          ["return_sum"]=>
          int(0)
          ["service_in"]=>
          int(0)
          ["service_out"]=>
          int(0)
        }
        [1]=>
        array(7) {
          ["id"]=>
          string(36) "2a93eabd-d631-4193-87aa-6d84dbf72e4e"
          ["type"]=>
          string(4) "CARD"
          ["label"]=>
          string(19) "карта ВИЗА"
          ["sell_sum"]=>
          int(5000)
          ["return_sum"]=>
          int(0)
          ["service_in"]=>
          int(0)
          ["service_out"]=>
          int(0)
        }
        [2]=>
        array(7) {
          ["id"]=>
          string(36) "c1548a47-f1f9-4407-b8ac-d86a1798d6f0"
          ["type"]=>
          string(4) "CASH"
          ["label"]=>
          string(10) "налик"
          ["sell_sum"]=>
          int(20000)
          ["return_sum"]=>
          int(0)
          ["service_in"]=>
          int(0)
          ["service_out"]=>
          int(0)
        }
      }
      ["taxes"]=>
      array(19) {
        [0]=>
        array(10) {
          ["id"]=>
          string(36) "8415be53-a629-4655-b834-22d1b94474df"
          ["code"]=>
          int(2)
          ["label"]=>
          string(9) "ПДВ Б"
          ["symbol"]=>
          string(2) "Б"
          ["rate"]=>
          float(7)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-09T18:35:10+00:00"
        }
        [1]=>
        array(10) {
          ["id"]=>
          string(36) "cbcb6eb9-e0f6-47fc-9d80-53f76db19c49"
          ["code"]=>
          int(123123)
          ["label"]=>
          string(1) "1"
          ["symbol"]=>
          string(1) "1"
          ["rate"]=>
          float(1)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-14T13:32:07+00:00"
        }
        [2]=>
        array(10) {
          ["id"]=>
          string(36) "bac4d177-801f-4354-b978-3d5ef987c17e"
          ["code"]=>
          int(33333)
          ["label"]=>
          string(1) "2"
          ["symbol"]=>
          string(1) "1"
          ["rate"]=>
          float(1)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-14T13:34:49+00:00"
        }
        [3]=>
        array(10) {
          ["id"]=>
          string(36) "5479674d-b9e5-4dca-9436-ae475d2be949"
          ["code"]=>
          int(12)
          ["label"]=>
          string(1) "1"
          ["symbol"]=>
          string(1) "1"
          ["rate"]=>
          float(1)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-14T16:21:59+00:00"
        }
        [4]=>
        array(10) {
          ["id"]=>
          string(36) "10240473-af38-4c0f-8ca7-2ff3fc956afd"
          ["code"]=>
          int(13)
          ["label"]=>
          string(1) "1"
          ["symbol"]=>
          string(1) "1"
          ["rate"]=>
          float(1)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-17T09:41:16+00:00"
        }
        [5]=>
        array(10) {
          ["id"]=>
          string(36) "51555efb-a5c5-4394-b8be-e77fa594973e"
          ["code"]=>
          int(10)
          ["label"]=>
          string(8) "сбор"
          ["symbol"]=>
          string(2) "Д"
          ["rate"]=>
          float(1.2)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-17T10:03:12+00:00"
        }
        [6]=>
        array(10) {
          ["id"]=>
          string(36) "f5121c97-ae90-4213-9522-5eca77161b91"
          ["code"]=>
          int(9999)
          ["label"]=>
          string(1) "1"
          ["symbol"]=>
          string(1) "1"
          ["rate"]=>
          float(1)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-17T10:04:11+00:00"
        }
        [7]=>
        array(10) {
          ["id"]=>
          string(36) "fe67399b-345c-48d1-ad66-a7313e431ec1"
          ["code"]=>
          int(5)
          ["label"]=>
          string(1) "3"
          ["symbol"]=>
          string(1) "1"
          ["rate"]=>
          float(2)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-17T10:06:31+00:00"
        }
        [8]=>
        array(10) {
          ["id"]=>
          string(36) "9c9378b3-4c11-45eb-be01-1723c54fc5d5"
          ["code"]=>
          int(31)
          ["label"]=>
          string(2) "12"
          ["symbol"]=>
          string(2) "12"
          ["rate"]=>
          float(12)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-17T10:09:09+00:00"
        }
        [9]=>
        array(10) {
          ["id"]=>
          string(36) "01fb4fd6-4f22-4ab4-a457-15bcddbfb5b6"
          ["code"]=>
          int(3)
          ["label"]=>
          string(25) "Акцизний збір"
          ["symbol"]=>
          string(5) "Ж111"
          ["rate"]=>
          float(1.5)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-17T11:23:01+00:00"
        }
        [10]=>
        array(10) {
          ["id"]=>
          string(36) "908f93a5-74c0-496c-91fe-1ea7324762d8"
          ["code"]=>
          int(123124)
          ["label"]=>
          string(1) "1"
          ["symbol"]=>
          string(1) "1"
          ["rate"]=>
          float(1)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-17T12:01:18+00:00"
        }
        [11]=>
        array(10) {
          ["id"]=>
          string(36) "ca15f1be-0df2-4b57-a5b9-be9e1c8e9b7c"
          ["code"]=>
          int(2)
          ["label"]=>
          string(17) "ПДВ+акциз"
          ["symbol"]=>
          string(2) "Б"
          ["rate"]=>
          float(20)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-22T19:48:14+00:00"
        }
        [12]=>
        array(10) {
          ["id"]=>
          string(36) "4586f0a1-19bd-4a7e-a1eb-65f70d0cd35d"
          ["code"]=>
          int(3)
          ["label"]=>
          string(10) "Акциз"
          ["symbol"]=>
          string(2) "В"
          ["rate"]=>
          float(0)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-22T19:49:12+00:00"
        }
        [13]=>
        array(10) {
          ["id"]=>
          string(36) "54f98b20-b966-4e2c-895b-109b6a2ab6c5"
          ["code"]=>
          int(4)
          ["label"]=>
          string(13) "без пдв"
          ["symbol"]=>
          string(2) "Г"
          ["rate"]=>
          float(0)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-22T19:49:36+00:00"
        }
        [14]=>
        array(10) {
          ["id"]=>
          string(36) "d63803bb-bba7-45ea-a964-af7460b39b97"
          ["code"]=>
          int(1234567890)
          ["label"]=>
          string(12) "3 група"
          ["symbol"]=>
          string(8) "А і Б"
          ["rate"]=>
          float(5)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-09-25T16:20:25+00:00"
        }
        [15]=>
        array(10) {
          ["id"]=>
          string(36) "d586fdb3-f1fa-4c23-bd5d-1b0946bcb31e"
          ["code"]=>
          int(8)
          ["label"]=>
          string(12) "2 група"
          ["symbol"]=>
          string(2) "В"
          ["rate"]=>
          float(3)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-09-25T16:24:42+00:00"
        }
        [16]=>
        array(10) {
          ["id"]=>
          string(36) "6840d018-4dcd-4c46-9d52-1be32e293e67"
          ["code"]=>
          int(123125)
          ["label"]=>
          string(13) "Без ПДВ"
          ["symbol"]=>
          string(8) "івфа"
          ["rate"]=>
          float(0)
          ["sell_sum"]=>
          int(0)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(0)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-10-02T12:46:10+00:00"
        }
        [17]=>
        array(10) {
          ["id"]=>
          string(36) "c8ae424d-32bd-4afa-9342-ce92a5c96a4d"
          ["code"]=>
          int(1)
          ["label"]=>
          string(6) "ПДВ"
          ["symbol"]=>
          string(2) "А"
          ["rate"]=>
          float(20)
          ["sell_sum"]=>
          int(4999)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(30000)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-22T19:48:42+00:00"
        }
        [18]=>
        array(10) {
          ["id"]=>
          string(36) "072d5c52-1817-4af5-a3ed-ccca468d1eda"
          ["code"]=>
          int(1)
          ["label"]=>
          string(9) "ПДВ А"
          ["symbol"]=>
          string(2) "А"
          ["rate"]=>
          float(20)
          ["sell_sum"]=>
          int(2)
          ["return_sum"]=>
          int(0)
          ["sales_turnover"]=>
          int(10)
          ["returns_turnover"]=>
          int(0)
          ["created_at"]=>
          string(25) "2020-08-09T18:34:04+00:00"
        }
      }
      ["sell_receipts_count"]=>
      int(6)
      ["return_receipts_count"]=>
      int(0)
      ["transfers_count"]=>
      int(0)
      ["transfers_sum"]=>
      int(0)
      ["created_at"]=>
      string(32) "2020-10-06T06:12:28.558017+00:00"
      ["updated_at"]=>
      NULL
    }
    ["opened_at"]=>
    string(32) "2020-10-05T10:53:15.184844+00:00"
    ["closed_at"]=>
    string(32) "2020-10-06T06:13:37.047473+00:00"
    ["initial_transaction"]=>
    array(10) {
      ["id"]=>
      string(36) "c301b216-10eb-4b0e-b21a-47dab1b56a64"
      ["type"]=>
      string(10) "SHIFT_OPEN"
      ["serial"]=>
      int(0)
      ["status"]=>
      string(4) "DONE"
      ["request_signed_at"]=>
      string(32) "2020-10-05T10:53:12.259694+00:00"
      ["request_received_at"]=>
      string(32) "2020-10-05T10:53:13.315504+00:00"
      ["response_status"]=>
      string(2) "OK"
      ["response_error_message"]=>
      NULL
      ["created_at"]=>
      string(32) "2020-10-05T10:14:36.171086+00:00"
      ["updated_at"]=>
      string(32) "2020-10-05T10:53:15.166567+00:00"
    }
    ["closing_transaction"]=>
    array(10) {
      ["id"]=>
      string(36) "14216376-dc6b-4138-bb46-b516e6b7848e"
      ["type"]=>
      string(8) "Z_REPORT"
      ["serial"]=>
      int(4)
      ["status"]=>
      string(4) "DONE"
      ["request_signed_at"]=>
      string(32) "2020-10-06T06:13:35.260304+00:00"
      ["request_received_at"]=>
      string(32) "2020-10-06T06:13:36.391860+00:00"
      ["response_status"]=>
      string(2) "OK"
      ["response_error_message"]=>
      NULL
      ["created_at"]=>
      string(32) "2020-10-06T06:12:28.454065+00:00"
      ["updated_at"]=>
      string(32) "2020-10-06T06:13:37.038331+00:00"
    }
    ["created_at"]=>
    string(32) "2020-10-05T10:14:36.171086+00:00"
    ["updated_at"]=>
    string(32) "2020-10-06T06:13:37.082144+00:00"
    ["balance"]=>
    array(9) {
      ["initial"]=>
      int(0)
      ["balance"]=>
      int(25010)
      ["cash_sales"]=>
      int(25010)
      ["card_sales"]=>
      int(5000)
      ["cash_returns"]=>
      int(0)
      ["card_returns"]=>
      int(0)
      ["service_in"]=>
      int(0)
      ["service_out"]=>
      int(0)
      ["updated_at"]=>
      string(32) "2020-10-05T11:45:47.668773+00:00"
    }
    ["taxes"]=>
    array(19) {
      [0]=>
      array(13) {
        ["id"]=>
        string(36) "00a8ab3b-ceaf-48c1-abae-d888cb726869"
        ["code"]=>
        int(2)
        ["label"]=>
        string(9) "ПДВ Б"
        ["symbol"]=>
        string(2) "Б"
        ["rate"]=>
        int(7)
        ["extra_rate"]=>
        NULL
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-09T18:35:10+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [1]=>
      array(13) {
        ["id"]=>
        string(36) "44678bd8-bc5e-4022-98e7-c406b442983d"
        ["code"]=>
        int(123123)
        ["label"]=>
        string(1) "1"
        ["symbol"]=>
        string(1) "1"
        ["rate"]=>
        int(1)
        ["extra_rate"]=>
        NULL
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-14T13:32:07+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [2]=>
      array(13) {
        ["id"]=>
        string(36) "7bc3c5fa-d8c0-4201-ab71-8d9c993b3695"
        ["code"]=>
        int(33333)
        ["label"]=>
        string(1) "2"
        ["symbol"]=>
        string(1) "1"
        ["rate"]=>
        int(1)
        ["extra_rate"]=>
        NULL
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-14T13:34:49+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [3]=>
      array(13) {
        ["id"]=>
        string(36) "ad800403-fa13-4c18-ba02-09af3110d455"
        ["code"]=>
        int(12)
        ["label"]=>
        string(1) "1"
        ["symbol"]=>
        string(1) "1"
        ["rate"]=>
        int(1)
        ["extra_rate"]=>
        int(1)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-14T16:21:59+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [4]=>
      array(13) {
        ["id"]=>
        string(36) "0e209daf-99e5-42e6-be8e-30bf9847c30d"
        ["code"]=>
        int(13)
        ["label"]=>
        string(1) "1"
        ["symbol"]=>
        string(1) "1"
        ["rate"]=>
        int(1)
        ["extra_rate"]=>
        int(1)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-17T09:41:16+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [5]=>
      array(13) {
        ["id"]=>
        string(36) "6e20fff9-275b-4c00-85ba-e29a588ac47c"
        ["code"]=>
        int(10)
        ["label"]=>
        string(8) "сбор"
        ["symbol"]=>
        string(2) "Д"
        ["rate"]=>
        int(1)
        ["extra_rate"]=>
        int(1)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-17T10:03:12+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [6]=>
      array(13) {
        ["id"]=>
        string(36) "caee0cca-7e49-491e-bb2c-30056de805e0"
        ["code"]=>
        int(9999)
        ["label"]=>
        string(1) "1"
        ["symbol"]=>
        string(1) "1"
        ["rate"]=>
        int(1)
        ["extra_rate"]=>
        int(1)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-17T10:04:11+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [7]=>
      array(13) {
        ["id"]=>
        string(36) "b89cbe0d-f59f-46d6-aa7f-2800ebd4c057"
        ["code"]=>
        int(5)
        ["label"]=>
        string(1) "3"
        ["symbol"]=>
        string(1) "1"
        ["rate"]=>
        int(2)
        ["extra_rate"]=>
        int(4)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-17T10:06:31+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [8]=>
      array(13) {
        ["id"]=>
        string(36) "c954e34b-753e-4164-b2b2-45e1cc201b00"
        ["code"]=>
        int(31)
        ["label"]=>
        string(2) "12"
        ["symbol"]=>
        string(2) "12"
        ["rate"]=>
        int(12)
        ["extra_rate"]=>
        int(1)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-17T10:09:09+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [9]=>
      array(13) {
        ["id"]=>
        string(36) "634eb7bc-dd27-4381-b3e3-90b886d2a6ee"
        ["code"]=>
        int(3)
        ["label"]=>
        string(25) "Акцизний збір"
        ["symbol"]=>
        string(5) "Ж111"
        ["rate"]=>
        int(1)
        ["extra_rate"]=>
        int(5)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-17T11:23:01+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [10]=>
      array(13) {
        ["id"]=>
        string(36) "501bcc4b-f6ea-4e7a-a5b4-0da26bd4b659"
        ["code"]=>
        int(123124)
        ["label"]=>
        string(1) "1"
        ["symbol"]=>
        string(1) "1"
        ["rate"]=>
        int(1)
        ["extra_rate"]=>
        int(1)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-17T12:01:18+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [11]=>
      array(13) {
        ["id"]=>
        string(36) "9b2ae879-fa31-4ac4-87b5-d364f254f2fc"
        ["code"]=>
        int(2)
        ["label"]=>
        string(17) "ПДВ+акциз"
        ["symbol"]=>
        string(2) "Б"
        ["rate"]=>
        int(20)
        ["extra_rate"]=>
        int(5)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-22T19:48:14+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [12]=>
      array(13) {
        ["id"]=>
        string(36) "4ca2fc14-fa65-4f73-8dd9-8f4ce4e2290b"
        ["code"]=>
        int(3)
        ["label"]=>
        string(10) "Акциз"
        ["symbol"]=>
        string(2) "В"
        ["rate"]=>
        int(0)
        ["extra_rate"]=>
        int(5)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-22T19:49:12+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [13]=>
      array(13) {
        ["id"]=>
        string(36) "ed511784-ad10-4325-b243-ee66bd123a2e"
        ["code"]=>
        int(4)
        ["label"]=>
        string(13) "без пдв"
        ["symbol"]=>
        string(2) "Г"
        ["rate"]=>
        int(0)
        ["extra_rate"]=>
        NULL
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-22T19:49:36+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [14]=>
      array(13) {
        ["id"]=>
        string(36) "48864912-d7f5-4d29-ada3-b8d26d54dd32"
        ["code"]=>
        int(1234567890)
        ["label"]=>
        string(12) "3 група"
        ["symbol"]=>
        string(8) "А і Б"
        ["rate"]=>
        int(5)
        ["extra_rate"]=>
        int(0)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-09-25T16:20:25+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [15]=>
      array(13) {
        ["id"]=>
        string(36) "fd02ac7f-8c53-4fdd-bd4f-c8c4dd652f0b"
        ["code"]=>
        int(8)
        ["label"]=>
        string(12) "2 група"
        ["symbol"]=>
        string(2) "В"
        ["rate"]=>
        int(3)
        ["extra_rate"]=>
        int(1)
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-09-25T16:24:42+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [16]=>
      array(13) {
        ["id"]=>
        string(36) "f489b1b1-e532-43e4-86e0-6269d41ff3dd"
        ["code"]=>
        int(123125)
        ["label"]=>
        string(13) "Без ПДВ"
        ["symbol"]=>
        string(8) "івфа"
        ["rate"]=>
        int(0)
        ["extra_rate"]=>
        NULL
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-10-02T12:46:10+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(0)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(0)
        ["returns_turnover"]=>
        int(0)
      }
      [17]=>
      array(13) {
        ["id"]=>
        string(36) "bd06c405-f4d9-4058-a863-931e5eafd7b2"
        ["code"]=>
        int(1)
        ["label"]=>
        string(6) "ПДВ"
        ["symbol"]=>
        string(2) "А"
        ["rate"]=>
        int(20)
        ["extra_rate"]=>
        NULL
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-22T19:48:42+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(4999)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(30000)
        ["returns_turnover"]=>
        int(0)
      }
      [18]=>
      array(13) {
        ["id"]=>
        string(36) "52ce512c-e10f-4784-816a-264b5d26d0be"
        ["code"]=>
        int(1)
        ["label"]=>
        string(9) "ПДВ А"
        ["symbol"]=>
        string(2) "А"
        ["rate"]=>
        int(20)
        ["extra_rate"]=>
        NULL
        ["included"]=>
        bool(true)
        ["created_at"]=>
        string(25) "2020-08-09T18:34:04+00:00"
        ["updated_at"]=>
        NULL
        ["sales"]=>
        int(2)
        ["returns"]=>
        int(0)
        ["sales_turnover"]=>
        int(10)
        ["returns_turnover"]=>
        int(0)
      }
    }
    ["cash_register"]=>
    array(4) {
      ["id"]=>
      string(36) "3e650f3e-09b9-44e4-baea-f40f143cbb00"
      ["fiscal_number"]=>
      string(10) "4000037367"
      ["created_at"]=>
      string(25) "2020-09-28T10:57:51+00:00"
      ["updated_at"]=>
      string(25) "2020-10-13T11:28:38+00:00"
    }
    ["cashier"]=>
    array(7) {
      ["id"]=>
      string(36) "b24a5d01-9660-4269-baf9-ffda938c8f56"
      ["full_name"]=>
      string(14) "usertestkey 82"
      ["nin"]=>
      string(0) ""
      ["key_id"]=>
      string(64) "f8d4d9a394699c44616a8d84250f2cdc08331007d915f652e436b94e067643ed"
      ["signature_type"]=>
      string(5) "AGENT"
      ["created_at"]=>
      string(25) "2020-09-29T11:38:55+00:00"
      ["updated_at"]=>
      string(25) "2020-09-29T11:52:36+00:00"
    }
  }
}
 */
