<?php
require_once "scssphp/scss.inc.php";
use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();
$scss->setImportPaths('resources/styles/scss/');

// colors
$scss->setVariables(array(
    'dark-gray' => '#333333',
    'bright-gray' => '#FEFEFE',
    'light-gray' => '#EEEEEE',
    'gray' => '#CCCCCC',
));

$out = 
    $scss->compile("@import 'colors.scss'")   .
    $scss->compile("@import 'fonts.scss'")    .
    $scss->compile("@import 'presets.scss'")  .
    $scss->compile("@import 'styles.scss'")   ;
    
file_put_contents('resources/styles/css/styles.css', $out);

?>