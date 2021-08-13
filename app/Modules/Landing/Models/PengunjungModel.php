<?php namespace App\Modules\Landing\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\Request;

class PengunjungModel extends Model
{
    protected $table      = 'tbl_pengunjung';
    protected $primaryKey = 'id_pengunjung';
 
    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;
 
    // set untuk kolom yang dapat di insert atau diupdate adalah kolom name, dan price
    protected $allowedFields = ['ip_add', 'tanggal'];    

 
    public function getDataHariIni()
    {
        return $this->select("COUNT id as jml")->getWhere(['tanggal' => date('Y-m-d')]);
    }

    public function getDataKemarin()
    {
        return $this->select("COUNT id as jml")->getWhere(['tanggal' => date("Y-m-d", strtotime('-1 day'))]);
    }

    public function getDataBulanIni()
    {
        return $this->select("COUNT id as jml")->getWhere(['MONTH(tanggal)' => date('n'), 'YEAR(tanggal)' => date('Y')]);
    }

    public function getDataTahunIni()
    {
        return $this->select("COUNT id as jml")->getWhere(['YEAR(tanggal)' => date('Y')]);
    }
    
    public function insertData()
    {
        $request = new Request;
        $ip = $request->getIPAddress();
		$check = $this->getWhere([
			'ip_add' => $ip,
			'tanggal' => date('Y-m-d'),
		]);
		if ($check->countResultAll() > 0) {
			return $this->insert([
				'ip' => $ip,
				'tanggal' => date('Y-m-d')
			]);
		} else {
            return false;
        }
    }
}