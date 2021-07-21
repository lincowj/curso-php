<?php

use Webjump239\OoPhp\Modelo\Endereco;

require_once 'vendor/autoload.php';

$umEndereco = new Endereco('Petrópolis', 'bairro qualquer', 'minha rua', '71B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua aí', '50');

$umEndereco->rua = 'Jatobá';
echo $umEndereco . PHP_EOL;
//echo $outroEndereco;