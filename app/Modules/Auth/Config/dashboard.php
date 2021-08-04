<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('auth', ['namespace' => 'App\Modules\Auth\Controllers'], function($subroutes){

	/*** Route for Auth ***/
	$subroutes->add('auth', 'Auth::index');
	$subroutes->add('auth/index', 'Auth::index');
	$subroutes->add('auth/cek_login', 'Auth::cek_login');
	$subroutes->add('auth/logout', 'Auth::logout');

	/*** Route for Dashboard ***/
	$subroutes->add('dashboard', 'Dashboard::index');
	$subroutes->add('dashboard/index', 'Dashboard::index');

});