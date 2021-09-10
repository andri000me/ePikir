@extends('template/master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Berita/Artikel</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                                <li class="breadcrumb-item active">Berita/Artikel</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-3 col-12 mb-2">
                    <a href="{{ base_url('bappeda/publikasi/berita/add') }}" class="btn btn-block btn-info"><i
                            class="la la-plus"></i> Tambah Data</a>
                </div>

            </div>
            <div class="content-body">

                {!! show_alert() !!}

                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List Berita</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered table-responsive" id="list_tbl">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>#</th>
                                                    <th>Aksi</th>
                                                    <th>Aktif</th>
                                                    <th>Kategori</th>
                                                    <th>Judul Berita</th>
                                                    <th>Isi Berita</th>
                                                    <th>Gambar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($berita as $key => $val)
                                                    <tr>
                                                        <td align="center">{{ $key + 1 }}</td>
                                                        <td nowrap align="center">
                                                            <button type="button" onclick="showModal(this)"
                                                                data-kategori="{{ $val->nama_kategori }}"
                                                                data-judul="{{ $val->judul_berita }}"
                                                                data-isi="{{ $val->isi_berita }}"
                                                                data-foto="{{ $val->file_foto }}"
                                                                class="btn btn-sm btn-primary" title="Lihat Detail"><i
                                                                    class="la la-eye font-small-3"></i></button>
                                                            <a href="{{ base_url('bappeda/publikasi/berita/edit/' . encode($val->id_berita)) }}"
                                                                class="btn btn-info btn-sm" title="Update Data"><i
                                                                    class="la la-pencil-square-o font-small-3"></i></a>
                                                            <button type="button" onclick="hapusData(this, true)"
                                                                data-link="{{ base_url('bappeda/publikasi/berita/delete/' . encode($val->id_berita)) }}"
                                                                class="btn btn-sm btn-danger" title="Hapus Data"><i
                                                                    class="la la-trash-o font-small-3"></i></button>

                                                        </td>
                                                        <td>
                                                            <input type="checkbox" class="switch" id="check_active"
                                                                data-group-cls="btn-group-sm"
                                                                data-id="{{ encode($val->id_berita) }}"
                                                                onchange="changeActive(this)"
                                                                {{ $val->active == 1 ? 'checked' : '' }} />
                                                        </td>
                                                        <td align="center">{{ $val->nama_kategori }}</td>
                                                        <td>{{ character_limiter($val->judul_berita, 50, '...') }}</td>
                                                        <td>{!! character_limiter($val->isi_berita, 150, '...') !!}</td>
                                                        <td align="center">
                                                            <a class="file_foto"
                                                                href="{{ base_url('upload/berita/' . $val->file_foto) }}">
                                                                <img class="xIMG"
                                                                    src="{{ base_url('upload/berita/' . $val->file_foto) }}"
                                                                    alt="" width="70">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
    <!-- END: Content-->
@endsection

@push('modal')
    <div class="modal animated bounceInUp text-left" id="modal_view" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div id="modal_header" class="modal-header bg-primary">
                    <h4 class="modal-title white" id="modal_title">Detail Berita</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body" id="modal_body">
                    <div><label>Kategori: </label> <label id="kategori">Nama Kategori</label></div>
                    <div id="judul" class="h4 font-weight-bold">Judul Berita</div>
                    <hr>
                    <div id="foto">Foto Berita</div>
                    <hr>
                    <div id="isi">
                        <p>Isi Berita</p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">KELUAR</button>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('css_plugin')
    <link rel="stylesheet" type="text/css"
        href="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}">
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/external/DataTables/datatables.min.css') }}" />
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ base_url('assets/external/Fancybox/jquery.fancybox.css') }}">
    <!-- Switch -->
    <link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/css/plugins/forms/switch.css' }}">
    <!-- Toast -->
    <link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/vendors/css/extensions/toastr.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ assets_url . 'app-assets/css/plugins/extensions/toastr.css' }}">
@endpush

@push('css_style')
    <style>
        .xIMG {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .xIMG:hover {
            opacity: 0.7;
        }

    </style>
@endpush

@push('js_plugin')
    <script type="text/javascript" src="{{ base_url('assets/external/DataTables/datatables.min.js') }}"></script>
    <script src="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}" type="text/javascript">
    </script>
    <!-- Fancybox -->
    <script type="text/javascript" src="{{ base_url('assets/external/Fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ base_url('assets/external/Fancybox/jquery.fancybox.pack.js') }}"></script>
    <!-- Switch -->
    <script src="{{ assets_url . 'app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js' }}"
        type="text/javascript"></script>
    <!-- Toast -->
    <script src="{{ assets_url . 'app-assets/vendors/js/extensions/toastr.min.js' }}" type="text/javascript"></script>

    <script src="{{ base_url('assets/js/delete_data.js') }}" type="text/javascript"></script>
@endpush

@push('js_script')
    <script>
        $('#list_tbl').dataTable();
    </script>

    <script type="text/javascript">
        $('.file_foto').fancybox({});
    </script>

    <script>
        $('.switch:checkbox').checkboxpicker({
            offLabel: 'No',
            onLabel: 'Yes',
            offTitle: 'Tidak Aktif',
            onTitle: 'Aktif',
            // reverse: true
        });
    </script>

    <script>
        function changeActive(data) {
            $(".loading-page").show();
            var cek = $(data).is(':checked');
            var id = $(data).data().id;
            var act = 0;
            var checked = true;
            if (cek) {
                act = 1;
                checked = false;
            }
            $.get("{{ base_url('bappeda/publikasi/berita/active/') }}/" + act + '/' + id,
                function(dt) {
                    var data = JSON.parse(dt);
                    $(".loading-page").hide();

                    if (data.respons) {
                        toastr.success(data.alert, 'Sukses!', {
                            "closeButton": true
                        });
                    } else {
                        // $('#check_active').attr('checked', checked).change();
                        toastr.error(data.alert, 'Gagal!', {
                            "closeButton": true
                        });
                    }
                }
            );
        }
    </script>

    <script>
        function showModal(data) {
            var kategori = $(data).data().kategori;
            var judul = $(data).data().judul;
            var isi = $(data).data().isi;
            var foto = $(data).data().foto;

            $('#modal_view #modal_body #kategori').html(kategori);
            $('#modal_view #modal_body #judul').html(judul);
            $('#modal_view #modal_body #foto').html(
                '<img class="xIMG w-50"  src="{{ base_url('upload/berita') }}/' + foto + '">'
            );
            $('#modal_view #modal_body #isi').html('<p class="text-justify">' + isi + '</p>');

            $('#modal_view').modal({
                backdrop: 'static',
                keyboard: false
            });
        }
    </script>
@endpush
