<?php

namespace Webjump239\OoPhp\Modelo;

#doing the course's (oo-php) challenge

final class CPF
{
    private string $cpf;

    public function __construct(string $cpf) 
    {
        $this->validarCPF($cpf);
        $this->cpf = $cpf;
    }

    public function recuperarCPF(): string
    {
        return $this->cpf;
    }

    //made with help from 
    //https://gist.github.com/rafael-neri/ab3e58803a08cb4def059fce4e3c0e40
    private function validarCPF(string $cpf): void
    {
        $cpf = preg_replace('/[^0-9]/is', "", $cpf);

        if (strlen($cpf) != 11){
            throw new FalhaValidacaoException($this);
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            throw new FalhaValidacaoException($this);
        }

        for ($t = 9; $t < 11; $t++){
            for ($d = 0, $c = 0; $c < $t; $c++){
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d){
                throw new FalhaValidacaoException($this);
            }
        }
    }
}