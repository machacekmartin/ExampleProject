<?php

class Route{
    private static $match = false;

    private static function routeHasString($route, $string){
        if (strpos($route, $string)){
            return true;
        }
        return false;
    }
    private static function getIdFromUrl($url){
        $regex = '/[a-z]+\/[a-z]+\/([1-9]{1}[0-9]*)$/';

        if (preg_match($regex, $url, $match)){
            return $match[1];
        }
        return null;
        
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

        if (self::routeHasString($route, '{id}')){
            $id = self::getIdFromUrl($_GET['path']);

            if ($id != null){
                $trimedPath = rtrim($_GET['path'], $id);
                $trimedRoute = rtrim($route, '{id}');

                if ($trimedPath == $trimedRoute){ 
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