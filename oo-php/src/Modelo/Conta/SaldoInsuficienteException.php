<?php

namespace Webjump239\OoPhp\Modelo\Conta;

use DomainException;

class SaldoInsuficienteException extends DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $msg = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta.";
        parent::__construct($msg);
    }
}