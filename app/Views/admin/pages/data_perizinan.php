<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">List Perizinan (<?= ucwords($status) ?>)</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">List Perizinan</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="dropdown float-md-right">
          <button class="btn btn-danger dropdown-toggle round px-2" id="dropdownBreadcrumbButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Status</button>
          <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton">
            <a class="dropdown-item text-center" href="<?= base_url('admin/perizinan/diterima/' . encode($id_surat)) ?>">Diterima</a>
            <a class="dropdown-item text-center" href="<?= base_url('admin/perizinan/ditolak/' . encode($id_surat)) ?>">Ditolak</a>
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
                <h4 class="card-title">Daftar Perizinan</h4>
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
                <?= show_alert() ?>
                <div class="card-body">

                  <style>
                    .no-wrap {
                      white-space: nowrap;
                    }
                  </style>

                  <?= formSearch('dataperizinan') ?>

                  <table id="dataperizinan" class="table table-hover table-bordered table-striped" style="font-size:small">
                    <thead>
                      <tr style="text-align: center;">
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Nomor</th>
                        <th>No. Surat</th>
                        <th>Tgl Terbit</th>
                        <th>Nama Pemohon</th>
                        <th>Alamat Pemohon</th>
                        <th>Jabatan</th>
                        <th>Nama Usaha</th>
                        <th>Tempat Usaha</th>
                        <?= ($status == 'ditolak' ? '<th>Kajian Penolakan</th>' : '') ?>
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