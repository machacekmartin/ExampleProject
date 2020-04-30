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
Route::get('images/destroy/{id}', 'ImageController::destroy');

// Posts
Route::get('posts', 'PostController::index');
Route::get('posts/show/{id}', 'PostController::show');
Route::get('posts/destroy/{id}', 'PostController::destroy');


Route::fallback('FallbackController::index');

?>