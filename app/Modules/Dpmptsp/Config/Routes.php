<?php

namespace App\Modules\Dpmptsp\Config;

if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->group('dpmptsp', ['namespace' => 'App\Modules\Dpmptsp\Controllers', 'filter' => 'authdpmptsp'], function ($subroutes) {

	// Dashboard
	$subroutes->add('', 'Dashboard::index');
	$subroutes->add('dashboard', 'Dashboard::index');

	// Penelitian
	$subroutes->group('penelitian', function ($routes) {
		$routes->get('diajukan', 'Penelitian::iplMasuk');
		$routes->get('diproses', 'Penelitian::iplProses');
		$routes->add('selesai', 'Penelitian::iplSelesai');
		$routes->add('getdata/(:any)/(:any)', 'Penelitian::getDataIpl/$1/$2');
		$routes->get('hapusdata/(:any)', 'Penelitian::deleteDataIpl/$1');
		$routes->get('proses/(:any)', 'Penelitian::prosesIpl/$1');
		$routes->get('setuju/(:any)', 'Penelitian::setujuIpl/$1');
		$routes->add('tolak/(:any)', 'Penelitian::tolakIpl/$1');
		$routes->add('cetak', 'Penelitian::cetakSuratIpl');
	});

	// Pengabdian
	$subroutes->group('pengabdian', function ($routes) {
		$routes->get('diajukan', 'Pengabdian::ipbMasuk');
		$routes->get('diproses', 'Pengabdian::ipbProses');
		$routes->add('selesai', 'Pengabdian::ipbSelesai');
		$routes->add('getdata/(:any)/(:any)', 'Pengabdian::getDataIpb/$1/$2');
		$routes->get('hapusdata/(:any)', 'Pengabdian::deleteDataIpb/$1');
		$routes->get('proses/(:any)', 'Pengabdian::prosesIpb/$1');
		$routes->get('setuju/(:any)', 'Pengabdian::setujuIpb/$1');
		$routes->add('tolak/(:any)', 'Pengabdian::tolakIpb/$1');
		$routes->add('cetak', 'Pengabdian::cetakSuratIpb');
	});

	// Petugas/Pejabat
	$subroutes->group('pejabat', function ($routes) {
		$routes->get('', 'Petugas::index');
		$routes->get('delete/(:any)', 'Petugas::hapusData/$1');
		$routes->add('save', 'Petugas::simpanData');
	});
});
