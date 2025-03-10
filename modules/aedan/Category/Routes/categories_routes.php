<?php

Route::group(["namespace" => "aedan\Category\Http\Controllers" , 'middlware' => ['web' , 'auth' , 'verify']] , function($router){
    $router->resource('categories', 'CategoryController');
});
