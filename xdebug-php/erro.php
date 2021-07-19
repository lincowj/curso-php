<?php

use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Model\Leilao;
use \Alura\Leilao\Model\Lance;

require_once __DIR__ . '/vendor/autoload.php';

$leilao = new Leilao('Um objeto muito legal');

$usuario = new Usuario('Vinicius Dias');

$leilao->recebeLance(new Lance($usuario, 2000));
$leilao->recebeLance(new Lance($usuario, 1000));

$leilao->finaliza();