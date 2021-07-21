<?php

namespace Webjump239\OoPhp\Modelo\Conta;

use Webjump239\OoPhp\Modelo\{Autenticavel, Pessoa, 
    Endereco, 
    CPF};

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperarEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}