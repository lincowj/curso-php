<?php

use Webjump239\OoPhp\Modelo\CPF;
use Webjump239\OoPhp\Modelo\Funcionario\Diretor;
use Webjump239\OoPhp\Service\Autenticador;

require_once 'vendor/autoload.php';

$autenticador = new Autenticador();
$umaDiretora = new Diretor(
    'Ana Paula',
    new CPF('862.725.346.96'),
    5000
);

$autenticador->tentarLogin($umaDiretora, '1234');