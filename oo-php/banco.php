<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinícius', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular();
echo $primeiraConta->recuperarCPFTitular();
echo $primeiraConta->recuperarSaldo();

$patricia = new Titular(new CPF('698.549.548-10'), 'Patrícia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

echo Conta::recuperarNumContas();