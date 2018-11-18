<?php
namespace Routes;

/**
 * Description of Route
 *
 * @author Carlos Ferreira
 */
class Route
{
    protected static $route = null;


    /**
     * Define qual controller a rota está chamando
     * 
     * @param string $route Rota a ser manipulada
     * @param string $controller controller a ser chamado para manipular a rota
     */
    public static function controller($route, $controller)
    {   
        if ( $route == substr(self::getURL(), 0, strlen($route)) && self::$route == null ) {
            self::$route = $route;
            // var_dump(self::getURL());
            // var_dump($route);
            // var_dump($controller);
            $met = str_replace('/', '', self::getURL());
            $method = ( $met == '' || $met == null ) ? 'index': $met;
            // var_dump($method);

            $controller = new $controller;
            if (method_exists($controller, $method) )
                $controller->$method();
            else
                $controller->missingMethod();
        }
    }
    
    
    private static function getURL()
    {
        return $_SERVER['REQUEST_URI'];
    }
    
}