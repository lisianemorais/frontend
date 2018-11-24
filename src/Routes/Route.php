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
            var_dump($route);
            $url = ( $route != '/' ) ? str_replace($route, '', self::getURL()) : self::getURL();

            $params = explode('/', $url);
            unset($params[0]);

            $method = ( isset($params[1]) && $params[1] != '' ) ? ucfirst(str_replace('-', '', $params[1])) : 'index';
            $method = strtolower($_SERVER['REQUEST_METHOD']).$method;
            unset($params[1]);
            var_dump($method);
            
            $controller = new $controller;

            if( method_exists($controller, $method) )
                call_user_func_array ([$controller, $method], $params);
            else
                $controller->missingMethod();
        }
    }
    
    
    private static function getURL()
    {
        return $_SERVER['REQUEST_URI'];
    }
    
}