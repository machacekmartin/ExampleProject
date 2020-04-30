<?php

function autoloader($class){
    if (file_exists( 'app/Classes/'.$class.'.php')){
        require_once 'app/Classes/'.$class.'.php';
    }
    elseif(file_exists('app/Controllers/'.$class.'.php')){
        require_once 'app/Controllers/'.$class.'.php';
    }
}
spl_autoload_register('autoloader');

?>