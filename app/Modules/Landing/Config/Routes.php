<?php

namespace App\Modules\Landing\Config;

if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->group('landing', ['namespace' => 'App\Modules\Landing\Controllers'], function ($subroutes) {

	// Beranda
	$subroutes->get('', 'Beranda::index');
	$subroutes->get('home', 'Beranda::index');

	// Profil
	$subroutes->get('about', 'Profil::about');
	$subroutes->get('tugaspokok', 'Profil::tugasPokok');
	$subroutes->get('organisasi', 'Profil::strukturOrganisasi');
	// $subroutes->get('regulasi', 'Profil::regulasi');
	$subroutes->group('regulasi', function($routes) {
		$routes->get('', 'Profil::regulasi');
		$routes->get('detail/(:any)', 'Profil::regulasiDetail/$1');
	});
	
	//Publikasi
	$subroutes->get('sop', 'Publikasi::sopLitbang');
	$subroutes->get('agenda', 'Publikasi::agenda');
	$subroutes->get('calendar', 'Publikasi::agendaCalendar');
	$subroutes->get('berita', 'Publikasi::berita');
});
