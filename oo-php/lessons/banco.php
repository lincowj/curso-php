<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Vinícius'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular();
echo $primeiraConta->recuperarCPFTitular();
echo $primeiraConta->recuperarSaldo();

$segundaConta = new Conta(new Titular('698.549.548-10', 'Patrícia'));
var_dump($segundaConta);

echo Conta::recuperarNumContas();