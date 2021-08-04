<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('admin', ['namespace' => 'App\Modules\Admin\Controllers'], function($subroutes){

	/*** Route for Admin ***/
	$subroutes->add('admin', 'Admin::index');
	$subroutes->add('admin/index', 'Admin::index');
	$subroutes->add('admin/addPemohon/(:alphanum)', 'Admin::addPemohon/$1');
	$subroutes->add('admin/simpanPemohon', 'Admin::simpanPemohon');
	$subroutes->add('admin/editPemohon/(:alphanum)', 'Admin::editPemohon/$1');
	$subroutes->add('admin/updatePemohon', 'Admin::updatePemohon');
	$subroutes->add('admin/dataPemohon/(:alphanum)/(:alphanum)', 'Admin::dataPemohon/$1/$2');
	$subroutes->add('admin/terimaPemohon', 'Admin::terimaPemohon');
	$subroutes->add('admin/tolakPemohon', 'Admin::tolakPemohon');
	$subroutes->add('admin/prosesPemohon/(:alphanum)/(:alphanum)', 'Admin::prosesPemohon/$1/$2');
	$subroutes->add('admin/deletePemohon/(:alphanum)', 'Admin::deletePemohon/$1');
	$subroutes->add('admin/getDataPemohon/(:alphanum)/(:alphanum)', 'Admin::getDataPemohon/$1/$2');
	$subroutes->add('admin/kodeOtomatis/(:alphanum)/(:alphanum)/(:alphanum)/(:alphanum)/(:alphanum)', 'Admin::kodeOtomatis/$1/$2/$3/$4/$5');
	$subroutes->add('admin/nomorUrut/(:alphanum)/(:alphanum)/(:alphanum)', 'Admin::nomorUrut/$1/$2/$3');
	$subroutes->add('admin/perizinan/(:alphanum)/(:alphanum)', 'Admin::perizinan/$1/$2');
	$subroutes->add('admin/getDataPerizinan/(:alphanum)/(:alphanum)', 'Admin::getDataPerizinan/$1/$2');
	$subroutes->add('admin/listSurat', 'Admin::listSurat');
	$subroutes->add('admin/cetakSuratIzinNikah/(:alphanum)/(:alphanum)/(:alphanum)', 'Admin::cetakSuratIzinNikah/$1/$2/$3');
	$subroutes->add('admin/cetakSuratIzinKegiatan/(:alphanum)/(:alphanum)/(:alphanum)', 'Admin::cetakSuratIzinKegiatan/$1/$2/$3');
	$subroutes->add('admin/cetakSuratKeterangan/(:alphanum)/(:alphanum)/(:alphanum)', 'Admin::cetakSuratKeterangan/$1/$2/$3');
	$subroutes->add('admin/queryCetakSurat/(:alphanum)/(:alphanum)/(:alphanum)', 'Admin::queryCetakSurat/$1/$2/$3');
	$subroutes->add('admin/cetakSuratDinkes/(:alphanum)', 'Admin::cetakSuratDinkes/$1');
	$subroutes->add('admin/cetakNodin/(:alphanum)/(:alphanum)/(:alphanum)', 'Admin::cetakNodin/$1/$2/$3');
	$subroutes->add('admin/cetakSuratPerizinan/(:alphanum)/(:alphanum)/(:alphanum)', 'Admin::cetakSuratPerizinan/$1/$2/$3');
	$subroutes->add('admin/getDataDesa', 'Admin::getDataDesa');
	$subroutes->add('admin/uploadFile', 'Admin::uploadFile');
	$subroutes->add('admin/prosesUpload', 'Admin::prosesUpload');
	$subroutes->add('admin/template/(:alphanum)', 'Admin::template/$1');

	/*** Route for Dashboard ***/
	$subroutes->add('dashboard', 'Dashboard::index');
	$subroutes->add('dashboard/index', 'Dashboard::index');

});