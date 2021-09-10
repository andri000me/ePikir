@extends('template/master')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Permohonan Izin Penelitian</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ base_url('dpmptsp') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Permohonan Izin Penelitian</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-4 col-12">
                    <div class="dropdown float-md-right">
                        <button
                            class="btn btn-{{ $status == 3 ? 'success' : ($status == 4 ? 'danger' : 'primary') }} btn-block dropdown-toggle round px-2"
                            id="dropdownBreadcrumbButton" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">{{ $info_status }}</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton">
                            <a class="dropdown-item text-center"
                                href="{{ base_url('dpmptsp/penelitian/selesai?status=3') }}">Disetujui</a>
                            <a class="dropdown-item text-center"
                                href="{{ base_url('dpmptsp/penelitian/selesai?status=4') }}">Ditolak</a>
                            <a class="dropdown-item text-center"
                                href="{{ base_url('dpmptsp/penelitian/selesai?status=5') }}">Semua</a>
                        </div>
                    </div>
                </div>

                {{-- <div class="content-header-right col-md-2 col-12 mb-2">
                    <button id="btn_eksekusi" class="btn btn-info btn-block round px-2" type="submit" disabled>
                        <i class="la la-check font-small-3"></i> Eksekusi Aset
                        <span class="badge badge-pill badge-glow badge-danger" style="float: right">0</span>
                    </button>
                </div> --}}

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
                                            {{-- <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li> --}}
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
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
                                                    <th class="text-center">Aksi</th>
                                                    <th>Lampiran</th>
                                                    <th>Nomor</th>
                                                    @if ($status == 5)
                                                        <th>Status</th>
                                                    @endif
                                                    <th>Tgl Pengajuan</th>
                                                    <th>Nama</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Alamat</th>
                                                    <th>Lokasi</th>
                                                    <th>Judul</th>
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
    <div class="modal fade text-left" id="modal_cetak" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h4 class="modal-title white" id="myModalLabel10">Cetak Surat Keterangan Penelitian</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h5>Pejabat yang menandatangani
                            <span class="required text-danger">*</span>
                        </h5>
                        <input type="hidden" id="id_rpl" name="id_rpl">
                        <div class="controls">
                            <select id="id_petugas" name="id_petugas" class="form-control select2">
                                @foreach ($petugas as $item)
                                    <option value="{{ encode($item->id_petugas) }}">{{ $item->nama_petugas }} -
                                        {{ $item->jabatan_petugas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Tanggal Surat
                            <span class="required text-danger">*</span>
                        </h5>
                        <div class="controls">
                            <input type="text" id="tgl_surat" name="tgl_surat" class="form-control date-picker"
                                autocomplete="off" required placeholder="DD-MM-YYYY" value="{{ date('d-m-Y') }}">
                        </div>
                    </div>
                    <input type="hidden" id="id_usr" name="id_usr">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" title="Batal">Batal
                    </button>
                    <button type="button" class="btn btn-info" onclick="cetakSuratRpl()" title="Export">Export to
                        Word</button>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('css_plugin')
    <link rel="stylesheet" type="text/css"
        href="{{ assets_url . 'app-assets/vendors/css/tables/datatable/datatables.min.css' }}">
    <link rel="stylesheet" type="text/css"
        href="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}">

    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/css/forms/selects/select2.min.css' }}">
    <link rel="stylesheet"
        href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/style-datepicker.css' }}">
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
    <script src="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}" type="text/javascript">
    </script>
    <script src="{{ assets_url . 'app-assets/vendors/js/forms/select/select2.full.min.js' }}"></script>
    <script src="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js' }}"></script>
    <script src="{{ base_url('assets/js/get_data_rpl.js') }}" type="text/javascript"></script>
    <script src="{{ base_url('assets/js/delete_data.js') }}" type="text/javascript"></script>
@endpush

@push('js_script')
    <script>
        showDataTable("{{ base_url('dpmptsp/penelitian/getdata/' . $status . '/tbl_data_rpl') }}",
            "{{ $status }}");
    </script>

    <script>
        $(".select2").select2();
    </script>

    <script>
        $('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd-mm-yyyy'
        });
    </script>

    <script>
        function showModalCetak(data) {
            var id = $(data).data().id;
            $('#modal_cetak #id_rpl').val(id);
            $('#modal_cetak').modal({
                backdrop: 'static',
                keyboard: false
            });
        }

        function cetakSuratRpl() {
            var id = $('#modal_cetak #id_rpl').val();
            var idp = $('#modal_cetak #id_petugas').val();
            var tgl = $('#modal_cetak #tgl_surat').val();
            window.open("{{ base_url('dpmptsp/penelitian/cetak') }}?id=" + id + "&&idp=" + idp + "&&tgl=" + tgl);
            $('#modal_cetak').modal('hide');
        }
    </script>
@endpush

@include('content.penelitian.modal_detail')
