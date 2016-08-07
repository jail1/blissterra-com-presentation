<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@getIndex');


Route::controller('/dashboard/login', 'Admin\AdminLoginController');
Route::group([
    "prefix" => "dashboard",
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function()
{
    Route::controller('/', 'AdminController');

});


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/messages', 'ContactController@getMessages');
Route::get('/test', 'MainController@getTest');

