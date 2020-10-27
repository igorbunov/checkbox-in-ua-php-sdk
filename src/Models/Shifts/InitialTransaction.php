<?php

namespace Checkbox\Models\Shifts;

class InitialTransaction
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
        $updated_at
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
    }
}
