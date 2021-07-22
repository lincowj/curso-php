<?php

namespace Webjump239\OoPhp\Modelo;

use UnexpectedValueException;

//personalized exception made for course's challenge and proof

class FalhaValidacaoException extends UnexpectedValueException
{
    public function __construct(object $objeto)
    {
        $nomeClasse = get_class($objeto);
        $nomeClasse = $this->encurtarNomeClasse($nomeClasse);
        $msg = "Erro na validação de {$nomeClasse}. Corrija os dados e tente novamente!" . PHP_EOL;
        parent::__construct($msg);
    }

    // function taken from 
    // https://www.php.net/manual/pt_BR/function.get-class.php#114568
    // this function gets only the "first name" of a class, excluding the namespace path
    function encurtarNomeClasse($nomeClasse)
    {
        if ($pos = strrpos($nomeClasse, '\\')) return substr($nomeClasse, $pos + 1);
        return $pos;
    }
}