@extends('template/master')

@section('content')
    @include('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Informasi Publik'])

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Informasi Publik</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        <table id="tbl_info" class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Judul Info</th>
                                    <th>Keterangan</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($info as $key => $val)
                                    <tr>
                                        <td align="center">{{ $key + 1 }}</td>
                                        <td nowrap><a
                                                href="{{ base_url('landing/info/detail/' . encode($val->id_info)) }}"
                                                title="Lihat Dokumen" class="text-danger">{{ $val->nama_info }}</a>
                                        </td>
                                        <td>{{ $val->isi_info }}</td>
                                        <td align="center"><a href="{{ base_url('upload/info/' . $val->file_info) }}"
                                                title="Download" class="h4"><i
                                                    class="fa fa-file-pdf-o text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
@endsection

@push('css_plugin')
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/external/DataTables/datatables.min.css') }}" />
@endpush

@push('css_style')
    <style>
        .page-item.active .page-link {
            background-color: #ff9800;
            border-color: #dc890d;
        }

        .page-link {
            color: #ff9800;
        }

    </style>
@endpush

@push('js_plugin')
    <script type="text/javascript" src="{{ base_url('assets/external/DataTables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ base_url('assets/js/datatable_option.js') }}"></script>
@endpush

@push('js_script')
    <script>
        createDataTable('tbl_info');
    </script>

    <script>
        $('#tbl_info_info').parent().parent().css("padding-block", "30px");
    </script>
@endpush
