<?php
	
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->post('auth/login', 'App\Api\V1\Controllers\AuthController@login');
	$api->post('auth/signup', 'App\Api\V1\Controllers\AuthController@signup');
	$api->post('auth/recovery', 'App\Api\V1\Controllers\AuthController@recovery');
	$api->post('auth/reset', 'App\Api\V1\Controllers\AuthController@reset');

	// example of protected route
	$api->get('protected', ['middleware' => ['api.auth'], function () {		
		return \App\User::all();
    }]);

	// example of free route
	$api->get('free', function() {
		return \App\User::all();
	});

    $api->group(['middleware' => 'api.auth'], function($api){

        $api->post('books', 'App\Api\V1\Controllers\BookController@store');
        $api->get('books', 'App\Api\V1\Controllers\BookController@index');
        $api->get('books/{id}', 'App\Api\V1\Controllers\BookController@show');

        $api->post('borrow','App\Api\V1\Controllers\BorrowController@store');
        $api->get('borrow' ,'App\Api\V1\Controllers\BorrowController@index');

        $api->post('return','App\Api\V1\Controllers\ReturnController@store');


    });

});
