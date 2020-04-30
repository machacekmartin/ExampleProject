<?php

require_once('./app/Routes/Routes.php');  

function __autoload($class){
    require_once('./app/Classes/'.$class.'.php');
}
?>