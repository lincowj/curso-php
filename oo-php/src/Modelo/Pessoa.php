<?php

namespace Webjump239\OoPhp\Modelo;

class Pessoa
{
    use AcessoPropriedades;
    
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarCPF();
    }

    final protected function validarNome(string $nome): void
    {
        if (strlen($nome) < 5){
            throw new FalhaValidacaoException($this);
        }
    }
}