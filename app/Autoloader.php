<?php


/**
 * Automatically fetches code references that havent been loaded yet
 * like controllers and custom classes
 * 
 * @param string $name  Name of the reference that is missing
 */
function autoload($name){
    if (file_exists( 'app/Classes/'.$name.'.php')){
        require_once 'app/Classes/'.$name.'.php';
    }
    elseif(file_exists('app/Controllers/'.$name.'.php')){
        require_once 'app/Controllers/'.$name.'.php';
    }
    elseif(file_exists('app/Models/'.$name.'.php')){
        require_once 'app/Models/'.$name.'.php';
    }
    elseif(file_exists('scssphp/'.$name.'.php')){
        require_once 'scssphp/'.$name.'.php';
    }
}

/**
 * Register with function above.
 */
spl_autoload_register('autoload');

?>