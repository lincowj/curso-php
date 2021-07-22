<?php

use Webjump239\OoPhp\Modelo\Conta\{ContaCorrente, Titular};
use Webjump239\OoPhp\Modelo\{CPF, Endereco, FalhaValidacaoException};

require_once 'vendor/autoload.php';

// testing the customized exception
try{
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('123.456.789-10'), 
            'Vinicius Dias', 
            new Endereco('cidade','bairro', 'rua', 'num')
        )
    );
} catch (FalhaValidacaoException $e){
    echo $e->getMessage();
    exit();
} finally{
    echo "Fim do programa.";
}
