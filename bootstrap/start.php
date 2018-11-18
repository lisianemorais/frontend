<?php

/**
 * Faz o autoload de todos os arquivos .php que está /config
 */
foreach ( glob(__DIR__.'/../config/*.php') as $file ) {
    include_once $file;
}

/**
 * Carrega o arquivo de autoload
 */
require_once __DIR__.'/../vendor/autoload.php';


/**
 * Inclui o arquivo de todas
 */
include_once __DIR__.'/../app/routes.php';