<?php

namespace Webjump239\OoPhp\Modelo\Funcionario;

use Webjump239\OoPhp\Modelo\{
    Pessoa,
    CPF
};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alterarNome(string $nome): void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    public function recuperarSalario(): float
    {
        return $this->salario;
    }

    abstract function calcularBonificacao(): float;

    public function receberAumento(float $valorAumento): void
    {
        if ($valorAumento < 0){
            echo "Aumento deve ser positivo!";
            return;
        }

        $this->salario += $valorAumento;
    }
}