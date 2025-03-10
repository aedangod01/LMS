<?php
use aedan\Dashboard\Http\Controllers\DashboardController;
Route::group(['namespace' => 'aedan\Dashboard\Http\Controllers' , 'middleware' => ['web' ,'auth' , 'verified']], function($router){

    $router->get('/home', [DashboardController::class, 'index'])->name('home');

});
