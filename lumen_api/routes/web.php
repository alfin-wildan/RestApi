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

//LENDING


$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/lendings', 'LendingController@index');
$router->post('/lendings/store', 'LendingController@store');
//Restoration
$router->post('/restorations/{lending_id}', 'RestorationController@store');

//Lending
$router->get('/lendings', 'LendingController@index');
$router->post('/lendings/store', 'LendingController@store');
$router->delete('/lendings/delete/{id}', 'LendingController@destroy     ');

//login
$router->post('/login', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');
$router->get('/profile', 'AuthController@me');
//STUFF
$router->get('/stuff', 'StuffController@index');
$router->post('/stuff/create', 'StuffController@store');

$router->get('/stuff/trash', 'StuffController@deleted');
$router->delete('/stuff/permanent', 'StuffController@permanentDeleteAll');
$router->delete('/stuff/permanent/{id}', 'StuffController@permanentDelete');
$router->put('/stuff/restore', 'StuffController@restoreAll');
$router->put('/stuff/restore/{id}', 'StuffController@restore');

$router->get('/stuff/{id}', 'StuffController@show');
$router->put('/stuff/{id}', 'StuffController@update');
$router->delete('/stuff/destroy/{id}', 'StuffController@destroy');

//STUFFF STOCK
$router->get('/StuffStock/trash', 'StuffStockController@deleted')   ;
$router->put('/StuffStock/restore', 'StuffStockController@restoreAll');
$router->put('/StuffStock/restore/{id}', 'StuffStockController@restore');
$router->delete('/StuffStock/permanent', 'StuffStockController@permanentDeleteAll');
$router->delete('/StuffStock/permanent/{id}', 'StuffStockController@permanentDelete');

$router->get('/StuffStock', 'StuffStockController@index');
$router->post('/StuffStock/create', 'StuffStockController@store');
$router->get('/StuffStock/{id}', 'StuffStockController@show');
$router->patch('/StuffStock/{id}', 'StuffStockController@update');
$router->delete('/StuffStock/destroy/{id}', 'StuffStockController@destroy');


//INBOUND STUFF
$router->get('/InboundStuff/trash', 'InboundStuffController@deleted');
$router->put('/InboundStuff/restore', 'InboundStuffController@restoreall');
$router->put('/InboundStuff/restore/{id}', 'InboundStuffController@restore');
$router->delete('/InboundStuff/permanent', 'InboundStuffController@permanentDeleteAll');
$router->delete('/InboundStuff/permanentDel/{id}', 'InboundStuffController@permanentDelete');
$router->get('/InboundStuff', 'InboundStuffController@index');
$router->post('/InboundStuff/create', 'InboundStuffController@store');
$router->get('/InboundStuff/{id}', 'InboundStuffController@show');
$router->patch('/InboundStuff/edit/{id}', 'InboundStuffController@update');
$router->delete('/InboundStuff/destroy/{id}', 'InboundStuffController@destroy');

//USER
$router->get('/user/trash', 'UserController@deleted');
$router->put('/user/restore', 'UserController@restoreall');
$router->put('/user/restore/{id}', 'UserController@restore');
$router->delete('/user/permanent', 'UserController@permanentDeleteAll');
$router->delete('/user/permanentDel/{id}', 'userController@permanentDelete');
$router->get('/user', 'UserController@index');
$router->get('/user/{id}', 'UserController@show');
$router->post('/user/create', 'UserController@store');
$router->patch('/user/edit/{id}', 'UserController@update');
$router->delete('/user/destroy/{id}', 'UserController@destroy');






