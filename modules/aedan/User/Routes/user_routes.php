<?php

Route::group(
    ['namespace' => 'Aedan\User\Http\Controllers',
        'middleware' => 'web']
    , function ($router) {
    Auth::routes(['verify' => true]);
});
