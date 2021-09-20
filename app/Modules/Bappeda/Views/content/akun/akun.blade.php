@extends('template/master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-10 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Akun Login</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Akun Login</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                {!! show_alert() !!}

                <section id="basic">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Data Akun</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        {!! form_open_multipart(base_url('bappeda/akun/save'), 'class="form" id="formInputUser" novalidate') !!}

                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>Nama User:
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="nama_user"
                                                                id="nama_user" placeholder="Masukan nama user"
                                                                value="{{ isset($akun) && $akun != null ? $akun->nama_user : '' }}"
                                                                required
                                                                data-validation-required-message="Data harus diisi">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Username:
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="username"
                                                                id="username" placeholder="Masukan username login"
                                                                value="{{ isset($akun) && $akun != null ? $akun->username : '' }}"
                                                                required
                                                                data-validation-required-message="Data harus diisi">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Password Lama:
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="password" class="form-control" name="pass_old"
                                                                id="pass_old" placeholder="Masukan password lama" required
                                                                data-validation-required-message="Data harus diisi">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Password Baru:
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="password" class="form-control" name="pass_new"
                                                                id="pass_new" placeholder="Masukan password baru" required
                                                                data-validation-required-message="Data harus diisi">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Ulangi Password:
                                                            <span class="required text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <input type="password" class="form-control" name="pass_re"
                                                                id="pass_re" placeholder="Ulangi password baru"
                                                                data-validation-match-match="pass_new" required
                                                                data-validation-required-message="Data harus diisi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <button type="reset" class="btn btn-warning btn-block"><i
                                                            class="la la-refresh"></i>
                                                        Reset</button>
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="submit" class="btn btn-success btn-block"><i
                                                            class="la la-save"></i>
                                                        Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-3 offset-md-9">
                                            <button type="submit" class="btn btn-info btn-block">
                                                <i class="la la-save"></i> Simpan Data
                                            </button>
                                        </div> --}}

                                        {!! form_close() !!}
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

@push('css_plugin')
    {{-- <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css' }}"> --}}
    {{-- <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/style-datepicker.css' }}"> --}}
    {{-- <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/css/forms/selects/select2.min.css' }}"> --}}
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/css/plugins/forms/validation/form-validation.css' }}">
@endpush

@push('js_plugin')
    {{-- <script src="{{ assets_url . 'app-assets/vendors/js/forms/select/select2.full.min.js' }}"></script> --}}
    <script src="{{ assets_url . 'app-assets/vendors/js/forms/validation/jqBootstrapValidation.js' }}"></script>
    {{-- <script src="{{ assets_url . 'app-assets/js/scripts/forms/validation/form-validation.js' }}"></script> --}}
@endpush

@push('js_script')
    {{-- <script>
        $(".select2").select2();
    </script> --}}
    <script>
        // Input, Select, Textarea validations except submit button
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    </script>
@endpush
