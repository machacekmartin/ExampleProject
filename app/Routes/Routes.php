<?php

// Index
Route::get('', function(){
    echo "INDEX!";
});
Route::get('index', function(){
    echo "INDEX!";
});
Route::get('home', function(){
    echo "INDEX!";
});

// Images
Route::get('images', 'ImageController::index');

// Posts
Route::get('posts', 'PostController::index');


Route::fallback('FallbackController::index');

?>