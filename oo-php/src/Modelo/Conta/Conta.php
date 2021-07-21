<?php

namespace Webjump239\OoPhp\Modelo\Conta;

use Webjump239\OoPhp\Modelo\Conta\Titular;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo; //using type declaration for better control
    private static int $numContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numContas++;
    }

    public function __destruct()
    {
        self::$numContas--;
    }

    public function sacar(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percenturalTarifa;
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo){
            echo 'Saldo indisponível';
            return;
        } 
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    abstract protected function percentualTarifa(): float;

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCPFTitular(): string
    {
        return $this->titular->recuperarCPF();
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public static function recuperarNumContas(): int
    {
        return self::$numContas;
    }
} 
