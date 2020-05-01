<?php

class Route{
    private static $match = false;

    /**
     * Checks if given route contains a given string
     * 
     * @param string $route     Current route that will be checked
     * @param string $string    String the function is looking for
     * 
     * @return boolean
     */
    private static function routeHasString($route, $string){

        if (strpos($route, $string)){
            return true;
        }
        return false;
    }

    /**
     * Fetches id from url, if it exists. If not, returns null
     * 
     * @param string $url   URL
     * 
     * @return boolean
     */
    private static function getIdFromUrl($url){
        $regex = '/[a-z]+\/[a-z]+\/([1-9]{1}[0-9]*)$/';

        if (preg_match($regex, $url, $match)){
            return $match[1];
        }        
    }

    /**
     * Calls function stored in $function (usually as controller::functionName) 
     * via call_user_func(). Determines whether or not the route given equals the actual route
     * Sets $match to true to disable unwanted fallback.
     * If url has valid id format, then it checks regex and compares trimmed path & route
     * to determine, whether or not the given url is valid and whether or not it should call controller
     * 
     * @param string $route     Current route that will be checked
     * @param string $function  Function mame
     */
    public static function get($route, $function){
        if (!empty($_POST)){
            return;
        }
        if (self::routeHasString($route, '{id}')){
            $id = self::getIdFromUrl($_GET['path']);

            if ($id != null){
                $trimmedPath = rtrim($_GET['path'], $id);
                $trimmedRoute = rtrim($route, '{id}');

                if ($trimmedPath == $trimmedRoute){ 
                    self::$match = true;
                    call_user_func($function, $id);
                }
            }
        }
        elseif($_GET['path'] == $route){
            self::$match = true;
            call_user_func($function);
        }
        
    }

    /**
     * Is used to call function when requested via POST method.
     * Sets $match to true to disable unwanted fallback during routing.
     * The current route is not taken from url, but from an input 
     * inside form that invoked this function (hidden input, name=action).
     * Provides call_user_func with $_POST as a parameter
     * 
     * @param string $route     Route that will be checked (given by html form input name 'action')
     * @param string $function  Function mame
     */
    public static function post($route, $function){

        if (!empty($_POST) && $_POST['action'] == $route){
            print($route);
            self::$match = true;
            call_user_func($function, $_POST);
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