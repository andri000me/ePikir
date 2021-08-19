@extends('template/master')

@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs"
        style="background-image: url({{ assets_front . 'images/background/wall-dark.jpg' }}); background-repeat: repeat; background-size: auto;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- <h2><i class="fa fa-pencil"></i>Regulasi Kelitbangan</h2> --}}
                    <ul>
                        <li><a href="{{ base_url('landing/home') }}"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-clone"></i>Profil</a></li>
                        <li class="active"><a href="javascript:void(0)"><i class="fa fa-clone"></i>Regulasi Kelitbangan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Profil</span>
                        <h1>Regulasi Kelitbangan</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        <table id="tbl_regulasi" class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Peraturan</th>
                                    <th>Tentang</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regulasi as $key => $val)
                                    <tr>
                                        <td align="center">{{ $key + 1 }}</td>
                                        <td nowrap><a
                                                href="{{ base_url('landing/regulasi/detail/' . encode($val->id_regulasi)) }}"
                                                title="Lihat Dokumen" class="text-danger">{{ $val->nama_regulasi }}</a></td>
                                        <td>{{ $val->isi_regulasi }}</td>
                                        <td align="center"><a href="{{ base_url('upload/regulasi/' . $val->file_regulasi) }}"
                                                title="Download" class="h4"><i class="fa fa-file-pdf-o text-danger"></i></a>
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

@push('js_plugin')
    <script type="text/javascript" src="{{ base_url('assets/external/DataTables/datatables.min.js') }}"></script>
@endpush

@push('js_script')
    <script>
        $('#tbl_regulasi').dataTable();
    </script>
    <script>
        $('#tbl_regulasi_info').parent().parent().css("padding-block", "30px");
    </script>
@endpush
