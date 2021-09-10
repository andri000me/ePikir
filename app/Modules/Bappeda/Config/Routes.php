<?php

namespace App\Modules\Bappeda\Config;

if (!isset($routes)) {
	$routes = \Config\Services::routes(true);
}

$routes->group('bappeda', ['namespace' => 'App\Modules\Bappeda\Controllers', 'filter' => 'authbappeda'], function ($subroutes) {

	/*** Route for Dashboard ***/
	$subroutes->add('', 'Dashboard::index');
	$subroutes->add('dashboard', 'Dashboard::index');

	// Profil
	$subroutes->group('profil', function ($routes) {
		// Tentang Kami
		$routes->group('about', function ($subroutes) {
			$subroutes->add('', 'Profil::about');
			$subroutes->add('save', 'Profil::simpanAbout');
		});

		// Tugas Pokok
		$routes->group('tugaspokok', function ($subroutes) {
			$subroutes->add('', 'Profil::tugasPokok');
			$subroutes->add('save', 'Profil::simpanTugasPokok');
		});

		// Struktur Organisasi
		$routes->group('organisasi', function ($subroutes) {
			$subroutes->add('', 'Profil::strukturOrganisasi');
			$subroutes->add('save', 'Profil::simpanStrukturOrganisasi');
		});

		// Regulasi
		$routes->group('regulasi', function ($subroutes) {
			$subroutes->add('', 'Regulasi::index');
			$subroutes->add('save', 'Regulasi::saveData');
			$subroutes->add('add', 'Regulasi::addRegulasi');
			$subroutes->add('edit/(:any)', 'Regulasi::editRegulasi/$1');
			$subroutes->add('delete/(:any)', 'Regulasi::deleteRegulasi/$1');
		});
	});

	// Publikasi
	$subroutes->group('publikasi', function ($routes) {
		// SOP Litbang
		$routes->group('sop', function ($subroutes) {
			$subroutes->add('', 'Sop::index');
			$subroutes->add('save', 'Sop::simpanSopLitbang');
		});

		// Agenda
		$routes->group('agenda', function ($subroutes) {
			$subroutes->add('', 'Agenda::index');
			$subroutes->add('add', 'Agenda::addAgenda');
			$subroutes->add('save', 'Agenda::saveAgenda');
			$subroutes->add('edit/(:any)', 'Agenda::editAgenda/$1');
			$subroutes->add('delete/(:any)', 'Agenda::deleteAgenda/$1');
		});

		// Rencana Kerja
		$routes->group('renja', function ($subroutes) {
			$subroutes->add('', 'Renja::index');
			$subroutes->add('list', 'Renja::index');
			$subroutes->add('add', 'Renja::addRenja');
			$subroutes->add('save', 'Renja::saveRenja');
			$subroutes->add('edit/(:any)', 'Renja::editRenja/$1');
			$subroutes->add('delete/(:any)', 'Renja::deleteRenja/$1');
		});

		// Berita
		$routes->group('berita', function ($subroutes) {
			$subroutes->add('', 'Berita::index');
			$subroutes->get('list', 'Berita::index');
			$subroutes->get('active/(:any)/(:any)', 'Berita::changeActive/$1/$2');
			$subroutes->get('add', 'Berita::addBerita');
			$subroutes->add('save', 'Berita::saveBerita');
			$subroutes->get('edit/(:any)', 'Berita::editBerita/$1');
			$subroutes->get('delete/(:any)', 'Berita::deleteBerita/$1');
		});

		// Galeri
		$routes->group('galeri', function ($subroutes) {
			$subroutes->add('', 'Galeri::index');
			$subroutes->add('list', 'Galeri::index');
			$subroutes->get('active/(:any)/(:any)', 'Galeri::changeActive/$1/$2');
			$subroutes->get('add', 'Galeri::addGaleri');
			$subroutes->add('save', 'Galeri::saveGaleri');
			$subroutes->get('edit/(:any)', 'Galeri::editGaleri/$1');
			$subroutes->get('delete/(:any)', 'Galeri::deleteGaleri/$1');
		});
	});

	// Penelitian
	$subroutes->group('penelitian', ['namespace' => 'App\Modules\Bappeda\Controllers\Penelitian'], function ($routes) {
		// Kesbangpol
		$routes->group('kesbangpol', function ($subroutes) {
			$subroutes->get('diajukan', 'Kesbangpol::rplMasuk');
			$subroutes->get('diproses', 'Kesbangpol::rplProses');
			$subroutes->add('selesai', 'Kesbangpol::rplSelesai');
			$subroutes->add('getdata/(:any)/(:any)', 'Kesbangpol::getDataRpl/$1/$2');
			$subroutes->get('hapusdata/(:any)', 'Kesbangpol::deleteDataRpl/$1');
			$subroutes->get('proses/(:any)', 'Kesbangpol::prosesRpl/$1');
			$subroutes->get('setuju/(:any)', 'Kesbangpol::setujuRpl/$1');
			$subroutes->add('tolak/(:any)', 'Kesbangpol::tolakRpl/$1');
			$subroutes->add('cetak', 'Kesbangpol::cetakSuratRpl');
		});

		// Dpmptsp
		$routes->group('dpmptsp', function ($subroutes) {
			$subroutes->get('diajukan', 'Dpmptsp::iplMasuk');
			$subroutes->get('diproses', 'Dpmptsp::iplProses');
			$subroutes->add('selesai', 'Dpmptsp::iplSelesai');
			$subroutes->add('getdata/(:any)/(:any)', 'Dpmptsp::getDataIpl/$1/$2');
			$subroutes->get('hapusdata/(:any)', 'Dpmptsp::deleteDataIpl/$1');
			$subroutes->get('proses/(:any)', 'Dpmptsp::prosesIpl/$1');
			$subroutes->get('setuju/(:any)', 'Dpmptsp::setujuIpl/$1');
			$subroutes->add('tolak/(:any)', 'Dpmptsp::tolakIpl/$1');
			$subroutes->add('cetak', 'Dpmptsp::cetakSuratIpl');
		});
	});

	// Pengabdian
	$subroutes->group('pengabdian', ['namespace' => 'App\Modules\Bappeda\Controllers\Pengabdian'], function ($routes) {
		// Kesbangpol
		$routes->group('kesbangpol', function ($subroutes) {
			$subroutes->get('diajukan', 'Kesbangpol::rpbMasuk');
			$subroutes->get('diproses', 'Kesbangpol::rpbProses');
			$subroutes->add('selesai', 'Kesbangpol::rpbSelesai');
			$subroutes->add('getdata/(:any)/(:any)', 'Kesbangpol::getDataRpb/$1/$2');
			$subroutes->get('hapusdata/(:any)', 'Kesbangpol::deleteDataRpb/$1');
			$subroutes->get('proses/(:any)', 'Kesbangpol::prosesRpb/$1');
			$subroutes->get('setuju/(:any)', 'Kesbangpol::setujuRpb/$1');
			$subroutes->add('tolak/(:any)', 'Kesbangpol::tolakRpb/$1');
			$subroutes->add('cetak', 'Kesbangpol::cetakSuratRpb');
		});

		// Dpmptsp
		$routes->group('dpmptsp', function ($subroutes) {
			$subroutes->get('diajukan', 'Dpmptsp::ipbMasuk');
			$subroutes->get('diproses', 'Dpmptsp::ipbProses');
			$subroutes->add('selesai', 'Dpmptsp::ipbSelesai');
			$subroutes->add('getdata/(:any)/(:any)', 'Dpmptsp::getDataIpb/$1/$2');
			$subroutes->get('hapusdata/(:any)', 'Dpmptsp::deleteDataIpb/$1');
			$subroutes->get('proses/(:any)', 'Dpmptsp::prosesIpb/$1');
			$subroutes->get('setuju/(:any)', 'Dpmptsp::setujuIpb/$1');
			$subroutes->add('tolak/(:any)', 'Dpmptsp::tolakIpb/$1');
			$subroutes->add('cetak', 'Dpmptsp::cetakSuratIpb');
		});
	});
});
