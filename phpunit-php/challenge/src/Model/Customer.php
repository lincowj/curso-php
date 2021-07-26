<?php

namespace Webjump239\Challenge\Model;

class Customer
{
    private string $name;
    private string $CPF;

    public function __construct(string $name, string $cpf) {
        $this->name = $name;
        $this->CPF = $cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCPF(): string
    {
        return $this->CPF;
    }
}