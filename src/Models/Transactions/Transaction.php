<?php

namespace igorbunov\Checkbox\Models\Transactions;

class Transaction
{
    /** @var string $id */
    public $id;
    /** @var string $type */
    public $type;
    /** @var string $serial */
    public $serial;
    /** @var string $status */
    public $status;
    /** @var string|null $request_signed_at */
    public $request_signed_at;
    /** @var string|null $request_received_at */
    public $request_received_at;
    /** @var string|null $response_status */
    public $response_status;
    /** @var string|null $response_error_message */
    public $response_error_message;
    /** @var string $created_at */
    public $created_at;
    /** @var string $updated_at */
    public $updated_at;

    /** @var string $request_data */
    public $request_data;
    /** @var string $request_signature */
    public $request_signature;
    /** @var string $response_id */
    public $response_id;
    /** @var string|null $response_data_signature */
    public $response_data_signature;
    /** @var string|null $response_data */
    public $response_data;

    public function __construct(
        string $id,
        string $type,
        string $serial,
        string $status,
        ?string $request_signed_at,
        ?string $request_received_at,
        ?string $response_status,
        ?string $response_error_message,
        string $created_at,
        string $updated_at,
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
