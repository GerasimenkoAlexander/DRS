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

$app->get('/', 'HomeController@index');

$app->group(['prefix' => 'api'], function () use ($app) {

    $app->post('sign-in', 'UsersController@signIn');
    //$app->post('sign-up', 'UsersController@signUp');

    $app->group(['middleware' => 'auth'], function () use ($app) {
        //
    });
});

//catch 404 and redirect to root
$app->get('/{any:.+}', function ($any = null) {
    return redirect('/');
});