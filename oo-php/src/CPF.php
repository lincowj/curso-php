<?php

#doing the course's challenge

class CPF
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