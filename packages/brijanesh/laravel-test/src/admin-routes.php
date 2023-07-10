<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Brijanesh\LaravelTest\Controllers',
    'prefix' => 'admin',
], function () {
    Route::get('hello-world', 'UserController@helloWorld');
});
