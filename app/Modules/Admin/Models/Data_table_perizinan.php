<?php
namespace App\Modules\Admin\Models;

use CodeIgniter\Model;
class Data_table_perizinan extends Model
{
    protected $table;
    var $select_column = array(
        'pr.id_perizinan',
        'pm.no_pemohon',
        'pr.nomor_perizinan',
        'pr.tgl_terbit',
        'pr.kajian_perizinan',
        'pm.nama_pemohon',
        'pm.alamat_pemohon',
        'kec.nama_kecamatan AS nama_kecamatan_pemohon',
        'kc.nama_kecamatan AS nama_kecamatan_usaha',
        'des.nama_desa AS nama_desa_pemohon',
        'ds.nama_desa AS nama_desa_usaha',
        'pm.jabatan_pemohon',
        'pm.nama_usaha',
        'pm.alamat_usaha',
        'DATE_FORMAT(pm.tgl_pelaksanaan_mulai, "%d-%m-%Y") tgl_pelaksanaan_mulai',
        'DATE_FORMAT(pm.tgl_pelaksanaan_akhir, "%d-%m-%Y") tgl_pelaksanaan_akhir',
        'pm.jml_peserta',
    );
    
    var $select_column_search = array(
        'pr.id_perizinan',
        'pm.no_pemohon',
        'pr.nomor_perizinan',
        'DATE_FORMAT(pr.tgl_terbit, "%d-%m-%Y")',
        'pr.kajian_perizinan',
        'pm.nama_pemohon',
        'pm.alamat_pemohon',
        'kec.nama_kecamatan',
        'kc.nama_kecamatan',
        'des.nama_desa',
        'ds.nama_desa',
        'pm.jabatan_pemohon',
        'pm.nama_usaha',
        'pm.alamat_usaha',
        'DATE_FORMAT(pm.tgl_pelaksanaan_mulai, "%d-%m-%Y")',
        'DATE_FORMAT(pm.tgl_pelaksanaan_akhir, "%d-%m-%Y")',
        'pm.jml_peserta',
    );

    public function __construct() {
 
        parent::__construct();
        $this->table = $this->db->table('tbl_perizinan pr');
    }

    function make_query($status = '', $id_surat='')
    {
        if ($status == 'diterima') {
            $order_column = array(null, null, 'pm.no_pemohon', 'pr.nomor_perizinan', 'pr.tgl_terbit', 'pm.nama_pemohon', 'pm.alamat_pemohon', 'pm.jabatan_pemohon', 'pm.nama_usaha', 'pm.alamat_usaha');
        } else {
            $order_column = array(null, null, 'pm.no_pemohon', 'pr.nomor_perizinan', 'pr.tgl_terbit', 'pm.nama_pemohon', 'pm.alamat_pemohon', 'pm.jabatan_pemohon', 'pm.nama_usaha', 'pm.alamat_usaha', 'pr.kajian_perizinan');
        }

        if ($id_surat != '2') {
            $order_column[] = 'pm.tgl_pelaksanaan_mulai';
            $order_column[] = 'pm.jml_peserta';
        }

        $this->table->select($this->select_column);
        $this->table->where('pr.status_perizinan', $status);
        $this->table->where('pm.id_surat', $id_surat);
        $this->table->join('tbl_pemohon pm', 'pm.id_pemohon = pr.id_pemohon', 'left');
        $this->table->join('tbl_kecamatan kec', 'kec.kode_kecamatan = pm.kode_kecamatan_pemohon', 'left');
        $this->table->join('tbl_kecamatan kc', 'kc.kode_kecamatan = pm.kode_kecamatan_usaha', 'left');
        $this->table->join('tbl_desa des', 'des.kode_desa = pm.kode_desa_pemohon', 'left');
        $this->table->join('tbl_desa ds', 'ds.kode_desa = pm.kode_desa_usaha', 'left');
        // $this->table->from($this->table);
        $i = 0;
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
            $this->table->orderBy('id_perizinan', 'DESC');
        }
    }

    function make_datatables($status = '', $id_surat='')
    {
        $this->make_query($status, $id_surat);
        if ($_POST["length"] != -1) {
            $this->table->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->table->get();
        return $query->getResult();
    }
    function get_filtered_data($status = '', $id_surat='')
    {
        $this->make_query($status, $id_surat);
        // $query = $this->table->get();
        return $this->table->countAllResults();
    }
    function get_all_data($status = '', $id_surat='')
    {
        $this->table->select("*");
        $this->table->where('pr.status_perizinan', $status);
        $this->table->where('pm.id_surat', $id_surat);
        $this->table->join('tbl_pemohon pm', 'pm.id_pemohon = pr.id_pemohon', 'left');
        // $this->table->from($this->table);
        return $this->table->countAllResults();
    }
}
