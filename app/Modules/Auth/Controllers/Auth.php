<?php

namespace App\Modules\Auth\Controllers;

use App\Modules\Auth\Controllers\BaseController;

class Auth extends BaseController
{

	/**
	 * Constructor.
	 */
	// public function __construct()
	// {
	// 	$this->MasterData = new MasterData();
	// 	$this->db = \Config\Database::connect();
	// }

	public function index()
	{
		$this->session->destroy();
		echo view('\App\Modules\Auth\Views\login');
	}

	public function cek_login()
	{

		$username = htmlspecialchars_decode($this->request->getVar('username'));
		$password = htmlspecialchars_decode($this->request->getVar('password'));
		$pass = md5($password);

		// echo $username.' AND '.$pass; exit();

		// $where = "username = '$username' AND password = '$pass' AND active = 1";

		$where = array(
			'username' => $username,
			'password' => $pass,
			'active' => 1
		);

		$hasil = $this->MasterData->getWhereDataAll('tbl_user', $where);

		if (count($hasil->getResultArray()) == 1) {
			$role = $hasil->getRow()->role;
			$sess_data['id_user'] = $hasil->getRow()->id_user;
			$sess_data['nama_user'] = $hasil->getRow()->nama_user;
			$sess_data['username'] = $hasil->getRow()->username;
			$sess_data['role'] = $role;
			$sess_data['logs'] = 'Sim_jin_' . $role;

			$ipaddress = get_client_ip();
			$data = array(
				'id_user' 		=> $hasil->getRow()->id_user,
				'waktu_logs' 	=> date('Y-m-d H:i:s'),
				'ip_address' 	=> $ipaddress
			);
			$this->MasterData->inputData($data, 'tbl_logs');
			$sess_data['id_logs'] = $this->db->insertID();

			$this->session->set($sess_data);

			$select = array(
				'status_pemohon',
				"COUNT('id_pemohon') jml_status",
			);
			$table 	= 'tbl_pemohon';
			$group  = 'status_pemohon';
			$by     = 'status_pemohon';
			$order  = 'ASC';
			$where 	= "status_pemohon = 'diproses' OR status_pemohon = 'diajukan'";
			$data_status = $this->MasterData->getDataGroupOrderWhere($select, $table, $group, $by, $order, $where)->getResultArray();

			if ($data_status) {
				$this->session->setFlashdata('info_status', $data_status);
			}

			if ($role == 'admin') {
				$link = base_url('admin');
			} else {
				$link = base_url('user');
			}

			$datas = ['success' => true, 'role' => $role, 'link' => $link];
		} else {
			$datas = ['success' => false];
		}

		echo json_encode($datas);
	}

	public function logout()
	{
		// Hapus semua data pada session
		$this->session->destroy();

		// redirect ke halaman login	
		return redirect()->to(base_url('auth'));
	}
}
