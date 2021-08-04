<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">List Permohonan (<?= ucwords($status) ?>)</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">List Permohonan</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">
          <button class="btn btn-danger dropdown-toggle round px-2" id="dropdownBreadcrumbButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Status</button>
          <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton">
            <a class="dropdown-item text-center" href="<?= base_url('admin/dataPemohon/diajukan/' . encode($id_surat)) ?>">Diajukan</a>
            <a class="dropdown-item text-center" href="<?= base_url('admin/dataPemohon/diproses/' . encode($id_surat)) ?>">Diproses</a>
            <a class="dropdown-item text-center" href="<?= base_url('admin/dataPemohon/selesai/' . encode($id_surat)) ?>">Selesai</a>
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
                <h4 class="card-title">Daftar Permohonan</h4>
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
                  <style>
                    .no-wrap {
                      white-space: nowrap;
                    }
                  </style>

                  <?= formSearch('datapemohon') ?>

                  <table id="datapemohon" class="table table-hover table-bordered table-striped" style="font-size:small">
                    <thead>
                      <tr>
                        <!-- <th><input type="checkbox" id="checkall"/></th> -->
                        <th>No</th>
                        <th nowrap>Aksi</th>
                        <th>Nomor</th>
                        <th>Tgl Pengajuan</th>
                        <th>Nama Pemohon</th>
                        <th>Alamat Pemohon</th>
                        <th>Jabatan</th>
                        <th>Nama Kegiatan/Usaha</th>
                        <?php
                        if ($id_surat != '2') {
                        ?>
                          <th>Tgl Pelaksanaan</th>
                          <th>Jml Peserta</th>
                        <?php } ?>
                        <th>Tempat Kegiatan/Usaha</th>
                      </tr>
                    </thead>

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<div class="modal animated bounceIn text-left" id="confirm_proses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h4 class="modal-title white" id="myModalLabel10">Proses Permohonan</h4> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <i class="la la-warning warning" style="font-size: 70pt;"></i>
        <h2 style="font-weight: bold;">
          Proses Lanjutan Permohonan
        </h2>
        <br>
        <div class="font-medium-3">
          Apakah permohonan akan diterima?
          <input type="hidden" id="id_pemohon" name="id_pemohon">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="tolakPermohonan()"><i class="la la-close"></i> Tidak</button>
        <button type="button" class="btn btn-info" onclick="terimaPermohonan()"><i class="la la-check"></i> Ya</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade text-left" id="terima_permohonan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info white">
        <h4 class="modal-title white" id="myModalLabel10">Terima Permohonan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formPerizinan" action="<?= base_url('admin/terimaPemohon') ?>" method="POST">
        <div class="modal-body">
          <?= token_csrf() ?>
          <input type="hidden" value="" id="id_pemohon" name="id_pemohon">
          <input type="hidden" id="id_surat" name="id_surat" value="<?= encode($id_surat) ?>">
          <div class="form-group">
            <h5>Tanggal Terbit Surat
              <span class="required text-danger">*</span>
            </h5>
            <div class="controls">
              <input type="text" id="tgl_terbit" name="tgl_terbit" class="form-control date-picker" autocomplete="off" required placeholder="DD/MM/YYYY" value="<?= date('d/m/Y') ?>">
            </div>
          </div>

          <div class="form-group">
            <h5>Nomor Surat
              <span class="required text-danger">*</span>
            </h5>
            <div class="controls">
              <input type="text" id="nomor_perizinan" name="nomor_perizinan" class="form-control" autocomplete="off" required placeholder="Isi nomor surat" value="100/     /01.01/2020">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-outline-info">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade text-left" id="tolak_permohonan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger white">
        <h4 class="modal-title white" id="myModalLabel10">Tolak Permohonan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formPenolakan" action="<?= base_url('admin/tolakPemohon') ?>" method="POST">
        <div class="modal-body">
          <?= token_csrf() ?>
          <input type="hidden" value="" id="id_pemohon" name="id_pemohon">
          <input type="hidden" id="id_surat" name="id_surat" value="<?= encode($id_surat) ?>">
          <div class="form-group">
            <h5>Tanggal Terbit Surat
              <span class="required text-danger">*</span>
            </h5>
            <div class="controls">
              <input type="text" id="tgl_terbit" name="tgl_terbit" class="form-control date-picker" autocomplete="off" required placeholder="DD/MM/YYYY" value="<?= date('d/m/Y') ?>">
            </div>
          </div>

          <div class="form-group">
            <h5>Nomor Surat
              <span class="required text-danger">*</span>
            </h5>
            <div class="controls">
              <input type="text" id="nomor_perizinan" name="nomor_perizinan" class="form-control" autocomplete="off" required placeholder="Isi nomor surat" value="100/     /01.01/2020">
            </div>
          </div>

          <div class="form-group">
            <h5>Kajian Penolakan
              <span class="required text-danger">*</span>
            </h5>
            <div class="controls">
              <textarea name="kajian_perizinan" id="kajian_perizinan" class="form-control" required="" placeholder="Isi kajian pernolakan permohonan" rows="5"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-outline-danger">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal animated bounceIn text-left" id="proses_permohonan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h4 class="modal-title white" id="myModalLabel10">Proses Permohonan</h4> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <i class="la la-warning warning" style="font-size: 70pt;"></i>
        <h2 style="font-weight: bold;">
          Proses Permohonan
        </h2>
        <br>
        <div class="font-medium-3">
          Status permohonan akan menjadi diproses.<br>Kemudian cetak surat permohonan ke Dinkes.
          <input type="hidden" id="id_pemohon" name="id_pemohon">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="la la-close"></i></button>
        <button type="button" class="btn btn-info" onclick="teruskanPermohonan()"><i class="la la-check"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="modal animated bounceIn text-left" id="cetak_nodin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h4 class="modal-title white" id="myModalLabel10">Proses Permohonan</h4> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <i class="la la-warning warning" style="font-size: 70pt;"></i>
        <h2 style="font-weight: bold;">
          Cetak Nota Dinas Bupati
        </h2>
        <br>
        <div class="font-medium-3">
          Pilih sesuai yang akan diajukan
          <input type="hidden" id="id_pemohon" name="id_pemohon">
          <input type="hidden" id="jenis" name="jenis">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="cetakNodinDitolak()">Ditolak</button>
        <button type="button" class="btn btn-info" onclick="cetakNodinDiterima()">Diterima</button>
      </div>
    </div>
  </div>
</div>

<script>
  function prosesPermohonan(data) {
    var id = $(data).data().id;
    $('#proses_permohonan #id_pemohon').val(id);
    $('#proses_permohonan').modal('show');
  }

  function teruskanPermohonan() {
    var id = $('#proses_permohonan #id_pemohon').val();
    window.location.href = "<?= base_url('admin/prosesPemohon') ?>/" + id + "/<?= encode($id_surat) ?>";
  }
</script>

<script>
  function prosesPermohonanLast(data) {
    var id = $(data).data().id;
    $('#confirm_proses #id_pemohon').val(id);
    $('#confirm_proses').modal('show');
  }

  function terimaPermohonan() {
    $('#confirm_proses').modal('hide');
    var id = $('#confirm_proses #id_pemohon').val();
    $('#terima_permohonan #formPerizinan').trigger('reset');
    $('#terima_permohonan #formPerizinan #id_pemohon').val(id);
    $('#terima_permohonan').modal('show');
  }

  function tolakPermohonan() {
    $('#confirm_proses').modal('hide');
    var id = $('#confirm_proses #id_pemohon').val();
    $('#tolak_permohonan #formPenolakan').trigger('reset');
    $('#tolak_permohonan #formPenolakan #id_pemohon').val(id);
    $('#tolak_permohonan').modal('show');
  }
</script>

<script>
  function cetakSuratDinkes(data) {
    var id = $(data).data().id;
    window.open("<?= base_url('admin/cetakSuratDinkes') ?>/" + id);
  }

  function cetakNodin(data) {
    var id = $(data).data().id;
    var jenis = $(data).data().jenis;
    $('#cetak_nodin #id_pemohon').val(id);
    $('#cetak_nodin #jenis').val(jenis);
    $('#cetak_nodin').modal('show');
  }

  function cetakNodinDiterima() {
    $('#cetak_nodin').modal('hide');
    var id = $('#cetak_nodin #id_pemohon').val();
    var jenis = $('#cetak_nodin #jenis').val();
    window.open("<?= base_url('admin/cetakNodin/diterima') ?>/" + jenis + "/" + id);
  }

  function cetakNodinDitolak() {
    $('#cetak_nodin').modal('hide');
    var id = $('#cetak_nodin #id_pemohon').val();
    var jenis = $('#cetak_nodin #jenis').val();
    window.open("<?= base_url('admin/cetakNodin/ditolak') ?>/" + jenis + "/" + id);
  }
</script>