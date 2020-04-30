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
Route::get('images/show/{id}', 'ImageController::show');

// Posts
Route::get('posts', 'PostController::index');
Route::get('posts/show/{id}', 'PostController::show');


Route::fallback('FallbackController::index');

?>