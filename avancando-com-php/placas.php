<?php


$placa = [ 
    'LMS-2312' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'JKE-2748' => [
        'marca' => 'Fiat',
        'modelo' => 'Mobi'
    ],
    'GWM-9853' => [
        'marca' => 'Fiat',
        'modelo' => 'Argo'
    ],
    'HRV-8453' => [
        'marca' => 'Hyundai',
        'modelo' => 'Tucson'
    ]
];

//echo $placa['LMS-2312']['marca'];

foreach ($placa as $num => $carro) {
    echo "$num => " . $carro['marca'] . ' '. $carro['modelo'] . PHP_EOL;
}