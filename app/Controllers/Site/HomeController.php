<?php 

namespace app\Controllers\Site;

use \app\Controllers\Controller;
use \views\View;

/**
 * 
 */
class HomeController extends Controller
{
	public function getIndex() {
        $titulo = 'Home Painel';
        $nome = 'Carlos Ferreira!';

        View::make('site.index', compact('titulo', 'nome'));
    }

    
    public function getContato()
    {
        echo 'HomeController contato';
    }
}
