<?php

namespace Checkbox;

class Config
{
    private $data;

    const API_URL = 'apiUrl';
    const LOGIN = 'login';
    const PASSWORD = 'password';

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
