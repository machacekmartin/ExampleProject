<?php


/**
 * Automatically fetches code references that havent been loaded yet
 * like controllers and custom classes
 * 
 * @param string $name  Name of the reference that is missing
 */
function autoloader($name){
    if (file_exists( 'app/Classes/'.$name.'.php')){
        require_once 'app/Classes/'.$name.'.php';
    }
    elseif(file_exists('app/Controllers/'.$name.'.php')){
        require_once 'app/Controllers/'.$name.'.php';
    }
}

/**
 * Register with function above.
 */
spl_autoload_register('autoloader');

?>