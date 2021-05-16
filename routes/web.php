<?php


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

$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as' => 'main-home'
    ]
);

$router->get(
    '/character/{id}',
    [
        'uses' => 'CharacterController@item',
        'as' => 'character-item'
    ]
);

$router->get(
    '/houses',
    [
        'uses' => 'HouseController@index',
        'as' => 'house-index'
    ]
);

$router->get(
    '/houses/{id}',
    [
        'uses' => 'HouseController@item',
        'as' => 'house-item'
    ]
);

