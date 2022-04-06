<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});


$router->group(['prefix' => 'teknologi'], function () use ($router) {
    //technology
    $router->get('/', 'TechnologyController@index');
    $router->get('/{id}', 'TechnologyController@show');
    $router->post('/create_teknologi', 'TechnologyContoller@create');

});