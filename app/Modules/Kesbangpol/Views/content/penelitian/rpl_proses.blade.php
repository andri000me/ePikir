@extends('template/master')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Permohonan Masuk</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('kesbangpol') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Permohonan Masuk</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    {{-- <button id="btn_eksekusi" class="btn btn-info btn-block round px-2" type="submit" disabled>
                        <i class="la la-check font-small-3"></i> Eksekusi Aset
                        <span class="badge badge-pill badge-glow badge-danger" style="float: right">0</span>
                    </button> --}}
                </div>

            </div>
            <div class="content-body">
                <section class="inputmask" id="inputmask">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Permohonan</h4>
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

                                        {!! show_alert() !!}

                                        @include('template.searchbar', ['table_name' => 'tbl_data_rpl'])

                                        <table id="tbl_data_rpl" class="table table-hover table-bordered table-striped"
                                            style="font-size: 8pt">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>#</th>
                                                    <th>Aksi</th>
                                                    <th>Lampiran</th>
                                                    <th>Nomor</th>
                                                    <th>Tgl Pengajuan</th>
                                                    <th>Nama</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Alamat</th>
                                                    <th>Lokasi</th>
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
@endsection

@push('modal')
    <div class="modal animated bounceInUp text-left" id="modal_detail" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div id="modal_header" class="modal-header bg-primary">
                    <h4 class="modal-title white" id="modal_title">Detail Permohonan Rekomendasi Penelitian</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    {{-- <span id="info_histori"></span> --}}
                    {{-- <hr> --}}
                    <table id="tbl_detail_rpl"
                        class="table table-hover table-bordered table-striped table-responsive d-lg-table">
                        <thead> </thead>
                    </table>

                    <div id="lampiran"> </div>
                </div>

                <div class="modal-footer">
                    <!-- <button type="button" id="btn_reset" class="btn btn-success waves-effect" onclick="tableToExcel('tbl_rincian', 'RincianBarangPengadaan', 'RincianBarangPengadaan.xls')">EXPORT (.XLS)</button> -->
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">KELUAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal animated bounceIn text-left" id="modal_confirm" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
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
                        Konfirmasi permohonan
                    </h2>
                    <br>
                    <div class="font-medium-3">
                        Apakah permohonan akan disetujui?
                        <input type="hidden" id="id_usr" name="id_usr">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" title="Batal">Batal
                    </button>
                    <button type="button" class="btn btn-danger" onclick="showConfirmTolakModal()"
                        title="Tolak">Tolak</button>
                    <button type="button" class="btn btn-info" onclick="terimaPermohonan()" title="Disetujui">Ya,
                        Disetujui</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="modal_tolak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h4 class="modal-title white" id="myModalLabel10">Tolak Permohonan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h5>Kajian Penolakan
                            <span class="required text-danger">*</span>
                        </h5>
                        <div class="controls">
                            <textarea name="message" id="message" class="form-control" required=""
                                placeholder="Isi kajian pernolakan permohonan" rows="5"></textarea>
                        </div>
                    </div>
                    <input type="hidden" id="id_usr" name="id_usr">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" title="Batal">Batal
                    </button>
                    <button type="button" class="btn btn-info" onclick="tolakPermohonan()" title="Kirim">Kirim</button>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('css_plugin')
    <link rel="stylesheet" type="text/css"
        href="{{ assets_url . 'app-assets/vendors/css/tables/datatable/datatables.min.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}">
@endpush

@push('css_style')
    <style>
        .no-wrap {
            white-space: nowrap;
        }

    </style>
@endpush

@push('js_plugin')
    <script src="{{ assets_url . 'app-assets/vendors/js/tables/datatable/datatables.min.js' }}" type="text/javascript">
    </script>
    <script src="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}" type="text/javascript"></script>
    <script src="{{ base_url('assets/js/get_data_rpl.js') }}" type="text/javascript"></script>
    <script src="{{ base_url('assets/js/delete_data.js') }}" type="text/javascript"></script>
@endpush

@push('js_script')
    <script>
        showDataTable("{{ base_url('kesbangpol/penelitian/getdata/' . $status . '/tbl_data_rpl') }}");
    </script>

    <script>
        function showDetailModal(data) {
            var id = $(data).data().id;
            var nama = $(data).data().nama;
            var pekerjaan = $(data).data().pekerjaan;
            var alamat = $(data).data().alamat;
            var hp = $(data).data().hp;
            var email = $(data).data().email;
            var norpl = $(data).data().norpl;
            var penanggung = $(data).data().penanggung;
            var lokasi = $(data).data().lokasi;
            var tujuan = $(data).data().tujuan;
            var file = $(data).data().file;
            var mulai = $(data).data().mulai;
            var akhir = $(data).data().akhir;
            var pengajuan = $(data).data().pengajuan;

            var tglpelaksana = mulai + " - " + akhir;
            if (mulai == akhir) {
                var tglpelaksana = mulai;
            }

            var list = "<tr> <th> Nomor </th> <td>" + norpl + "</td> </tr>" +
                "<tr> <th> Nama Lengkap </th> <td>" + nama + "</td> </tr>" +
                "<tr> <th> Pekerjaan </th> <td>" + pekerjaan + "</td> </tr>" +
                "<tr> <th> Alamat </th> <td>" + alamat + "</td> </tr>" +
                "<tr> <th> Nomor HP </th> <td>" + hp + "</td> </tr>" +
                "<tr> <th> Email </th> <td>" + email + "</td> </tr>" +
                "<tr> <th> Penanggung Jawab </th> <td>" + penanggung + "</td> </tr>" +
                "<tr> <th> Lokasi Penelitian</th> <td>" + lokasi + "</td> </tr>" +
                "<tr> <th> Tujuan Penelitian </th> <td>" + tujuan + "</td> </tr>" +
                "<tr> <th> Tanggal Pelaksanaan </th> <td>" + tglpelaksana + "</td> </tr>" +
                "<tr> <th> Waktu Pengajuan </th> <td>" + pengajuan + "</td> </tr>";

            // var lampiran = '<iframe src="{{ base_url('upload/permohonan/rpl') }}/' + file +
            //     '" style = "width:100%; height:80vh;" frameborder = "0" > < /iframe>';

            var embed =
                '<iframe src="https://docs.google.com/gview?url={{ base_url('upload/permohonan/rpl') }}/' + file +
                '&embedded=true" style = "width:100%; height:80vh;"></iframe>';

            $('#modal_detail #tbl_detail_rpl thead').html(list);
            $('#modal_detail #lampiran').html(embed);
            $('#modal_detail').modal({
                backdrop: 'static',
                keyboard: false
            });

        }
    </script>

    <script>
        function showConfirmModal(data) {
            var id = $(data).data().id;
            $('#modal_confirm #id_usr').val(id);
            $('#modal_confirm').modal('show');
        }

        function showConfirmTolakModal() {
            $('#modal_confirm').modal('hide');
            var id = $('#modal_confirm #id_usr').val();
            $('#modal_tolak #message').val('');
            $('#modal_tolak #id_usr').val(id);
            $('#modal_tolak').modal('show');
        }

        function terimaPermohonan() {
            var id = $('#modal_confirm #id_usr').val();
            $(".loading-page").show();
            $('#modal_confirm').modal('hide');
            $.get("{{ base_url('kesbangpol/penelitian/setuju') }}/" + id,
                function(dt) {
                    var data = JSON.parse(dt);
                    $(".loading-page").hide();

                    if (data.respons) {
                        swal({
                            title: "Sukses!",
                            text: data.alert,
                            icon: 'success',
                            timer: 2000
                        }).then(function() {
                            $('#tbl_data_rpl').DataTable().ajax.reload(null,
                                false); //posisi paginantion tetap sesuai yang dibuka
                        });
                    } else {
                        swal({
                            title: "Gagal!",
                            text: data.alert,
                            icon: "error",
                            timer: 2000
                        }).then(function() {
                            $('#tbl_data_rpl').DataTable().ajax.reload(null,
                                false); //posisi paginantion tetap sesuai yang dibuka
                        });
                    }
                }
            );
        }

        function tolakPermohonan() {
            var id = $('#modal_tolak #id_usr').val();
            var msg = $('#modal_tolak #message').val();
            $(".loading-page").show();
            $('#modal_tolak').modal('hide');
            $.post("{{ base_url('kesbangpol/penelitian/tolak') }}/" + id, {
                    message: msg
                },
                function(dt) {
                    var data = JSON.parse(dt);
                    $(".loading-page").hide();

                    if (data.respons) {
                        swal({
                            title: "Sukses!",
                            text: data.alert,
                            icon: 'success',
                            timer: 2000
                        }).then(function() {
                            $('#tbl_data_rpl').DataTable().ajax.reload(null,
                                false); //posisi paginantion tetap sesuai yang dibuka
                        });
                    } else {
                        swal({
                            title: "Gagal!",
                            text: data.alert,
                            icon: "error",
                            timer: 2000
                        }).then(function() {
                            $('#tbl_data_rpl').DataTable().ajax.reload(null,
                                false); //posisi paginantion tetap sesuai yang dibuka
                        });
                    }
                }
            );
        }
    </script>

@endpush
