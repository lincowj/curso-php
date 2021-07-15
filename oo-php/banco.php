<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinícius');
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular();
echo $primeiraConta->recuperarCPFTitular();
echo $primeiraConta->recuperarSaldo();

$patricia = new Titular(new CPF('698.549.548-10'), 'Patrícia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

echo Conta::recuperarNumContas();