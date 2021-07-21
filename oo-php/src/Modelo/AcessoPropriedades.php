<?php

namespace Webjump239\OoPhp\Modelo;

/**
 * 
 */
trait AcessoPropriedades
{
    public function __get(string $name)
    {
        $metodo = 'recuperar' . ucfirst($name);
        return $this->$metodo();
    }
}
