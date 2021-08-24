<?php

namespace App\Modules\Admin\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
// ------------------------------------------
use App\Models\MasterData;
use App\Libraries\Secure;
use App\Modules\Admin\Models\Data_table_pemohon;
use App\Modules\Admin\Models\Data_table_perizinan;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */


class BaseController extends Controller
{
	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['csrftoken', 'encrypt', 'alert', 'upload', 'striptag', 'searchbar', 'tanggal'];

	// protected $secure;
	// protected $session;

	// protected $MasterData;
	// protected $db;

	// protected $username;
	// protected $nama_user;
	// protected $role;
	// protected $id_logs;

	protected $head = array();
	protected $foot = array();
	protected $menu = array();

	protected $v_data = array();
	/**
	 * Constructor.
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);


		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();

		$this->MasterData = new MasterData();
		$this->DataTablePemohon = new Data_table_pemohon();
		$this->DataTablePerizinan = new Data_table_perizinan();
		$this->db = \Config\Database::connect();

		$this->secure = new Secure();
		$this->secure->auth('Sim_jin_admin');

		$this->session = \Config\Services::session();

		$this->username = $this->session->get('username');
		$this->nama_user = $this->session->get('nama_user');
		$this->role = $this->session->get('role');
		$this->id_logs = $this->session->get('id_logs');

		// ========================================================

		$select = array(
			'id_surat',
			"COUNT('id_pemohon') jml_status",
		);
		$table  = 'tbl_pemohon';
		$group  = 'id_surat';
		$by     = 'id_surat';
		$order  = 'ASC';
		$where  = "status_pemohon = 'diajukan'";
		$status_diajukan = $this->MasterData->getDataGroupOrderWhere($select, $table, $group, $by, $order, $where)->getResultArray();
		$where  = "status_pemohon = 'diproses'";
		$status_diproses = $this->MasterData->getDataGroupOrderWhere($select, $table, $group, $by, $order, $where)->getResultArray();

		$select = array(
			"COUNT('id_pemohon') jml_status",
		);
		$where  = "status_pemohon = 'diajukan'";
		$status_diajukan_all = $this->MasterData->getWhereData($select, $table, $where)->getRowArray();
		$where  = "status_pemohon = 'diproses'";
		$status_diproses_all = $this->MasterData->getWhereData($select, $table, $where)->getRowArray();

		$dataSurat = $this->MasterData->getData('tbl_surat')->getResultArray();

		$this->menu = array(
			'data_surat'            => $dataSurat,
			'status_diajukan'       => $status_diajukan,
			'status_diproses'       => $status_diproses,
			'status_diajukan_all'   => $status_diajukan_all,
			'status_diproses_all'   => $status_diproses_all,
		);

		$this->head['role'] = $this->role;
		$this->head['username'] = $this->username;
		$this->head['nama_user'] = $this->nama_user;
		$this->head['css'] = array(
			assets_url . "app-assets/css/vendors.css",
			assets_url . "app-assets/css/app.css",
			assets_url . "app-assets/css/core/menu/menu-types/vertical-menu-modern.css",
			assets_url . "app-assets/css/core/colors/palette-gradient.css",
			// assets_url . "assets/css/style.css",
		);

		$this->foot['flash'] = $this->session->getFlashdata('info_status');
		// var_dump($this->foot['flash']->getFlashdata());exit();
		$this->foot['js'] = array(
			assets_url . "app-assets/js/core/app-menu.js",
			assets_url . "app-assets/js/core/app.js",
			assets_url . "app-assets/js/scripts/customizer.js",
		);
	}

	public function template($temp)
	{
		echo view('komponen\header', $temp['header']);
		echo view('\App\Modules\Admin\Views\menu', $temp['menu']);
		if (isset($temp['konten'])) echo view(views . 'Admin\Views\pages' . '\/' . $temp['konten'], $temp['cont']);
		echo view('komponen\footer', $temp['footer']);
	}
}
