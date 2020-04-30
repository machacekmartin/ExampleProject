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
     * 
     * @param string $route     Current route that will be checked
     * @param string $function  Function mame
     */
    public static function get($route, $function){
        if (self::routeHasString($route, '{id}')){
            $id = self::getIdFromUrl($_GET['path']);
            if ($id != null){
                //echo "<br>id v URL je: ". $id. '<br>';

                $trimedPath = rtrim($_GET['path'], $id);
                $trimedRoute = rtrim($route, '{id}');


                //echo "Tohle je strippedPath: " .$trimedPath. "<br>";
                //echo "Tohle je strippedRoute: " .$trimedRoute. "<br>";
                if ($trimedPath == $trimedRoute){
                   //echo "<br>jsou stejne!!<br>";   
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