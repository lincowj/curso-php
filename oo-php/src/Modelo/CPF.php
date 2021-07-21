<?php

namespace Webjump239\OoPhp\Modelo;

#doing the course's (oo-php) challenge

final class CPF
{
    private string $cpf;

    public function __construct(string $cpf) 
    {
        $this->cpf = $cpf;
    }

    public function recuperarCPF(): string
    {
        return $this->cpf;
    }
}