<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarCPF(): string
    {
        return $this->cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    private function validarNome(string $nome): void
    {
        if (strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}