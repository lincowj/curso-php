<?php

namespace Webjump239\OoPhp\Modelo\Funcionario;

use Webjump239\OoPhp\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calcularBonificacao(): float
    {
        return $this->recuperarSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}