<?php

$peso = 80;

$altura = 1.83;

$imc = $peso / ($altura ** 2);

if ($imc < 18.5){
    echo "Seu imc é $imc. Você está abaixo do peso";
} else if ($imc >= 18.5 and $imc < 25){
    echo "Seu imc é $imc. Você está com peso normal";
} else if ($imc >= 25 and $imc < 30){
    echo "Seu imc é $imc. Você está com sobrepeso";
} else if ($imc >= 30) echo "Seu imc é $imc. Você está com obesidade";