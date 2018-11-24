<?php
namespace Views;

use ETI\BLADE\Blade;

/**
 * Gerencia as views
 *
 * @author Carlos Ferreira
 */
class View
{
    private static $views = '../app/Views';
    private static $cache = '../storage/cache';
    
    
    public static function make($viewShow, array $params = array())
    {        
        $blade = new Blade(self::$views, self::$cache);
        echo $blade->view()->make($viewShow, $params)->render();
    }
}