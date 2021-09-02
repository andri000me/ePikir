<?php

namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class Data_table_pemohon extends Model
{
    // protected $db = db_connect();
    protected $table;
    var $select_column = array(
        'id_pemohon',
        'no_pemohon',
        'DATE_FORMAT(tgl_pengajuan, "%d-%m-%Y") tgl_pengajuan',
        'nama_pemohon',
        'jabatan_pemohon',
        'nama_usaha',
        'alamat_pemohon',
        'alamat_usaha',
        'DATE_FORMAT(tgl_pelaksanaan_mulai, "%d-%m-%Y") tgl_pelaksanaan_mulai',
        'DATE_FORMAT(tgl_pelaksanaan_akhir, "%d-%m-%Y") tgl_pelaksanaan_akhir',
        'jml_peserta',
        'kec.nama_kecamatan AS nama_kecamatan_pemohon',
        'kc.nama_kecamatan AS nama_kecamatan_usaha',
        'des.nama_desa AS nama_desa_pemohon',
        'ds.nama_desa AS nama_desa_usaha',
        'status_pemohon',
    );
    var $select_column_search = array(
        'id_pemohon',
        'no_pemohon',
        'DATE_FORMAT(tgl_pengajuan, "%d-%m-%Y")',
        'nama_pemohon',
        'jabatan_pemohon',
        'nama_usaha',
        'alamat_pemohon',
        'alamat_usaha',
        'kec.nama_kecamatan',
        'kc.nama_kecamatan',
        'des.nama_desa',
        'ds.nama_desa',
    );

    public function __construct()
    {

        parent::__construct();
        $this->table = $this->db->table('tbl_pemohon pm');
    }

    function make_query($status = '', $id_surat = '')
    {
        $this->table->select($this->select_column);
        $this->table->where('status_pemohon', $status);
        $this->table->where('id_surat', $id_surat);
        $this->table->join('tbl_kecamatan kec', 'kec.kode_kecamatan = pm.kode_kecamatan_pemohon', 'left');
        $this->table->join('tbl_kecamatan kc', 'kc.kode_kecamatan = pm.kode_kecamatan_usaha', 'left');
        $this->table->join('tbl_desa des', 'des.kode_desa = pm.kode_desa_pemohon', 'left');
        $this->table->join('tbl_desa ds', 'ds.kode_desa = pm.kode_desa_usaha', 'left');
        // $this->table->from($this->table);
        $i = 0;
        if ($id_surat != '2') {
            $this->select_column_search[] = 'jml_peserta';
            $this->select_column_search[] = 'DATE_FORMAT(tgl_pelaksanaan_mulai, "%d-%m-%Y")';
            $this->select_column_search[] = 'DATE_FORMAT(tgl_pelaksanaan_akhir, "%d-%m-%Y")';

            $order_column = array(null, null, 'no_pemohon', 'tgl_pengajuan', 'nama_pemohon', 'alamat_pemohon', 'jabatan_pemohon', 'nama_usaha', 'tgl_pelaksanaan_mulai', 'jml_peserta', 'alamat_usaha');
        } else {
            $order_column = array(null, null, 'no_pemohon', 'tgl_pengajuan', 'nama_pemohon', 'alamat_pemohon', 'jabatan_pemohon', 'nama_usaha', 'alamat_usaha');
        }
        foreach ($this->select_column_search as $item) {
            // if datatable send POST for search
            if ($_POST["search"]["value"]) {
                // first loop
                if ($i === 0) {
                    // open bracket
                    $this->table->groupStart();
                    $this->table->like($item, $_POST["search"]["value"]);
                } else {
                    $this->table->orLike($item, $_POST["search"]["value"]);
                }

                // last loop
                if (count($this->select_column_search) - 1 == $i) {
                    // close bracket
                    $this->table->groupEnd();
                }
            }
            $i++;
        }
        if (isset($_POST["order"])) {
            $this->table->orderBy($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->table->orderBy('id_pemohon', 'DESC');
        }
    }

    function make_datatables($status = '', $id_surat = '')
    {
        $this->make_query($status, $id_surat);
        if ($_POST["length"] != -1) {
            $this->table->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->table->get();
        return $query->getResult();
    }
    function get_filtered_data($status = '', $id_surat = '')
    {
        $this->make_query($status, $id_surat);
        // $this->table->get();
        return $this->table->countAllResults();
    }
    function get_all_data($status = '', $id_surat = '')
    {
        $this->table->select("*");
        $this->table->where('status_pemohon', $status);
        $this->table->where('id_surat', $id_surat);
        // $this->table->from($this->table);
        return $this->table->countAllResults();
    }
}
