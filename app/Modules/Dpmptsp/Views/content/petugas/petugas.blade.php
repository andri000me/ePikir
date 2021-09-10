@extends('template/master')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-9 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Daftar Pejabat</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ base_url('dpmptsp') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Daftar Pejabat</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-3 col-12 mb-2">
                    <button class="btn btn-info btn-block round px-2" type="button" onclick="addModal();">
                        <i class="la la-plus font-small-3"></i> Tambah Data
                    </button>
                </div>

            </div>
            <div class="content-body">
                <section class="inputmask" id="inputmask">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Pejabat</h4>
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

                                        @include('template.searchbar', ['table_name' => 'tbl_petugas'])

                                        <table id="tbl_petugas" class="table table-hover table-bordered table-striped"
                                            style="font-size: 8pt">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th width='10'>#</th>
                                                    <th class="text-center">Aksi</th>
                                                    <th>Nama</th>
                                                    <th>NIP</th>
                                                    <th>Pangkat</th>
                                                    <th>Jabatan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($petugas as $item)
                                                    <tr>
                                                        <td class="text-center">{{ $no++ }}</td>
                                                        <td class="text-center">
                                                            <button type="button"
                                                                data-id="{{ encode($item->id_petugas) }}"
                                                                data-nama="{{ $item->nama_petugas }}"
                                                                data-nip="{{ $item->nip_petugas }}"
                                                                data-pangkat="{{ $item->pangkat_petugas }}"
                                                                data-jabatan="{{ $item->jabatan_petugas }}"
                                                                onclick="editModal(this)" class="btn btn-sm btn-info"
                                                                title="Update Data"><i
                                                                    class="la la-edit font-small-3"></i></button>

                                                            <button type="button" onclick="hapusData(this, true)"
                                                                data-link="{{ base_url('dpmptsp/pejabat/delete/' . encode($item->id_petugas)) }}"
                                                                class="btn btn-sm btn-danger" title="Hapus Data"><i
                                                                    class="la la-trash-o font-small-3"></i></button>
                                                        </td>
                                                        <td>{{ $item->nama_petugas }}</td>
                                                        <td class="text-center">{{ $item->nip_petugas }}</td>
                                                        <td>{{ $item->pangkat_petugas }}</td>
                                                        <td>{{ $item->jabatan_petugas }}</td>
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
@endsection

@push('modal')
    <div class="modal animated bounceIn text-left" id="modal_form" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title white" id="myModalLabel10">Form Input Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! form_open(base_url('dpmptsp/pejabat/save'), 'id="form_input_pejabat"') !!}
                <input type="hidden" id="id_petugas" name="id_petugas" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <h5>Nama Pejabat</h5>
                        <div class="controls">
                            <input type="text" id="nama_petugas" name="nama_petugas" class="form-control"
                                placeholder="Isi nama pejabat" required value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>NIP</h5>
                        <div class="controls">
                            <input type="text" id="nip_petugas" name="nip_petugas" class="form-control"
                                placeholder="Isi NIP pejabat" required value="" maxlength="22">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Pangkat</h5>
                        <div class="controls">
                            <input type="text" id="pangkat_petugas" name="pangkat_petugas" class="form-control"
                                placeholder="Isi pangkat pejabat" required value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Jabatan</h5>
                        <div class="controls">
                            <input type="text" id="jabatan_petugas" name="jabatan_petugas" class="form-control"
                                placeholder="Isi jabatan pejabat" required value="">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" title="Batal">Batal
                    </button>
                    <button type="submit" class="btn btn-info" title="Simpan">Simpan</button>
                </div>
                {!! form_close() !!}
            </div>
        </div>
    </div>
@endpush

@push('css_plugin')
    <link rel="stylesheet" type="text/css"
        href="{{ assets_url . 'app-assets/vendors/css/tables/datatable/datatables.min.css' }}">
    <link rel="stylesheet" type="text/css"
        href="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}">
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
    <script src="{{ base_url('assets/js/delete_data.js') }}" type="text/javascript"></script>
@endpush

@push('js_script')
    <script>
        $('#tbl_petugas').DataTable();
    </script>

    <script>
        function resetDataModal() {
            $('#modal_form #form_input_pejabat')[0].reset();
        }

        function addModal() {
            resetDataModal();
            $('#modal_form').modal({
                backdrop: 'static',
                keyboard: false
            });
        }

        function editModal(data) {
            resetDataModal();
            var id = $(data).data().id;
            var nama = $(data).data().nama;
            var nip = $(data).data().nip;
            var pangkat = $(data).data().pangkat;
            var jabatan = $(data).data().jabatan;
            $('#modal_form #form_input_pejabat #id_petugas').val(id);
            $('#modal_form #form_input_pejabat #nama_petugas').val(nama);
            $('#modal_form #form_input_pejabat #nip_petugas').val(nip);
            $('#modal_form #form_input_pejabat #pangkat_petugas').val(pangkat);
            $('#modal_form #form_input_pejabat #jabatan_petugas').val(jabatan);
            $('#modal_form').modal({
                backdrop: 'static',
                keyboard: false
            });
        }
    </script>
@endpush
