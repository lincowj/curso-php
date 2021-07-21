<?php

namespace Webjump239\OoPhp\Service;

use Webjump239\OoPhp\Modelo\Autenticavel;

class Autenticador
{
    public function tentarLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)){
            echo "Ok. Usuário logado no sistema.";
        } else echo "Senha incorreta!";
    }
}