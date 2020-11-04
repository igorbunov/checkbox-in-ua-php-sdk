<?php

namespace Checkbox\Models\Transactions;

class TransactionsQueryParams
{
    public $statuses;
    public $types;
    public $limit;
    public $offset;

    private $allowedStatuses;
    private $allowedTypes;

    const STATUS_CREATED = 'CREATED';
    const STATUS_PENDING = 'PENDING';
    const STATUS_SIGNED = 'SIGNED';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_DONE = 'DONE';
    const STATUS_ERROR = 'ERROR';

    const TYPE_SHIFT_OPEN = 'SHIFT_OPEN';
    const TYPE_X_REPORT = 'X_REPORT';
    const TYPE_Z_REPORT = 'Z_REPORT';
    const TYPE_PING = 'PING';
    const TYPE_RECEIPT = 'RECEIPT';
    const TYPE_LAST_RECEIPT = 'LAST_RECEIPT';
    const TYPE_GO_OFFLINE = 'GO_OFFLINE';
    const TYPE_ASK_OFFLINE_CODES = 'ASK_OFFLINE_CODES';
    const TYPE_GO_ONLINE = 'GO_ONLINE';
    const TYPE_DEL_LAST_RECEIPT = 'DEL_LAST_RECEIPT';

    public function __construct(
        array $statuses = [],
        array $types = [],
        int $limit = 25,
        int $offset = 0
    ) {
        if ($offset < 0) {
            throw new \Exception('Offset cant be lower then 0');
        }

        if ($limit > 1000) {
            throw new \Exception('Limit cant be more then 1000');
        }

        $this->initAllowedStatuses();
        $this->statuses = $statuses;
        $this->validateStatuses();

        $this->initAllowedTypes();
        $this->types = $types;
        $this->validateTypes();

        $this->offset = $offset;
        $this->limit = $limit;
    }

    private function initAllowedStatuses()
    {
        $this->allowedStatuses = [
            self::STATUS_CREATED,
            self::STATUS_PENDING,
            self::STATUS_SIGNED,
            self::STATUS_DELIVERED,
            self::STATUS_DONE,
            self::STATUS_ERROR
        ];
    }

    private function validateStatuses()
    {
        foreach ($this->statuses as $status) {
            if (!in_array($status, $this->allowedStatuses)) {
                throw new \Exception('Status "' . $status . '" is not allowed');
            }
        }
    }

    private function initAllowedTypes()
    {
        $this->allowedTypes = [
            self::TYPE_SHIFT_OPEN,
            self::TYPE_X_REPORT,
            self::TYPE_Z_REPORT,
            self::TYPE_PING,
            self::TYPE_RECEIPT,
            self::TYPE_LAST_RECEIPT,
            self::TYPE_GO_OFFLINE,
            self::TYPE_ASK_OFFLINE_CODES,
            self::TYPE_GO_ONLINE,
            self::TYPE_DEL_LAST_RECEIPT
        ];
    }

    private function validateTypes()
    {
        foreach ($this->types as $type) {
            if (!in_array($type, $this->allowedTypes)) {
                throw new \Exception('Type "' . $type . '" is not allowed');
            }
        }
    }
}
