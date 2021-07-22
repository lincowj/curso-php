<?php

set_error_handler(function($errno, $errstr, $errfile, $errline){
    var_dump($errno, $errstr, $errfile, $errline);
    return true;
});

echo CONSTANTE;