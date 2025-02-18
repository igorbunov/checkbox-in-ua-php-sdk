<?php

namespace igorbunov\Checkbox;

class Config
{
    /**
     * @var array<string, string> $data
     */
    private $data;

    public const API_URL = 'apiUrl';
    public const LOGIN = 'login';
    public const PASSWORD = 'password';
    public const PINCODE = 'pin_code';
    public const LICENSE_KEY = 'licenseKey';
    public const HEADER_CLIENT_NAME = 'header_client_name';
    public const HEADER_CLIENT_VERSION = 'header_client_version';

    /**
     * Constructor
     *
     * @param array<string, string> $data
     *
     */
    public function __construct(array $data)
    {
        if (!array_key_exists(self::HEADER_CLIENT_NAME, $data)) {
            $data[self::HEADER_CLIENT_NAME] = 'Igorbunov Custom SDK';
            $data[self::HEADER_CLIENT_VERSION] = '1.3.7';
        }

        $this->data = $data;
    }

    public function get(string $name): string
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        throw new \Exception("Error: '{$name}' not found in config class");
    }
}
