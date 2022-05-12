<?php

namespace App\Service;

class TestService
{
    public function __construct(public string $password)
    {
    }

    public function getTest(): string
    {
        return $this->password;
    }
}