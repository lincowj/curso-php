<?php

class Titular
{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNumCPF(): string
    {
        return $this->cpf->recuperarCPF();
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