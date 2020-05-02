<?php
require_once "scssphp/scss.inc.php";
use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();
$in = file_get_contents('resources/styles/scss/styles.scss');
$out = $scss->compile($in);
file_put_contents('resources/styles/css/styles.css', $out);

?>