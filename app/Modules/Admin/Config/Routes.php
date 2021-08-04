<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('admin', ['namespace' => 'App\Modules\Admin\Controllers'], function($subroutes){

	/*** Route for Admin ***/
    $subroutes->add('', 'Admin::index');
	$subroutes->get('addPemohon/(:any)', 'Admin::addPemohon/$1');
	$subroutes->add('dataPemohon/(:any)', 'Admin::dataPemohon/$1');
	$subroutes->add('editPemohon/(:any)', 'Admin::editPemohon/$1');
	$subroutes->add('listSurat', 'Admin::listSurat');
	$subroutes->add('perizinan/(:any)', 'Admin::perizinan/$1');
	$subroutes->post('getDataPemohon/(:any)', 'Admin::getDataPemohon/$1');
	$subroutes->post('getDataPerizinan/(:any)', 'Admin::getDataPerizinan/$1');
	$subroutes->post('getDataDesa', 'Admin::getDataDesa');
	$subroutes->post('simpanPemohon', 'Admin::simpanPemohon');
	$subroutes->post('updatePemohon', 'Admin::updatePemohon');
	$subroutes->post('deletePemohon', 'Admin::deletePemohon');
	$subroutes->get('prosesPemohon/(:any)', 'Admin::prosesPemohon/$1');
	$subroutes->get('cetakSuratDinkes/(:any)', 'Admin::cetakSuratDinkes/$1');

});