<?php

/**
 * Default Controller that all other controllers should extend.
 * Functions as a space for common and used-by-all controller functions, attributes
 */
class Controller{
    
    /**
     * Provides controllers the power of generating view and passing data
     * into that view. 
     * 
     * @param string $name  folder + name of the file (no extension). f.e - images/index
     * @param array $data   Data that will be passed into the view
     */
    public function view($name, $data = []){   
        require_once('resources/views/'.$name.'.php');
    }

    /**
     * Redirects current page onto another.
     * If you are asking yourself.. hey, why does this even exist?
     * Well, when you want to use f.e destroy() of PostController, it needs to redirect somewhere, 
     * so if you wanted to redirect to page 'images' using view(), you would use the exact same command, as in function index()..
     * we dont want that.. + it wouldnt get rid of POST requests
     * 
     * @param string $url   desired URL.. duh
     */
    public function redirect($url){
        header('Location: /'. $url);
        die(); //temporary
    }

}

?>