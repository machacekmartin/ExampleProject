<?php

/**
 * Default Controller that all other controllers should extend.
 * Functions as a space for common and used-by-all controller functions, attributes
 */
class Controller{
    
    public function view($name, $data){
        if (empty($data)) return require_once('resources/views/fallbacks/404.php');
        
        return require_once('resources/views/'.$name.'.php');
    }
}

?>