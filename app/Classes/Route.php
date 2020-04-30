<?php
class Route{

    public static $routes = array();
    public static function get($route, $function){
        self::$routes[] = $route;
        if($_GET['path'] == $route){
            $function->__invoke();
        }
    }
}