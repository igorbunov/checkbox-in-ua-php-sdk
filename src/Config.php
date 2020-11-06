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
    public const LICENSE_KEY = 'licenseKey';

    /**
     * Constructor
     *
     * @param array<string, string> $data
     *
     */
    public function __construct(array $data)
    {
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
