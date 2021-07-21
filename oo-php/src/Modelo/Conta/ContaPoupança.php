<?php

namespace Webjump239\OoPhp\Modelo\Conta;

class ContaPoupança extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}