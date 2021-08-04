<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Tambah Permohonan</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="row breadcrumbs-top d-inline-block float-md-right">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Permohonan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body mt-2">
            <section class="inputmask" id="inputmask">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Input</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <!-- <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li> -->
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?= show_alert() ?>

                                    <form id="formPemohon" class="form-horizontal" method="POST" action="<?= base_url('admin/simpanPemohon') ?>">
                                        <?= token_csrf() ?>
                                        <input type="hidden" id="id_surat" name="id_surat" value="<?= encode($id_surat) ?>">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12">

                                                <div class="form-group">
                                                    <h5>Nomor Permohonan</h5>
                                                    <div class="controls">
                                                        <input type="text" id="no_pemohon" name="no_pemohon" class="form-control" placeholder="Isi nomor permohonan" required value="<?= $no_pemohon ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5>Nama Pemohon
                                                        <span class="required text-danger">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" id="nama_pemohon" name="nama_pemohon" class="form-control" placeholder="Isi nama pemohon" required>
                                                    </div>
                                                </div>

                                                <div id="almt_pemohon">
                                                    <div class="form-group">
                                                        <h5>Kecamatan Pemohon
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select id="kode_kecamatan" name="kode_kecamatan_pemohon" class="form-control select2" required onchange="getDesa(this)">
                                                                <option value="" hidden>Pilih Kecamatan</option>
                                                                <?php
                                                                foreach ($dataKec as $kec) {
                                                                ?>
                                                                    <option value="<?= $kec->kode_kecamatan ?>"><?= $kec->nama_kecamatan ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div style="z-index: 20; margin-top: -50px; margin-bottom: -25px; text-align: center; display: none" id="loading-desa">
                                                        <img src="<?= base_url() . '/assets/img/loading/loading1.gif' ?>" width="100">
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Desa Pemohon
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select id="kode_desa" name="kode_desa_pemohon" class="form-control select2" required>
                                                                <option value="" hidden>Pilih Desa</option>
                                                                <option value="" disabled>Pilih kecamatan dahulu</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Alamat Pemohon
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <textarea name="alamat_pemohon" id="alamat_pemohon" class="form-control" required placeholder="Isi alamat pemohon" rows="1"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5>Jabatan
                                                        <span class="required text-danger">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" id="jabatan_pemohon" name="jabatan_pemohon" placeholder="Isi jabatan pemohon" class="form-control" required>
                                                    </div>
                                                </div>

                                                <?php
                                                if ($id_surat == '1' || $id_surat == '3') {
                                                ?>
                                                    <div class="form-group">
                                                        <h5>Tanggal Pengajuan
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" id="tgl_pengajuan" name="tgl_pengajuan" class="form-control date-picker" autocomplete="off" required placeholder="DD/MM/YYYY" value="<?= date('d/m/Y') ?>">
                                                        </div>
                                                    </div>
                                                <?php
                                                } ?>
                                            </div>

                                            <div class="col-xl-6 col-lg-12">

                                                <div class="form-group">
                                                    <h5>Nama Kegiatan/Usaha
                                                        <span class="required text-danger">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <input type="text" id="nama_usaha" name="nama_usaha" class="form-control" placeholder="Isi nama kegiatan/usaha pemohon" required>
                                                    </div>
                                                </div>

                                                <?php
                                                if ($id_surat == '2') {
                                                ?>
                                                    <div class="form-group">
                                                        <h5>Tanggal Pengajuan
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" id="tgl_pengajuan" name="tgl_pengajuan" class="form-control date-picker" autocomplete="off" required placeholder="DD/MM/YYYY" value="<?= date('d/m/Y') ?>">
                                                        </div>
                                                    </div>
                                                <?php
                                                } ?>

                                                <?php
                                                if ($id_surat == '1' || $id_surat == '3') {
                                                ?>

                                                    <div class="form-group">
                                                        <h5>Tanggal Pelaksanaan
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <!-- <div class="controls">
                                                            <input type="text" id="tgl_pelaksanaan" name="tgl_pelaksanaan" class="form-control date-picker" autocomplete="off" required placeholder="DD/MM/YYYY" value="<?= date('d/m/Y') ?>">
                                                        </div> -->
                                                        <div class="input-daterange input-group date-range">
                                                            <input type="text" class="form-control" id="tgl_pelaksanaan_mulai" name="tgl_pelaksanaan_mulai" required placeholder="DD/MM/YYYY" value="<?= date('d/m/Y') ?>" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text bg-info b-0 text-white">SAMPAI</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="DD/MM/YYYY" value="<?= date('d/m/Y') ?>" id="tgl_pelaksanaan_akhir" name="tgl_pelaksanaan_akhir" required />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Jumlah Peserta
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" onkeypress="return inputAngka(event);" id="jml_peserta" name="jml_peserta" class="form-control" maxlength="6" placeholder="Isi jumlah peserta" required>
                                                        </div>
                                                    </div>

                                                <?php
                                                } ?>

                                                <hr>

                                                <div class="form-group custom-control custom-checkbox">
                                                    <div class="controls">
                                                        <input type="checkbox" class="custom-control-input" name="cek_alamat" id="cek_alamat" value="true">
                                                        <label class="custom-control-label" for="cek_alamat">Gunakan alamat pemohon</label>
                                                    </div>
                                                </div>

                                                <div id="almt_usaha">
                                                    <div class="form-group">
                                                        <h5>Kecamatan Kegiatan/Usaha
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select id="kode_kecamatan" name="kode_kecamatan_usaha" class="form-control select2" required onchange="getDesa(this)">
                                                                <option value="" hidden>Pilih Kecamatan</option>
                                                                <?php
                                                                foreach ($dataKec as $kec) {
                                                                ?>
                                                                    <option value="<?= $kec->kode_kecamatan ?>"><?= $kec->nama_kecamatan ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div style="z-index: 20; margin-top: -50px; margin-bottom: -25px; text-align: center; display: none" id="loading-desa">
                                                        <img src="<?= base_url() . '/assets/img/loading/loading1.gif' ?>" width="100">
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Desa Kegiatan/Usaha
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select id="kode_desa" name="kode_desa_usaha" class="form-control select2" required>
                                                                <option value="" hidden>Pilih Desa</option>
                                                                <option value="" disabled>Pilih kecamatan dahulu</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Alamat Kegiatan/Usaha
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <textarea name="alamat_usaha" id="alamat_usaha" class="form-control" required="" placeholder="Isi alamat tempat kegiatan/usaha" rows="1"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-danger btn-block pull-right" onclick="resetForm('formPemohon')">
                                                            <i class="la la-rotate-left"></i> Reset
                                                        </button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-info btn-block pull-right">
                                                            <i class="la la-save"></i> Simpan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    $("#cek_alamat").change(function() {
        var cek = $('#cek_alamat').is(":checked");
        if (cek) {
            $('#almt_usaha #kode_kecamatan').attr('disabled', true);
            $('#almt_usaha #kode_desa').attr('disabled', true);
            $('#almt_usaha #alamat_usaha').attr('disabled', true);

            $('#almt_usaha #kode_kecamatan').removeAttr('required');
            $('#almt_usaha #kode_desa').removeAttr('required');
            $('#almt_usaha #alamat_usaha').removeAttr('required');
        } else {
            $('#almt_usaha #kode_kecamatan').attr('disabled', false);
            $('#almt_usaha #kode_desa').attr('disabled', false);
            $('#almt_usaha #alamat_usaha').attr('disabled', false);

            $('#almt_usaha #kode_kecamatan').attr('required', '');
            $('#almt_usaha #kode_desa').attr('required', '');
            $('#almt_usaha #alamat_usaha').attr('required', '');
        }
    });

    function resetForm(id = '') {
        $('#' + id).trigger("reset");

        $('#almt_pemohon #kode_kecamatan').val('').change();
        $('#almt_pemohon #kode_desa').html('<option value="" hidden>Pilih Desa</option><option value="" disabled>Pilih kecamatan dahulu</option>');
        $('#almt_pemohon #kode_desa').val('').change();

        $('#almt_usaha #kode_kecamatan').val('').change();
        $('#almt_usaha #kode_desa').html('<option value="" hidden>Pilih Desa</option><option value="" disabled>Pilih kecamatan dahulu</option>');
        $('#almt_usaha #kode_desa').val('').change();

        $('#almt_usaha #kode_kecamatan').attr('disabled', false);
        $('#almt_usaha #kode_desa').attr('disabled', false);
        $('#almt_usaha #alamat_usaha').attr('disabled', false);

        $('#almt_usaha #kode_kecamatan').attr('required', '');
        $('#almt_usaha #kode_desa').attr('required', '');
        $('#almt_usaha #alamat_usaha').attr('required', '');


    }
</script>