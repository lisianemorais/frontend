<?php 
 
 use routes\Route;

 Route::controller('/teste', 'app\Controllers\emailController');

 /**
 Rotas para o site
 */
 Route::controller('/', 'app\Controllers\Site\HomeController');