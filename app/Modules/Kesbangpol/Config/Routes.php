<?php

namespace App\Modules\Kesbangpol\Config;

if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->group('kesbangpol', ['namespace' => 'App\Modules\Kesbangpol\Controllers', 'filter' => 'authkesbangpol'], function ($subroutes) {

	// Dashboard
	$subroutes->add('', 'Dashboard::index');
	$subroutes->add('dashboard', 'Dashboard::index');

	// Penelitian
	$subroutes->group('penelitian', function ($routes) {
		$routes->get('diajukan', 'Penelitian::rplMasuk');
		$routes->get('diproses', 'Penelitian::rplProses');
		$routes->add('selesai', 'Penelitian::rplSelesai');
		$routes->add('getdata/(:any)/(:any)', 'Penelitian::getDataRpl/$1/$2');
		$routes->get('hapusdata/(:any)', 'Penelitian::deleteDataRpl/$1');
		$routes->get('proses/(:any)', 'Penelitian::prosesRpl/$1');
		$routes->get('setuju/(:any)', 'Penelitian::setujuRpl/$1');
		$routes->add('tolak/(:any)', 'Penelitian::tolakRpl/$1');
	});
});
