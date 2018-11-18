<?php 
 
 use routes\Route;

 Route::controller('/teste', 'app\Controllers\emailController');

 /**
 Rotas para o site
 */
 Route::controller('/public/', 'app\Controllers\HomeController');
 Route::controller('/', 'app\Controllers\HomeController');