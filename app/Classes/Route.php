<?php

class Route{
    public static $routes = array(); // not needed, only for testing purposes
    public static $match = false;

    /**
     * Calls function stored in $function (usually as controller::functionName) 
     * via call_user_func(). Determines whether or not the route given equals the actual route
     * Sets $match to true to disable unwanted fallback.
     * 
     * @param string $route     Current route that will be checked
     * @param string $function  Function mame
     */
    public static function get($route, $function){
        self::$routes[] = $route;
        if($_GET['path'] == $route){
            self::$match = true;
            call_user_func($function);
        }
    }

    /**
     * Creates fallback to 404 page if no routes were correct
     * 
     * @param string $function  Function mame
     */
    public static function fallback($function){
        if (!self::$match){
            self::$match = false;
            call_user_func($function, '404');
        }
    }
}