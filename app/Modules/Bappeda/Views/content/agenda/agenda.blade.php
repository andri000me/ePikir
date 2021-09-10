@extends('template/master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Agenda Kegiatan</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                                <li class="breadcrumb-item active">Agenda Kegiatan</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-3 col-12 mb-2">
                    <a href="{{ base_url('bappeda/publikasi/agenda/add') }}" class="btn btn-block btn-info"><i
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
                                    <h4 class="card-title">List Agenda</h4>
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
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered" id="list_tbl">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>#</th>
                                                    <th>Aksi</th>
                                                    <th>Judul Agenda</th>
                                                    <th>Isi Agenda</th>
                                                    <th>Waktu Awal</th>
                                                    <th>Waktu Akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($agenda as $key => $val)
                                                    <tr>
                                                        <td align="center">{{ $key + 1 }}</td>
                                                        <td nowrap align="center">
                                                            <a href="{{ base_url('bappeda/publikasi/agenda/edit/' . encode($val->id_agenda)) }}"
                                                                class="btn btn-info btn-sm" title="Update Data"><i
                                                                    class="la la-pencil-square-o font-small-3"></i></a>
                                                            <button type="button" onclick="hapusData(this, true)"
                                                                data-link="{{ base_url('bappeda/publikasi/agenda/delete/' . encode($val->id_agenda)) }}"
                                                                class="btn btn-sm btn-danger" title="Hapus Data"><i
                                                                    class="la la-trash-o font-small-3"></i></button>
                                                        </td>
                                                        <td nowrap>{{ $val->judul_agenda }}</td>
                                                        <td>{{ $val->isi_agenda }}</td>
                                                        <td nowrap align="center">
                                                            {{ formatTanggal($val->waktu_awal, false, true) }}</td>
                                                        <td nowrap align="center">
                                                            {{ formatTanggal($val->waktu_akhir, false, true) }}</td>

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
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@push('css_plugin')
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/external/DataTables/datatables.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}">
@endpush

@push('js_plugin')
    <script type="text/javascript" src="{{ base_url('assets/external/DataTables/datatables.min.js') }}"></script>
    <script src="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}" type="text/javascript">
    </script>
    <script src="{{ base_url('assets/js/delete_data.js') }}" type="text/javascript"></script>
@endpush

@push('js_script')
    <script>
        $('#list_tbl').dataTable();
    </script>
@endpush
