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
$primeiraConta = new ContaPoupança($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(100);

var_dump($primeiraConta);