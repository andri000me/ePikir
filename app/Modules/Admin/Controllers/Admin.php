<?php

namespace App\Modules\Admin\Controllers;

use App\Modules\Admin\Controllers\BaseController;
// use CodeIgniter\HTTP\Response;

// error_reporting(null);

class Admin extends BaseController
{

    public function index()
    {
        // $encode = 'FbYb4m7luVAlrI2JafcbeEfAwM7jYHx3sAbXz4hrob65mryyQDwMp/VIRkn7lihCm9E1OBr1wFwNZWW8Fhx/EDR0WYSr9T7m+FPBbjXJuNm8Ug==';
        // $decode = decode($encode); 
        // var_dump($encode); echo '<br>';
        // var_dump($decode); exit();
        $this->head['css'][] = assets_url . "app-assets/fonts/simple-line-icons/style.css";
        $this->menu['active'] = '1';

        $select = "COUNT(id_pemohon) jml";
        $where = "id_pemohon > 0";
        $jmlPemohon = $this->MasterData->getWhereData($select, 'tbl_pemohon', $where)->getRow()->jml;
        $where = "status_perizinan = 'diterima'";
        $jmlDiterima = $this->MasterData->getWhereData($select, 'tbl_perizinan', $where)->getRow()->jml;
        $where = "status_perizinan = 'ditolak'";
        $jmlDitolak = $this->MasterData->getWhereData($select, 'tbl_perizinan', $where)->getRow()->jml;

        // ============================================

        $where = "status_pemohon = 'diajukan' AND id_surat = 1";
        $jmlSuketMasuk = $this->MasterData->getWhereData($select, 'tbl_pemohon', $where)->getRow()->jml;
        $where = "status_pemohon = 'diproses' AND id_surat = 1";
        $jmlSuketProses = $this->MasterData->getWhereData($select, 'tbl_pemohon', $where)->getRow()->jml;
        $where = "status_perizinan = 'diterima' AND id_pemohon IN (SELECT pm.id_pemohon FROM tbl_pemohon pm WHERE pm.id_surat = 1)";
        $jmlSuketTerima = $this->MasterData->getWhereData($select, 'tbl_perizinan', $where)->getRow()->jml;
        $where = "status_perizinan = 'ditolak' AND id_pemohon IN (SELECT pm.id_pemohon FROM tbl_pemohon pm WHERE pm.id_surat = 1)";
        $jmlSuketTolak = $this->MasterData->getWhereData($select, 'tbl_perizinan', $where)->getRow()->jml;

        // ============================================

        $where = "status_pemohon = 'diajukan' AND id_surat = 2";
        $jmlSuzinMasuk = $this->MasterData->getWhereData($select, 'tbl_pemohon', $where)->getRow()->jml;
        $where = "status_pemohon = 'diproses' AND id_surat = 2";
        $jmlSuzinProses = $this->MasterData->getWhereData($select, 'tbl_pemohon', $where)->getRow()->jml;
        $where = "status_perizinan = 'diterima' AND id_pemohon IN (SELECT pm.id_pemohon FROM tbl_pemohon pm WHERE pm.id_surat = 2)";
        $jmlSuzinTerima = $this->MasterData->getWhereData($select, 'tbl_perizinan', $where)->getRow()->jml;
        $where = "status_perizinan = 'ditolak' AND id_pemohon IN (SELECT pm.id_pemohon FROM tbl_pemohon pm WHERE pm.id_surat = 2)";
        $jmlSuzinTolak = $this->MasterData->getWhereData($select, 'tbl_perizinan', $where)->getRow()->jml;

        // ============================================

        $where = "status_pemohon = 'diajukan' AND id_surat = 3";
        $jmlNikahMasuk = $this->MasterData->getWhereData($select, 'tbl_pemohon', $where)->getRow()->jml;
        $where = "status_pemohon = 'diproses' AND id_surat = 3";
        $jmlNikahProses = $this->MasterData->getWhereData($select, 'tbl_pemohon', $where)->getRow()->jml;
        $where = "status_perizinan = 'diterima' AND id_pemohon IN (SELECT pm.id_pemohon FROM tbl_pemohon pm WHERE pm.id_surat = 3)";
        $jmlNikahTerima = $this->MasterData->getWhereData($select, 'tbl_perizinan', $where)->getRow()->jml;
        $where = "status_perizinan = 'ditolak' AND id_pemohon IN (SELECT pm.id_pemohon FROM tbl_pemohon pm WHERE pm.id_surat = 3)";
        $jmlNikahTolak = $this->MasterData->getWhereData($select, 'tbl_perizinan', $where)->getRow()->jml;

        $cont = array(
            'jmlPemohon'    => $jmlPemohon,
            'jmlDiterima'   => $jmlDiterima,
            'jmlDitolak'    => $jmlDitolak,
            'jmlSuketMasuk' => $jmlSuketMasuk,
            'jmlSuketProses' => $jmlSuketProses,
            'jmlSuketTerima' => $jmlSuketTerima,
            'jmlSuketTolak' => $jmlSuketTolak,
            'jmlSuzinMasuk' => $jmlSuzinMasuk,
            'jmlSuzinProses' => $jmlSuzinProses,
            'jmlSuzinTerima' => $jmlSuzinTerima,
            'jmlSuzinTolak' => $jmlSuzinTolak,
            'jmlNikahMasuk' => $jmlNikahMasuk,
            'jmlNikahProses' => $jmlNikahProses,
            'jmlNikahTerima' => $jmlNikahTerima,
            'jmlNikahTolak' => $jmlNikahTolak,
        );

        $data = array(
            'header' => $this->head,
            'menu'   => $this->menu,
            'konten' => 'dashboard',
            'footer' => $this->foot,
            'cont'   => $cont,
        );

        $this->template($data);
    }

    public function addPemohon($surat = '')
    {
        // $this->head['css'][] = assets_url . "app-assets/vendors/css/forms/icheck/icheck.css";
        // $this->head['css'][] = assets_url . "app-assets/vendors/css/forms/icheck/custom.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/css/forms/selects/select2.min.css";
        // $this->head['css'][] = assets_url . "app-assets/css/plugins/forms/validation/form-validation.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css";
        // $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-daterangepicker/daterangepicker.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/style-datepicker.css";
        // ================================================================
        // $this->foot['js'][] = assets_url . "app-assets/vendors/js/forms/icheck/icheck.min.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/js/forms/select/select2.full.min.js";
        // $this->foot['js'][] = assets_url . "app-assets/vendors/js/forms/validation/jqBootstrapValidation.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js";
        // $this->foot['js'][] = assets_url . "app-assets/vendors/bootstrap-daterangepicker/daterangepicker.js";
        // $this->foot['js'][] = assets_url . "app-assets/js/scripts/forms/checkbox-radio.js";
        $this->foot['js'][] = base_url('assets/js/get_desa.js');
        // $this->foot['js'][] = assets_url."app-assets/js/scripts/forms/validation/form-validation.js";
        // ================================================================
        $script[] = '$(".select2").select2();';
        // $script[] = '$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();';
        $script[] = "$('.date-picker').datepicker({
                        autoclose: true,
                        todayHighlight: true,
                        format: 'dd/mm/yyyy'
                    });";

        $script[] = "$('.date-range').datepicker({
                        autoclose: true,
                        todayHighlight: true,
                        format: 'dd/mm/yyyy',
                        toggleActive: true
                    });";
        // ================================================================
        $id_surat = decode($surat);

        if (!$id_surat) {
            return redirect()->to(base_url('admin'));
            exit();
        }
        $this->foot['script'] = $script;
        $this->menu['active'] = '2.1.' . $id_surat;

        $dataKec = $this->MasterData->getData('tbl_kecamatan')->getResult();

        $no_pemohon = $this->kodeOtomatis('no_pemohon', 'tbl_pemohon', "id_pemohon > 0", 'P', 4);

        $cont = array(
            'dataKec'    => $dataKec,
            'no_pemohon' => $no_pemohon,
            'id_surat'   => $id_surat,
        );

        $data = array(
            'header' => $this->head,
            'menu'   => $this->menu,
            'konten' => 'form_permohonan',
            'footer' => $this->foot,
            'cont'   => $cont,
        );

        $this->template($data);
    }

    public function simpanPemohon()
    {
        $post = $this->request->getPost();
        if ($post) {
            $data = striptag($post);
            $id_surat = decode($data['id_surat']);
            $dt = array(
                'id_surat'                  => $id_surat,
                'no_pemohon'                => $data['no_pemohon'],
                'nama_pemohon'              => $data['nama_pemohon'],
                'alamat_pemohon'            => $data['alamat_pemohon'],
                'kode_kecamatan_pemohon'    => $data['kode_kecamatan_pemohon'],
                'kode_desa_pemohon'         => $data['kode_desa_pemohon'],
                'jabatan_pemohon'           => $data['jabatan_pemohon'],
                'nama_usaha'                => $data['nama_usaha'],
                'tgl_pengajuan'             => date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $data['tgl_pengajuan']))),
                'id_logs'                   => $this->id_logs
            );

            if ($id_surat != '2') {
                $dt['tgl_pelaksanaan_mulai']      = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $data['tgl_pelaksanaan_mulai'])));
                $dt['tgl_pelaksanaan_akhir']      = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $data['tgl_pelaksanaan_akhir'])));
                $dt['jml_peserta']          = $data['jml_peserta'];
            }

            if ($this->request->getVar('cek_alamat')) {
                $dt['alamat_usaha']         = $data['alamat_pemohon'];
                $dt['kode_kecamatan_usaha'] = $data['kode_kecamatan_pemohon'];
                $dt['kode_desa_usaha']      = $data['kode_desa_pemohon'];
            } else {
                $dt['alamat_usaha']         = $data['alamat_usaha'];
                $dt['kode_kecamatan_usaha'] = $data['kode_kecamatan_usaha'];
                $dt['kode_desa_usaha']      = $data['kode_desa_usaha'];
            }

            $inputData = $this->MasterData->inputData($dt, 'tbl_pemohon');

            if ($inputData) {
                alert_success('Data permohonan berhasil disimpan.');
                return redirect()->to(base_url() . '/admin/addPemohon/' . encode($id_surat));
            } else {
                alert_failed('Data permohonan gagal disimpan.');
                return redirect()->to(base_url() . '/admin/addPemohon/' . encode($id_surat));
            }
        }
    }

    public function editPemohon($id = '')
    {
        // $this->head['css'][] = assets_url . "app-assets/vendors/css/forms/icheck/icheck.css";
        // $this->head['css'][] = assets_url . "app-assets/vendors/css/forms/icheck/custom.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/css/forms/selects/select2.min.css";
        // $this->head['css'][] = assets_url . "app-assets/css/plugins/forms/validation/form-validation.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/style-datepicker.css";
        // ================================================================
        // $this->foot['js'][] = assets_url . "app-assets/vendors/js/forms/icheck/icheck.min.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/js/forms/select/select2.full.min.js";
        // $this->foot['js'][] = assets_url . "app-assets/vendors/js/forms/validation/jqBootstrapValidation.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js";
        // $this->foot['js'][] = assets_url . "app-assets/js/scripts/forms/checkbox-radio.js";
        $this->foot['js'][] = base_url('assets/js/get_desa.js');
        // $this->foot['js'][] = assets_url."app-assets/js/scripts/forms/validation/form-validation.js";
        // ================================================================
        $script[] = '$(".select2").select2();';
        // $script[] = '$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();';
        $script[] = "$('.date-picker').datepicker({
                        autoclose: true,
                        todayHighlight: true,
                        format: 'dd/mm/yyyy'
                    });";
        $script[] = "$('.date-range').datepicker({
                        autoclose: true,
                        todayHighlight: true,
                        format: 'dd/mm/yyyy',
                        toggleActive: true
                    });";
        // ================================================================

        $id_pemohon = decode($id);
        if (!$id_pemohon) {
            return redirect()->to(base_url('admin'));
            exit();
        }
        $select = array(
            'pm.*',
        );
        $table = 'tbl_pemohon pm';
        $where = "id_pemohon = $id_pemohon";
        $dataPemohon = $this->MasterData->getWhereData($select, $table, $where);

        if (count($dataPemohon->getResultArray()) > 0) {
            $row = $dataPemohon->getRowArray();
            $id_surat = $row['id_surat'];
        } else {
            return redirect()->to(base_url('admin/dataPemohon'));
            exit();
        }

        $dataKec = $this->MasterData->getData('tbl_kecamatan')->getResult();

        $no_pemohon = $this->kodeOtomatis('no_pemohon', 'tbl_pemohon', "id_pemohon > 0", 'P', 4);

        $this->foot['script'] = $script;
        $this->menu['active'] = '2.2.' . $id_surat;

        $cont = array(
            'dataKec'    => $dataKec,
            'no_pemohon' => $no_pemohon,
            'data'       => $row,
        );

        $data = array(
            'header' => $this->head,
            'menu'   => $this->menu,
            'konten' => 'form_edit_permohonan',
            'footer' => $this->foot,
            'cont'   => $cont,
        );

        $this->template($data);
    }

    public function updatePemohon()
    {
        $post = $this->request->getPost();
        if ($post) {
            $data = striptag($post);
            $id_surat = decode($data['id_surat']);
            $id_pemohon = decode($data['id_pemohon']);
            $dt = array(
                'no_pemohon'                => $data['no_pemohon'],
                'nama_pemohon'              => $data['nama_pemohon'],
                'alamat_pemohon'            => $data['alamat_pemohon'],
                'kode_kecamatan_pemohon'    => $data['kode_kecamatan_pemohon'],
                'kode_desa_pemohon'         => $data['kode_desa_pemohon'],
                'jabatan_pemohon'           => $data['jabatan_pemohon'],
                'nama_usaha'                => $data['nama_usaha'],
                'tgl_pengajuan'             => date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $data['tgl_pengajuan']))),
                'id_logs'                   => $this->id_logs
            );

            if ($id_surat != '2') {
                $dt['tgl_pelaksanaan_mulai']      = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $data['tgl_pelaksanaan_mulai'])));
                $dt['tgl_pelaksanaan_akhir']      = date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $data['tgl_pelaksanaan_akhir'])));
                $dt['jml_peserta']          = $data['jml_peserta'];
            }

            if ($this->request->getVar('cek_alamat')) {
                $dt['alamat_usaha']         = $data['alamat_pemohon'];
                $dt['kode_kecamatan_usaha'] = $data['kode_kecamatan_pemohon'];
                $dt['kode_desa_usaha']      = $data['kode_desa_pemohon'];
            } else {
                $dt['alamat_usaha']         = $data['alamat_usaha'];
                $dt['kode_kecamatan_usaha'] = $data['kode_kecamatan_usaha'];
                $dt['kode_desa_usaha']      = $data['kode_desa_usaha'];
            }

            $where = "id_pemohon = $id_pemohon";
            $updateData = $this->MasterData->editData($where, $dt, 'tbl_pemohon');

            if ($updateData) {
                alert_success('Data permohonan berhasil disimpan.');
                return redirect()->to(base_url() . '/admin/dataPemohon/diajukan/' . encode($id_surat));
            } else {
                alert_failed('Data permohonan gagal disimpan.');
                return redirect()->to(base_url() . '/admin/dataPemohon/diajukan/' . encode($id_surat));
            }
        }
    }

    public function dataPemohon($status = 'diajukan', $surat = '')
    {
        $id_surat = decode($surat);
        if (!$id_surat) {
            return redirect()->to(base_url('admin'));
            exit();
        }

        $this->head['css'][] = assets_url . "app-assets/css/plugins/animate/animate.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/css/tables/datatable/datatables.min.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/style-datepicker.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/css/extensions/sweetalert.css";
        // ================================================================
        $this->foot['js'][] = assets_url . "app-assets/vendors/js/tables/datatable/datatables.min.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/js/extensions/sweetalert.min.js";
        $this->foot['js'][] = base_url('assets/js/get_data_pemohon.js');
        $this->foot['js'][] = base_url('assets/js/delete_data.js');
        // ================================================================
        $script[] = "showDataTable('" . base_url('admin/getDataPemohon/' . $status . '/' . encode($id_surat)) . "')";
        $script[] = "$('.date-picker').datepicker({
                        autoclose: true,
                        todayHighlight: true,
                        format: 'dd/mm/yyyy'
                    });";
        // ================================================================
        $this->foot['script'] = $script;
        $this->menu['active'] = '2.2.' . $id_surat;

        $cont = array(
            'status'    => $status,
            'id_surat'  => $id_surat,
        );

        $data = array(
            'header'    => $this->head,
            'menu'      => $this->menu,
            'konten'    => 'admin/pages/data_permohonan',
            'footer'    => $this->foot,
            'cont'      => $cont,
        );

        $this->template($data);
    }

    public function terimaPemohon()
    {
        $post = $this->request->getPost();
        if ($post) {
            $dt = striptag($post);
            $id = decode($dt['id_pemohon']);
            $id_surat = decode($dt['id_surat']);
            $tgl_terbit = str_replace('/', '-', $dt['tgl_terbit']);
            $data = array(
                'id_pemohon'        => $id,
                // 'kajian_perizinan'  => $dt['kajian_perizinan'],
                'status_perizinan'  => 'diterima',
                'nomor_perizinan'   => $dt['nomor_perizinan'],
                'tgl_terbit'        => date('Y-m-d', strtotime($tgl_terbit)),
                'tgl_cetak'         => date('Y-m-d H:i:s'),
                'id_logs'           => $this->id_logs,
            );

            $inputData = $this->MasterData->inputData($data, 'tbl_perizinan');

            if ($inputData) {
                $id_perizinan = $this->db->insert_id();
                // ------------------------------------------------
                $where = "id_pemohon = $id";
                $data = array('status_pemohon' => 'selesai');
                $table = 'tbl_pemohon';
                $this->MasterData->editData($where, $data, $table);
                // ------------------------------------------------
                alert_success('Permohonan berhasil diproses.');
                // return redirect()->to(base_url() . '/admin/cetakSuratPerizinan/diterima/' . encode($id_perizinan));
                return redirect()->to(base_url() . '/admin/dataPemohon/diproses/' . encode($id_surat));
            } else {
                alert_failed('Permohonan gagal diproses.');
                return redirect()->to(base_url() . '/admin/dataPemohon/diproses/' . encode($id_surat));
            }
        }
    }

    public function tolakPemohon()
    {
        $post = $this->request->getPost();
        if ($post) {
            $dt = striptag($post);
            $id = decode($dt['id_pemohon']);
            $id_surat = decode($dt['id_surat']);
            $tgl_terbit = str_replace('/', '-', $dt['tgl_terbit']);
            $data = array(
                'id_pemohon'        => $id,
                'kajian_perizinan'  => $dt['kajian_perizinan'],
                'status_perizinan'  => 'ditolak',
                'nomor_perizinan'   => $dt['nomor_perizinan'],
                'tgl_terbit'        => date('Y-m-d', strtotime($tgl_terbit)),
                'tgl_cetak'         => date('Y-m-d H:i:s'),
                'id_logs'           => $this->id_logs,
            );

            $inputData = $this->MasterData->inputData($data, 'tbl_perizinan');

            if ($inputData) {
                $id_perizinan = $this->db->insert_id();
                // ------------------------------------------------
                $where = "id_pemohon = $id";
                $data = array('status_pemohon' => 'selesai');
                $table = 'tbl_pemohon';
                $this->MasterData->editData($where, $data, $table);
                // ------------------------------------------------
                alert_success('Permohonan berhasil diproses.');
                // return redirect()->to(base_url() . '/admin/cetakSuratPerizinan/ditolak/' . encode($id_perizinan));
                return redirect()->to(base_url() . '/admin/dataPemohon/diproses/' . encode($id_surat));
            } else {
                alert_failed('Permohonan gagal diproses.');
                return redirect()->to(base_url() . '/admin/dataPemohon/diproses/' . encode($id_surat));
            }
        }
    }

    public function prosesPemohon($id = '', $surat = '')
    {
        $id_pemohon = decode($id);
        $id_surat = decode($surat);
        if (!$id_pemohon) {
            return redirect()->to(base_url('admin'));
            exit();
        }
        if (!$id_surat) {
            return redirect()->to(base_url('admin'));
            exit();
        }
        $data = array(
            'id_pemohon'        => $id_pemohon,
            'nomor_dinkes'      => '100/       /01.01/2020',
            'tgl_dinkes'        => date('Y-m-d'),
            'no_urut'           => $this->nomorUrut(),
            'id_logs'           => $this->id_logs,
        );

        $inputData = $this->MasterData->inputData($data, 'tbl_dinkes');

        if ($inputData) {
            // $id_dinkes = $this->db->insert_id();
            // ------------------------------------------------
            $where = "id_pemohon = $id_pemohon";
            $data = array('status_pemohon' => 'diproses');
            $table = 'tbl_pemohon';
            $this->MasterData->editData($where, $data, $table);
            // ------------------------------------------------
            alert_success('Permohonan berhasil diproses.');
            // echo $this->cetakSuratDinkes(encode($id_dinkes));
            return redirect()->to(base_url() . '/admin/dataPemohon/diajukan/' . encode($id_surat));
        } else {
            alert_failed('Permohonan gagal diproses.');
            return redirect()->to(base_url() . '/admin/dataPemohon/diajukan/' . encode($id_surat));
        }
    }

    public function deletePemohon($value = '')
    {
        if ($this->request->getPost()) {
            $id = decode($this->request->getVar('id_pemohon'));
            $where = "id_pemohon = $id";
            $delete = $this->MasterData->deleteData($where, 'tbl_pemohon');
            if ($delete) {
                echo 'Success';
                alert_success('Data permohonan berhasil dihapus.');
            } else {
                echo 'Gagal';
                alert_failed('Data permohonan gagal dihapus.');
            }
        }
    }

    public function getDataPemohon($status = 'diajukan', $surat = '')
    {
        if ($this->request->getPost()) {
            $id_surat = decode($surat);
            // $this->load->model("Data_table_pemohon", "DataTable");
            $fetch_data = $this->DataTablePemohon->make_datatables($status, $id_surat);
            // echo json_encode($fetch_data);

            $data = array();
            $i = $_POST['start'];
            foreach ($fetch_data as $row) {
                $btn = '';
                $i++;
                $btn_hapus = '<button type="button" onclick="hapusData(this)" data-id="' . encode($row->id_pemohon) . '" data-link="' . base_url('admin/deletePemohon') . '" class="btn btn-sm btn-danger"  title="Hapus"><i class="la la-trash-o font-small-3"></i></button> ';
                $btn_proses = '<button type="button" data-id="' . encode($row->id_pemohon) . '" onclick="prosesPermohonan(this)" class="btn btn-sm btn-info" title="Proses"><i class="la la-gear font-small-3"></i></button> ';
                $btn_proses_last = '<button type="button" data-id="' . encode($row->id_pemohon) . '" onclick="prosesPermohonanLast(this)" class="btn btn-sm btn-info" title="Proses Lanjutan"><i class="la la-gear font-small-3"></i></button> ';
                $btn_cetak_dinkes = '<button type="button" data-id="' . encode($row->id_pemohon) . '" onclick="cetakSuratDinkes(this)" class="btn btn-sm btn-primary" title="Surat ke Dinkes"><i class="la la-print font-small-3"></i></button> ';
                $btn_edit = '<a href="' . base_url('admin/editPemohon/' . encode($row->id_pemohon)) . '" type="button" class="btn btn-sm btn-primary" title="Ubah Data"><i class="la la-edit font-small-3"></i></a> ';
                if ($row->status_pemohon == 'diajukan') {
                    $btn .= $btn_proses;
                    $btn .= $btn_edit;
                    $btn .= $btn_hapus;
                } else if ($row->status_pemohon == 'diproses') {
                    $btn .= $btn_cetak_dinkes;
                    // $btn .= $btn_cetak_nodin;
                    $btn .= $btn_proses_last;
                    $btn .= $btn_hapus;
                } else {
                    $btn .= $btn_hapus;
                }
                $columns = array(
                    $i,
                    $btn,
                    $row->no_pemohon,
                    date('d/m/Y', strtotime($row->tgl_pengajuan)),
                    $row->nama_pemohon,
                    $row->alamat_pemohon . ', ' . ucwords(strtolower($row->nama_desa_pemohon)) . ', ' . ucwords(strtolower($row->nama_kecamatan_pemohon)),
                    $row->jabatan_pemohon,
                    $row->nama_usaha,
                );
                if ($id_surat != '2') {
                    $tgl_pelaksanaan = '';
                    if ($row->tgl_pelaksanaan_mulai == $row->tgl_pelaksanaan_akhir) {
                        $tgl_pelaksanaan = date('d/m/Y', strtotime($row->tgl_pelaksanaan_mulai));
                    } else {
                        $tgl_pelaksanaan = date('d/m/Y', strtotime($row->tgl_pelaksanaan_mulai)) . ' - ' . date('d/m/Y', strtotime($row->tgl_pelaksanaan_akhir));
                    }
                    $columns[] = $tgl_pelaksanaan;
                    $columns[] = $row->jml_peserta;
                    $columns[] = $row->alamat_usaha . ', ' . ucwords(strtolower($row->nama_desa_usaha)) . ', ' . ucwords(strtolower($row->nama_kecamatan_usaha));
                } else {
                    $columns[] = $row->alamat_usaha . ', ' . ucwords(strtolower($row->nama_desa_usaha)) . ', ' . ucwords(strtolower($row->nama_kecamatan_usaha));
                }

                $data[] = $columns;
            }
            $output = array(
                "draw"               =>     $_POST["draw"],
                "recordsTotal"       =>     $this->DataTablePemohon->get_all_data($status, $id_surat),
                "recordsFiltered"    =>     $this->DataTablePemohon->get_filtered_data($status, $id_surat),
                "data"               =>     $data
            );
            echo json_encode($output);
        }
    }

    public function kodeOtomatis($select = '', $table = '', $where = '', $kode_awal = '', $jml_kode = '')
    {
        $by     = $select;
        $order     = "DESC";
        $limit     = "1";
        $detail = $this->MasterData->getWhereDataLimitOrder($select, $table, $where, $limit, $by, $order);
        $row    = $detail->getRow();
        if (count($detail->getResultArray()) > 0) { // Check data
            $kode = substr($row->$select, 1, $jml_kode); // Mengambil string beberapa digit
            $code = (int) $kode; // Mengubah String jadi Integer
            $code++;
            $kodeOtomatis = $kode_awal . str_pad($code, $jml_kode, "0", STR_PAD_LEFT); // Kerangka Kode Otomatis = kode_pasar + 6 digit
        } else {
            $code = '';
            for ($i = 1; $i < $jml_kode; $i++) {
                $code .= '0';
            }
            $kodeOtomatis = $kode_awal . $code . '1';
        }

        return $kodeOtomatis;
    }

    public function nomorUrut($select = 'no_urut', $table = 'tbl_dinkes', $where = "id_dinkes > 0")
    {
        $by        = $select;
        $order     = "DESC";
        $limit     = "1";
        $detail    = $this->MasterData->getWhereDataLimitOrder($select, $table, $where, $limit, $by, $order);
        $row    = $detail->getRow();
        if (count($detail->getResultArray()) > 0) { // Check data
            $no_urut = $row->$select + 1;
        } else {
            $no_urut = 1;
        }

        return $no_urut;
    }

    // =================================================

    public function perizinan($status = 'diterima', $surat = '')
    {
        $id_surat = decode($surat);
        if (!$id_surat) {
            return redirect()->to(base_url('admin'));
            exit();
        }

        $this->head['css'][] = assets_url . "app-assets/css/plugins/animate/animate.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/css/tables/datatable/datatables.min.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/style-datepicker.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/css/extensions/sweetalert.css";
        // ================================================================
        $this->foot['js'][] = assets_url . "app-assets/vendors/js/tables/datatable/datatables.min.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/js/extensions/sweetalert.min.js";
        $this->foot['js'][] = base_url('assets/js/get_data_perizinan.js');
        $this->foot['js'][] = base_url('assets/js/delete_data.js');
        // ================================================================
        $script[] = "showDataTable('" . base_url('admin/getDataPerizinan/' . $status . '/' . encode($id_surat)) . "','" . $status . "')";
        $script[] = "$('.date-picker').datepicker({
                        autoclose: true,
                        todayHighlight: true,
                        format: 'dd/mm/yyyy'
                    });";
        // ================================================================
        $this->foot['script'] = $script;
        $this->menu['active'] = '3.' . $id_surat;

        $cont = array(
            'status'    => $status,
            'id_surat'  => $id_surat,
        );

        $data = array(
            'header' => $this->head,
            'menu'   => $this->menu,
            'konten' => 'data_perizinan',
            'footer' => $this->foot,
            'cont'   => $cont,
        );

        $this->template($data);
    }

    public function getDataPerizinan($status = 'diterima', $surat = '')
    {
        if ($this->request->getPost()) {
            $id_surat = decode($surat);
            // $this->load->model("Data_table_perizinan", "DataTable");
            $fetch_data = $this->DataTablePerizinan->make_datatables($status, $id_surat);

            $data = array();
            $i = $_POST['start'];
            foreach ($fetch_data as $row) {
                $btn = '';
                $i++;
                $btn_cetak_nodin = '<a target="_blank" href="' . base_url('admin/cetakNodin/' . $status . '/' . ($id_surat == '1' ? 'suket' : 'suzin') . '/' . encode($row->id_perizinan)) . '" type="button" class="btn btn-sm btn-dark" title="Nota Dinas Bupati"><i class="la la-print font-small-3"></i></a> ';
                // ===================================================
                $btn_cetak_surat_kegiatan_hijau = '<a target="_blank" type="button" href="' . base_url('admin/cetakSuratIzinKegiatan/' . $status . '/hijau/' . encode($row->id_perizinan)) . '" class="btn btn-sm btn-success"  title="Zona Kuning Hijau"><i class="la la-print font-small-3"></i></a> ';
                $btn_cetak_surat_kegiatan_orange = '<a target="_blank" type="button" href="' . base_url('admin/cetakSuratIzinKegiatan/' . $status . '/orange/' . encode($row->id_perizinan)) . '" class="btn btn-sm btn-warning"  title="Zona Orange"><i class="la la-print font-small-3"></i></a> ';
                $btn_cetak_surat_kegiatan_tolak = '<a target="_blank" type="button" href="' . base_url('admin/cetakSuratIzinKegiatan/' . $status . '/zona/' . encode($row->id_perizinan)) . '" class="btn btn-sm btn-info"  title="Penolakan Permohonan"><i class="la la-print font-small-3"></i></a> ';
                // ====================================================
                $btn_cetak_surat_nikah = '<a target="_blank" type="button" href="' . base_url('admin/cetakSuratIzinNikah/' . $status . '/hijau/' . encode($row->id_perizinan)) . '" class="btn btn-sm btn-success"  title="Zona Kuning Hijau"><i class="la la-print font-small-3"></i></a> ';
                // ====================================================
                $btn_cetak_surat_keterangan_orange = '<a target="_blank" type="button" href="' . base_url('admin/cetakSuratKeterangan/' . $status . '/orange/' . encode($row->id_perizinan)) . '" class="btn btn-sm btn-warning"  title="Zona Orange"><i class="la la-print font-small-3"></i></a> ';
                $btn_cetak_surat_keterangan_kuning = '<a target="_blank" type="button" href="' . base_url('admin/cetakSuratKeterangan/' . $status . '/kuning/' . encode($row->id_perizinan)) . '" class="btn btn-sm btn-success"  title="Zona Kuning Hijau"><i class="la la-print font-small-3"></i></a> ';


                $btn .= $btn_cetak_nodin;
                if ($id_surat == '1') {
                    if ($status == 'diterima') {
                        $btn .= $btn_cetak_surat_keterangan_orange;
                        $btn .= $btn_cetak_surat_keterangan_kuning;
                    } else {
                        $btn .= $btn_cetak_surat_kegiatan_tolak;
                    }
                } else if ($id_surat == '2') {
                    if ($status == 'diterima') {
                        $btn .= $btn_cetak_surat_kegiatan_hijau;
                        $btn .= $btn_cetak_surat_kegiatan_orange;
                    } else {
                        $btn .= $btn_cetak_surat_kegiatan_tolak;
                    }
                } else {
                    if ($status == 'diterima') {
                        $btn .= $btn_cetak_surat_nikah;
                    } else {
                        $btn .= $btn_cetak_surat_kegiatan_tolak;
                    }
                }

                $columns = array(
                    $i,
                    $btn,
                    $row->no_pemohon,
                    $row->nomor_perizinan,
                    date('d/m/Y', strtotime($row->tgl_terbit)),
                    $row->nama_pemohon,
                    $row->alamat_pemohon . ', ' . ucwords(strtolower($row->nama_desa_pemohon)) . ', ' . ucwords(strtolower($row->nama_kecamatan_pemohon)),
                    $row->jabatan_pemohon,
                    $row->nama_usaha,
                    $row->alamat_usaha . ', ' . ucwords(strtolower($row->nama_desa_usaha)) . ', ' . ucwords(strtolower($row->nama_kecamatan_usaha)),
                );

                if ($status == 'ditolak') {
                    $columns[] = $row->kajian_perizinan;
                }

                $data[] = $columns;
            }
            $output = array(
                // "draw"			=>     intval($_POST["draw"]),  
                "draw"              =>     $_POST["draw"],
                "recordsTotal"      =>     $this->DataTablePerizinan->get_all_data($status),
                "recordsFiltered"   =>     $this->DataTablePerizinan->get_filtered_data($status),
                "data"              =>     $data
            );
            echo json_encode($output);
        }
    }

    // ============================================

    public function listSurat()
    {
        $this->head['css'][] = assets_url . "app-assets/css/plugins/animate/animate.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/css/tables/datatable/datatables.min.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/style-datepicker.css";
        $this->head['css'][] = assets_url . "app-assets/vendors/css/extensions/sweetalert.css";
        // ================================================================
        $this->foot['js'][] = assets_url . "app-assets/vendors/js/tables/datatable/datatables.min.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js";
        $this->foot['js'][] = assets_url . "app-assets/vendors/js/extensions/sweetalert.min.js";
        $this->foot['js'][] = base_url('assets/js/cetak_excel.js');
        // ================================================================
        $script[] = "$('.date-picker').datepicker({
                        autoclose: true,
                        todayHighlight: true,
                        format: 'dd/mm/yyyy'
                    });";
        // ================================================================
        $select = array(
            'dn.*',
            'pm.*',
            "(SELECT kec.nama_kecamatan FROM tbl_kecamatan kec WHERE kec.kode_kecamatan = pm.kode_kecamatan_usaha) nama_kecamatan_usaha",
            "(SELECT des.nama_desa FROM tbl_desa des WHERE des.kode_desa = pm.kode_desa_usaha) nama_desa_usaha",
        );
        $table  = 'tbl_dinkes dn';
        $join   = 'tbl_pemohon pm';
        $on     = "dn.id_pemohon = pm.id_pemohon";
        $method = 'left';
        $where  = "pm.status_pemohon = 'diproses'";
        $dataSurat = $this->MasterData->selectJoin($select, $table, $join, $on, $method, $where)->getResult();

        $this->foot['script'] = $script;
        $this->menu['active'] = '4';

        $cont = array(
            'dataSurat' => $dataSurat,
        );

        $data = array(
            'header' => $this->head,
            'menu'   => $this->menu,
            'konten' => 'data_surat',
            'footer' => $this->foot,
            'cont'   => $cont,
        );

        $this->template($data);
    }

    // ============================================

    public function cetakSuratIzinNikah($status = '', $zona = '', $id = '')
    {
        $id_perizinan = decode($id);
        if (!$id_perizinan) {
            return redirect()->to(base_url('admin'));
            exit();
        }
        if ($status == 'diterima') {
            if ($zona == 'hijau') {
                $this->queryCetakSurat($id_perizinan, "assets/surat/izin_nikah/", 'IZIN_PENYELENGGARAAN_NIKAH_ZONA_HIJAU_KUNING');
            }
        }
    }

    public function cetakSuratIzinKegiatan($status = '', $zona = '', $id = '')
    {
        $id_perizinan = decode($id);
        if (!$id_perizinan) {
            return redirect()->to(base_url('admin'));
            exit();
        }
        if ($status == 'diterima') {
            if ($zona == 'hijau') {
                $this->queryCetakSurat($id_perizinan, "assets/surat/izin_kegiatan/", 'IZIN_PENYELENGGARAAN_KEGIATAN_ZONA_KUNING_HIJAU');
            } else if ($zona == 'orange') {
                $this->queryCetakSurat($id_perizinan, "assets/surat/izin_kegiatan/", 'IZIN_PENYELENGGARAAN_KEGIATAN_ZONA_ORANGE');
            }
        } else {
            $this->queryCetakSurat($id_perizinan, "assets/surat/izin_kegiatan/", 'PENOLAKAN_IZIN_PENYELENGGARAAN_KEGIATAN');
        }
    }

    public function cetakSuratKeterangan($status = '', $zona = '', $id = '')
    {
        $id_perizinan = decode($id);
        if (!$id_perizinan) {
            return redirect()->to(base_url('admin'));
            exit();
        }
        if ($status == 'diterima') {
            if ($zona == 'kuning') {
                $this->queryCetakSurat($id_perizinan, "assets/surat/keterangan/", 'SUKET_ZONASI_KUNING_COVID');
            } else if ($zona == 'orange') {
                $this->queryCetakSurat($id_perizinan, "assets/surat/keterangan/", 'SUKET_ZONASI_ORANGE_COVID');
            }
        }
    }

    public function queryCetakSurat($id = '', $loc = '', $nama_file = '')
    {
        $select = array(
            'pm.no_pemohon',
            'pr.nomor_perizinan',
            'pr.tgl_terbit',
            'pr.kajian_perizinan',
            'pm.nama_pemohon',
            'pm.alamat_pemohon',
            "(SELECT kec.nama_kecamatan FROM tbl_kecamatan kec WHERE kec.kode_kecamatan = pm.kode_kecamatan_pemohon) kecamatan_pemohon",
            "(SELECT des.nama_desa FROM tbl_desa des WHERE des.kode_desa = pm.kode_desa_pemohon) desa_pemohon",
            'pm.jabatan_pemohon',
            'pm.nama_usaha',
            'pm.jml_peserta',
            'pm.tgl_pelaksanaan_mulai',
            'pm.tgl_pelaksanaan_akhir',
            'pm.alamat_usaha',
            "(SELECT kec.nama_kecamatan FROM tbl_kecamatan kec WHERE kec.kode_kecamatan = pm.kode_kecamatan_usaha) kecamatan_usaha",
            "(SELECT des.nama_desa FROM tbl_desa des WHERE des.kode_desa = pm.kode_desa_usaha) desa_usaha",
        );
        $table = 'tbl_perizinan pr';
        $join = 'tbl_pemohon pm';
        $on = "pr.id_pemohon = pm.id_pemohon";
        $method = 'left';
        $where = "id_perizinan = $id";
        $row = $this->MasterData->selectJoin($select, $table, $join, $on, $method, $where)->getRowArray();

        $document = file_get_contents(FCPATH . $loc . $nama_file . ".rtf");

        $document = str_replace("#TGL_TERBIT", formatTanggalTtd($row['tgl_terbit']), $document);
        $document = str_replace("#NOMOR_PERIZINAN", $row['nomor_perizinan'], $document);
        $document = str_replace("#NAMA_PEMOHON", $row['nama_pemohon'], $document);
        $document = str_replace("#ALAMAT_PEMOHON", $row['alamat_pemohon'] . ', ' . ucwords(strtolower($row['desa_pemohon'])) . ', ' . ucwords(strtolower($row['kecamatan_pemohon'])), $document);
        $document = str_replace("#JABATAN_PEMOHON", $row['jabatan_pemohon'], $document);
        $document = str_replace("#NAMA_USAHA", $row['nama_usaha'], $document);
        $document = str_replace("#ALAMAT_USAHA", $row['alamat_usaha'] . ', ' . ucwords(strtolower($row['desa_usaha'])) . ', ' . ucwords(strtolower($row['kecamatan_usaha'])), $document);
        $document = str_replace("#TGL_PELAKSANAAN", ($row['tgl_pelaksanaan_mulai'] == $row['tgl_pelaksanaan_akhir'] ? formatTanggalTtd($row['tgl_pelaksanaan_mulai']) : formatTanggalTtd($row['tgl_pelaksanaan_mulai']) . ' - ' . formatTanggalTtd($row['tgl_pelaksanaan_akhir'])), $document);
        $document = str_replace("#JML_PESERTA", $row['jml_peserta'], $document);
        $document = str_replace("#KAJIAN_PERIZINAN", $row['kajian_perizinan'], $document);
        $document = str_replace("#NAMA_KECAMATAN", ucwords(strtolower($row['kecamatan_usaha'])), $document);
        $document = str_replace("#NAMA_DESA", ucwords(strtolower($row['desa_usaha'])), $document);

        header("Content-type: application/msword");
        header("Content-disposition: inline; filename=" . $row['no_pemohon'] . "_" . $nama_file . ".doc");
        header("Content-length: " . strlen($document));
        echo $document;
    }

    public function cetakSuratDinkes($id = '')
    {
        $id_pemohon = decode($id);
        if (!$id_pemohon) {
            return redirect()->to(base_url('admin'));
            exit();
        }

        $select = array(
            'pm.no_pemohon',
            'pm.nama_pemohon',
            'pm.nama_usaha',
            'dn.*',
        );
        $table = 'tbl_dinkes dn';
        $join = 'tbl_pemohon pm';
        $on = "dn.id_pemohon = pm.id_pemohon";
        $method = 'left';
        $where = "dn.id_pemohon = $id_pemohon";
        $row = $this->MasterData->selectJoin($select, $table, $join, $on, $method, $where)->getRowArray();

        $document = file_get_contents(FCPATH . "assets/surat/SURAT_PERMOHONAN_KE_DINKES.rtf");

        $document = str_replace("#TGL_SURAT", formatTanggalTtd($row['tgl_dinkes']), $document);
        $document = str_replace("#NOM_DIN", $row['nomor_dinkes'], $document);
        $document = str_replace("#NAMA_PEMOHON", $row['nama_pemohon'], $document);
        $document = str_replace("#NAMA_KEGIATAN", $row['nama_usaha'], $document);
        $document = str_replace("#NO_URUT", $row['no_urut'], $document);

        // $this->response->setHeader('application/msword');

        $response = service('response');
        $response->setHeader("Content-type", "application/msword");
        $response->setHeader("Content-disposition", "inline; filename=" . $row['no_pemohon'] . "_SURAT_PERMOHONAN_KE_DINKES.doc");
        $response->setHeader("Content-length", strlen($document));
        // $response->send();
        echo $document;
    }

    public function cetakNodin($status = '', $jenis = '', $id = '')
    {
        $id_perizinan = decode($id);
        if (!$id_perizinan) {
            return redirect()->to(base_url('admin'));
            exit();
        }

        $select = array(
            'pr.nomor_perizinan',
            'pr.kajian_perizinan',
            'pm.nama_pemohon',
            'pm.no_pemohon',
            'pm.jabatan_pemohon',
            'pm.nama_usaha',
            'pm.alamat_usaha',
            "(SELECT kec.nama_kecamatan FROM tbl_kecamatan kec WHERE kec.kode_kecamatan = pm.kode_kecamatan_usaha) kecamatan_usaha",
            "(SELECT des.nama_desa FROM tbl_desa des WHERE des.kode_desa = pm.kode_desa_usaha) desa_usaha",
        );
        $table = 'tbl_perizinan pr';
        $join = 'tbl_pemohon pm';
        $on = "pr.id_pemohon = pm.id_pemohon";
        $method = 'left';
        $where = "id_perizinan = $id_perizinan";
        $row = $this->MasterData->selectJoin($select, $table, $join, $on, $method, $where)->getRowArray();

        if ($status == 'diterima') {
            if ($jenis == 'suket') {
                $document = file_get_contents(FCPATH . "assets/surat/nodin/NOTA_DINAS_BUPATI_SUKET_AMAN_COVID.rtf");
            } else {
                $document = file_get_contents(FCPATH . "assets/surat/nodin/NOTA_DINAS_BUPATI_SURAT_IZIN_PERSETUJUAN.rtf");
            }
        } else {
            if ($jenis == 'suket') {
                $document = file_get_contents(FCPATH . "assets/surat/nodin/NOTA_DINAS_BUPATI_SUKET_TIDAK_AMAN_COVID.rtf");
            } else {
                $document = file_get_contents(FCPATH . "assets/surat/nodin/NOTA_DINAS_BUPATI_SURAT_IZIN_PENOLAKAN.rtf");
            }
        }

        $document = str_replace("#TGL_NODIN", formatTanggalTtd(date('d-m-Y')), $document);
        $document = str_replace("#NOMOR_NODIN", "100/      /01.01/2020", $document);
        $document = str_replace("#NAMA_PEMOHON", $row['nama_pemohon'], $document);
        $document = str_replace("#JABATAN_PEMOHON", $row['jabatan_pemohon'], $document);
        $document = str_replace("#NAMA_USAHA", $row['nama_usaha'], $document);
        $document = str_replace("#KAJIAN_PERIZINAN", $row['kajian_perizinan'], $document);
        $document = str_replace("#ALAMAT_USAHA", $row['alamat_usaha'] . ', ' . ucwords(strtolower($row['desa_usaha'])) . ', ' . ucwords(strtolower($row['kecamatan_usaha'])), $document);

        $response = service('response');
        $response->setHeader("Content-type", "application/msword");
        if ($status == 'diterima') {
            if ($jenis == 'suket') {
                $response->setHeader("Content-disposition", "inline; filename=" . $row['no_pemohon'] . "_NOTA_DINAS_BUPATI_SUKET_AMAN_COVID.doc");
            } else {
                $response->setHeader("Content-disposition", "inline; filename=" . $row['no_pemohon'] . "_NOTA_DINAS_BUPATI_SURAT_IZIN_PERSETUJUAN.doc");
            }
        } else {
            if ($jenis == 'suket') {
                $response->setHeader("Content-disposition", "inline; filename=" . $row['no_pemohon'] . "_NOTA_DINAS_BUPATI_SUKET_TIDAK_AMAN_COVID.doc");
            } else {
                $response->setHeader("Content-disposition", "inline; filename=" . $row['no_pemohon'] . "_NOTA_DINAS_BUPATI_SURAT_IZIN_PENOLAKAN.doc");
            }
        }
        $response->setHeader("Content-length", strlen($document));
        echo $document;
    }

    // ===========================================

    public function cetakSuratPerizinan($status = '', $id = '', $link = '')
    {
        $id_perizinan = decode($id);
        $select = array(
            'pr.nomor_perizinan',
            'pr.tgl_terbit',
            'pr.kajian_perizinan',
            'pm.nama_pemohon',
            'pm.alamat_pemohon',
            "(SELECT kec.nama_kecamatan FROM tbl_kecamatan kec WHERE kec.kode_kecamatan = pm.kode_kecamatan_pemohon) kecamatan_pemohon",
            "(SELECT des.nama_desa FROM tbl_desa des WHERE des.kode_desa = pm.kode_desa_pemohon) desa_pemohon",
            'pm.jabatan_pemohon',
            'pm.nama_usaha',
            'pm.alamat_usaha',
            "(SELECT kec.nama_kecamatan FROM tbl_kecamatan kec WHERE kec.kode_kecamatan = pm.kode_kecamatan_usaha) kecamatan_usaha",
            "(SELECT des.nama_desa FROM tbl_desa des WHERE des.kode_desa = pm.kode_desa_usaha) desa_usaha",
        );
        $table = 'tbl_perizinan pr';
        $join = 'tbl_pemohon pm';
        $on = "pr.id_pemohon = pm.id_pemohon";
        $method = 'left';
        $where = "id_perizinan = $id_perizinan";
        $dt = $this->MasterData->selectJoin($select, $table, $join, $on, $method, $where)->getRowArray();
        $data = array(
            'data' => $dt,
            'link' => $link,
        );
        if ($status == 'diterima') {
            echo view('cetak/surat_perizinan', $data);
        } else {
            echo view('cetak/surat_penolakan', $data);
        }
    }

    // ============================================

    public function getDataDesa()
    {
        if ($this->request->getPost()) {
            $kode_kec = $this->request->getVar('kode_kecamatan');
            $where = "kode_kecamatan = '$kode_kec'";
            $data = $this->MasterData->getDataWhere('tbl_desa', $where)->getResult();
            if ($data) {
                $result = array(
                    'response' => true,
                    'data' => $data
                );
            } else {
                $result = array(
                    'response' => false
                );
            }
        } else {
            $result = array(
                'response' => false
            );
        }
        echo json_encode($result);
    }

    public function uploadFile()
    {
        echo view('upload_file');
    }

    public function prosesUpload()
    {
        if ($this->request->getPost()) {
            $this->load->helper('upload');
            $name_post = 'file_upload';
            $size_file = 2048;
            $overwrite = true;
            $allow     = '*';
            $path_file = 'assets/upload';
            $new_path = 'assets/upload/thumb';
            $width     = 250;
            $height    = 250;
            $x         = 100;
            $y         = 100;
            // $upload = upload_files($name_post, $size_file, $overwrite, $allow, $path_file);
            // $upload = upload_photo($name_post, $size_file, $overwrite, $path_file, $width, $height, TRUE, $new_path);
            $upload = upload_crop_photo($name_post, $size_file, $overwrite, $path_file, $width, $height, $x, $y);
            if ($upload['respons']) {
                echo "File " . $upload['data'] . " berhasil diupload.";
            } else {
                echo "Gaga diupload. <br>" . $upload['data'];
            }
        }
    }
}
