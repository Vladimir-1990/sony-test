<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', array('as' => 'home', 'uses' => "Controller@index"));
Route::post('calculate', array('as' => 'home', 'uses' => "Controller@calculate"));
Route::get('test', array('as' => 'home', 'uses' => "Controller@test"));