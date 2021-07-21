<?php

require 'vendor/autoload.php';

use Webjump239\OoPhp\Modelo\{Endereco, 
    CPF};
use Webjump239\OoPhp\Modelo\Conta\{Titular,
    Conta, 
    ContaCorrente, 
    ContaPoupança};

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinícius', $endereco);
$primeiraConta = new ContaCorrente($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular();
echo $primeiraConta->recuperarCPFTitular();
echo $primeiraConta->recuperarSaldo();

$patricia = new Titular(new CPF('698.549.548-10'), 'Patrícia', $endereco);
$segundaConta = new ContaPoupança($patricia);
var_dump($segundaConta);

echo Conta::recuperarNumContas();