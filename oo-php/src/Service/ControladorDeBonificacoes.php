<?php

namespace Webjump239\OoPhp\Service;

use Webjump239\OoPhp\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionarBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function recuperarTotal(): float
    {
        return $this->totalBonificacoes;
    }
}