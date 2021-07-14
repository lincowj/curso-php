<?php

class Conta
{
    public string $cpf;
    public string $nomeTitular;
    public float $saldo = 0; //using type declaration for better control

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo){
            echo 'Saldo indisponível';
            return;
        } 
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
} 
