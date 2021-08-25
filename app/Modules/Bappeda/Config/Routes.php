<?php

namespace App\Modules\Bappeda\Config;

if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->group('bappeda', ['namespace' => 'App\Modules\Bappeda\Controllers', 'filter' => 'authbappeda'], function ($subroutes) {

	/*** Route for Dashboard ***/
	$subroutes->add('', 'Bappeda::index');
	$subroutes->add('dashboard', 'Bappeda::index');
});
