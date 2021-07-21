<?php

namespace Webjump239\OoPhp\Modelo\Funcionario;

use Webjump239\OoPhp\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calcularBonificacao(): float
    {
        return $this->recuperarSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}