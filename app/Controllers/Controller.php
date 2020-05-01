<?php

/**
 * Default Controller that all other controllers should extend.
 * Functions as a space for common and used-by-all controller functions, attributes
 */
class Controller{
    
    public function view($name, $data = []){   
        return require_once('resources/views/'.$name.'.php');
    }

    public function redirect($url){
        header('Location: /ExampleProject/'. $url);
        die();
    }

}

?>