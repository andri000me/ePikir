<?php

namespace App\Modules\Landing\Models;

use CodeIgniter\Model;

class PengunjungModel extends Model
{
    protected $table      = 'tbl_pengunjung';
    protected $primaryKey = 'id_pengunjung';

    protected $returnType     = 'object';

    // useSoftDeletes bernilai true, agar data yang dihapus tidak benar benar dihapus
    // protected $useSoftDeletes = true;

    // set untuk kolom yang dapat di insert atau diupdate 
    protected $allowedFields = ['ip_add', 'tanggal'];


    public function getDataHariIni()
    {
        return $this->select("COUNT(id_pengunjung) as jml")->getWhere(['tanggal' => date('Y-m-d')])->getRow()->jml;
    }

    public function getDataKemarin()
    {
        return $this->select("COUNT(id_pengunjung) as jml")->getWhere(['tanggal' => date("Y-m-d", strtotime('-1 day'))])->getRow()->jml;
    }

    public function getDataBulanIni()
    {
        return $this->select("COUNT(id_pengunjung) as jml")->getWhere(['MONTH(tanggal)' => date('n'), 'YEAR(tanggal)' => date('Y')])->getRow()->jml;
    }

    public function getDataTahunIni()
    {
        return $this->select("COUNT(id_pengunjung) as jml")->getWhere(['YEAR(tanggal)' => date('Y')])->getRow()->jml;
    }

    public function getDataTotal()
    {
        return $this->select("COUNT(id_pengunjung) as jml")->get()->getRow()->jml;
    }

    public function insertData()
    {
        helper('ipadd');
        $ip = get_client_ip();
        $check = $this->getWhere([
            'ip_add' => $ip,
            'tanggal' => date('Y-m-d'),
        ]);
        if ($check->getNumRows() == 0) {
            return $this->insert([
                'ip_add' => $ip,
                'tanggal' => date('Y-m-d')
            ]);
        } else {
            return false;
        }
    }
}
