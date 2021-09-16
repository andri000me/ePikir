@extends('template/master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-10 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Form Input</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda/user') }}">User Admin</a></li>
                                <li class="breadcrumb-item active">Form Input</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    <a href="{{ base_url('bappeda/user') }}" class="btn btn-block btn-primary"><i
                            class="la la-arrow-left"></i> Kembali</a>
                </div>

            </div>
            <div class="content-body">

                {!! show_alert() !!}

                <section id="basic">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Input User Admin</h4>
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
                                        {!! form_open_multipart(base_url('bappeda/user/save'), 'class="form" id="formInputUser"') !!}

                                        <div class="col-md-12">
                                            <input type="hidden" name="id_user"
                                                value="{{ isset($user) && $user != null ? encode($user->id_user) : '' }}">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Role User</label>
                                                        <select name="role" class="form-control select2" required>
                                                            <option value="" selected disabled="disabled">Pilih Role User
                                                            </option>
                                                            @foreach ($role as $key => $val)
                                                                <option value="{{ encode($val->id_role) }}"
                                                                    {{ isset($user) && $user != null ? ($user->id_role == $val->id_role ? 'selected' : '') : '' }}>
                                                                    {{ strtoupper($val->nama_role) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nama user</label>
                                                        <input type="text" name="nama_user" class="form-control"
                                                            placeholder="Isi nama user admin"
                                                            value="{{ isset($user) && $user != null ? $user->nama_user : '' }}"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" name="username" class="form-control"
                                                            placeholder="Isi username admin"
                                                            value="{{ isset($user) && $user != null ? $user->username : '' }}"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="text" name="password" class="form-control"
                                                            placeholder="Isi password admin {{ isset($user) && $user != null ? '(kosongi jika password tidak dirubah)' : '' }}"
                                                            value=""
                                                            {{ isset($user) && $user != null ? '' : 'required' }}>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 offset-md-9">
                                            <button type="submit" class="btn btn-info btn-block">
                                                <i class="la la-save"></i> Simpan Data
                                            </button>
                                        </div>

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
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/css/forms/selects/select2.min.css' }}">
@endpush

@push('js_plugin')
    <script src="{{ assets_url . 'app-assets/vendors/js/forms/select/select2.full.min.js' }}"></script>
@endpush

@push('js_script')
    <script>
        $(".select2").select2();
    </script>
@endpush
