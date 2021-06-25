<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

// Tente depositar e sacar outros valores.

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    5000
);

$contasCorrentes['123.456.689-11'] = depositar(
    $contasCorrentes['123.456.689-11'],
    2520
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    1000
);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

unset($contasCorrentes['123.456.689-11']);

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem("$cpf $titular $saldo");
}