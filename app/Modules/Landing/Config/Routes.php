<?php

namespace App\Modules\Landing\Config;

if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->group('landing', ['namespace' => 'App\Modules\Landing\Controllers'], function ($subroutes) {

	/*** Route for Dashboard ***/
	$subroutes->add('', 'Landing::index');
	$subroutes->add('home', 'Landing::index');
});
