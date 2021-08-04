<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">List Surat ke Dinkes</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">List Surat</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="float-md-right">
                    <button class="btn btn-success round px-2" type="button" aria-haspopup="true" aria-expanded="false" onclick="tableToExcel('datasurat', 'DataSurat', 'listSuratKeDinkes.xls')"><i class="la la-file-excel-o"></i> Export ke Excel</button>
                </div>
            </div>

        </div>
        <div class="content-body mt-2">
            <section class="inputmask" id="inputmask">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daftar Surat</h4>
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
                                <div class="card-body table-responsive">

                                    <style>
                                        .no-wrap {
                                            white-space: nowrap;
                                        }
                                    </style>

                                    <table id="datasurat" class="table table-hover table-bordered table-striped" style="font-size:small">
                                        <thead>
                                            <tr style="text-align: center; background-color:#212121; color:white; height: 40px">
                                                <th>NO</th>
                                                <th>NO SURAT PEMOHON</th>
                                                <th width="200">NAMA PEMOHON</th>
                                                <th>ALAMAT</th>
                                                <th>KEGIATAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            if ($dataSurat) {
                                                foreach ($dataSurat as $val) {
                                                    $no++; ?>
                                                    <tr title="Nomor Permohonan: <?= $val->no_pemohon ?>">
                                                        <td align="center" valign="top"><?= $no ?></td>
                                                        <td align="center" valign="top"><?= $val->nomor_dinkes ?></td>
                                                        <td valign="top"><?= ucwords($val->nama_pemohon) ?></td>
                                                        <td valign="top"><?= ucfirst($val->alamat_pemohon) . ', ' . ucwords(strtolower($val->nama_desa_usaha)) . ', ' . ucwords(strtolower($val->nama_kecamatan_usaha)) ?></td>
                                                        <td valign="top"><?= ucfirst($val->nama_usaha) ?></td>
                                                    </tr>
                                                <?php
                                                }
                                            } else { ?>
                                                <tr>
                                                    <th colspan="5" class="text-center">Belum ada daftar surat yang siap dikirim ke Dinkes</th>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
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