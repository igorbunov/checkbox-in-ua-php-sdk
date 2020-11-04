<?php

namespace Checkbox\Models\Transactions;

class Transaction
{
    public $id;
    public $type;
    public $serial;
    public $status;
    public $request_signed_at;
    public $request_received_at;
    public $response_status;
    public $response_error_message;
    public $created_at;
    public $updated_at;

    public $request_data;
    public $request_signature;
    public $response_id;
    public $response_data_signature;
    public $response_data;

    public function __construct(
        $id,
        $type,
        $serial,
        $status,
        $request_signed_at,
        $request_received_at,
        $response_status,
        $response_error_message,
        $created_at,
        $updated_at,

        string $request_data = '',
        string $request_signature = '',
        string $response_id = '',
        ?string $response_data_signature = null,
        ?string $response_data = null
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->serial = $serial;
        $this->status = $status;
        $this->request_signed_at = $request_signed_at;
        $this->request_received_at = $request_received_at;
        $this->response_status = $response_status;
        $this->response_error_message = $response_error_message;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;

        $this->request_data = $request_data;
        $this->request_signature = $request_signature;
        $this->response_id = $response_id;
        $this->response_data_signature = $response_data_signature;
        $this->response_data = $response_data;
    }
}
