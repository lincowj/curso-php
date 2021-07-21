<?php

namespace Webjump239\OoPhp\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}