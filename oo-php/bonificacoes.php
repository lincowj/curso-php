<?php

require 'vendor/autoload.php';

use Webjump239\OoPhp\Modelo\CPF;
use Webjump239\OoPhp\Modelo\Funcionario\{Desenvolvedor, Diretor, Gerente};
use Webjump239\OoPhp\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias', 
    new CPF('123.456.789-10'),
    1000
);

$umaGerente = new Gerente(
    'Patrícia',
    new CPF('987.654.321.00'),
    3000
);

$umaDiretora = new Diretor(
    'Ana Paula',
    new CPF('862.725.346.96'),
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($umFuncionario);
$controlador->adicionarBonificacaoDe($umaGerente);
$controlador->adicionarBonificacaoDe($umaDiretora);