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

$router->get('/saludo',function(){
    return 'Hola';
});

$router->post('/saludo', function (){
    return 'Se creo un dato';
});

$router->post('/informacion', function (){
    return 'Subir los ejemplos';
});

$router->get('/ejemplo', function (){
    return 'Subir a git';
});
