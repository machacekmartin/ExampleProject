<?php
Route::get('', function(){
    echo "INDEX";
});
Route::get('index', function(){
    echo "INDEX!";
});
Route::get('index.php', function(){
    echo "INDEX";
});

Route::get('about', function(){
    echo "about us||";
});
Route::get('contact', function(){
    echo "contact!!";
});


?>