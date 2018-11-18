<?php

/**
 * Erros rerporting local = true, produtct = false
 */
const APP_ENV = 'local';

if (APP_ENV == 'local') {
	error_reporting(E_ALL); 
	ini_set('display_errors', 1);
}
