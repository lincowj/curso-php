<?php

namespace Webjump239\OoPhp\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function subirDeNivel()
    {
        $this->receberAumento($this->recuperarSalario() * 0.75);
    }

    public function calcularBonificacao(): float
    {
        return 500;
    }
}