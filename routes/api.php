<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$router->post('/login', 'UserController@authenticate');
    
$router->get('/user', 'UserController@index');
$router->post('/user', 'UserController@create');
$router->get('/user/{id}', 'UserController@show');
$router->put('/user/{id}', 'UserController@update');
$router->delete('/user/{id}', 'UserController@destroy');


$router->get('/marker', 'MarkerController@index');
$router->post('/marker', 'MarkerController@create');
$router->get('/marker/{id}', 'MarkerController@show');
$router->put('/marker/{id}', 'MarkerController@update');
$router->delete('/marker/{id}', 'MarkerController@destroy');
