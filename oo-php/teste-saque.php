<?php

require 'vendor/autoload.php';

use Webjump239\OoPhp\Modelo\{Endereco, 
    CPF};
use Webjump239\OoPhp\Modelo\Conta\{Titular, 
    Conta,
    ContaCorrente, 
    ContaPoupança, SaldoInsuficienteException};

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinícius', $endereco);
$primeiraConta = new ContaPoupança($vinicius);
$primeiraConta->depositar(500);
try {
    $primeiraConta->sacar(600);
} catch (SaldoInsuficienteException $e) {
    echo $e->getMessage();
}


var_dump($primeiraConta);