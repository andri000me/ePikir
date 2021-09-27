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
                                <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda/publikasi/info') }}">Info
                                        Publik</a></li>
                                <li class="breadcrumb-item active">Form Input</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    <a href="{{ base_url('bappeda/publikasi/info') }}" class="btn btn-block btn-primary"><i
                            class="la la-arrow-left"></i> Kembali</a>
                </div>

            </div>
            <div class="content-body">
                <!-- Basic CKEditor start -->


                {!! show_alert() !!}

                <section id="basic">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Input info</h4>
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
                                        {!! form_open_multipart(base_url('bappeda/publikasi/info/save'), 'class="form" id="formInputInfo"') !!}

                                        <div class="col-md-12">
                                            <input type="hidden" name="id_info"
                                                value="{{ isset($info) && $info != null ? encode($info->id_info) : '' }}">
                                            <div class="form-group">
                                                <label>Judul Info</label>
                                                <input type="text" name="nama_info" class="form-control"
                                                    placeholder="Isi judul info"
                                                    value="{{ isset($info) && $info != null ? $info->nama_info : '' }}"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan Info</label>
                                                <input type="text" name="isi_info" class="form-control"
                                                    placeholder="Isi keterangan info"
                                                    value="{{ isset($info) && $info != null ? $info->isi_info : '' }}"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label>File info (pdf)</label>
                                                <input type="file" data-validation-required-message="Upload file lampiran"
                                                    name="file_info" class="dropify" data-height="150"
                                                    accept="application/pdf" data-max-file-size="5120K" data-min-width="300"
                                                    data-min-height="250" data-allowed-file-extensions="pdf"
                                                    style="height: unset"
                                                    data-default-file="{{ isset($info) && $info != null ? base_url('upload/info/' . $info->file_info) : '' }}"
                                                    {{ isset($info) && $info != null ? '' : 'required' }} />
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
    <link rel="stylesheet"
        href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/style-datepicker.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/dropify/dist/css/dropify.min.css' }}">
@endpush

@push('js_plugin')
    <script src="{{ assets_url }}app-assets/vendors/dropify/dist/js/dropify.min.js"></script>
@endpush

@push('js_script')
    <script type="text/javascript">
        var drEvent = $('.dropify').dropify({
            messages: {
                default: '<center>Upload file info (<b>.pdf</b>).</center>',
                error: '<center>Maksimal ukuran file 5 MB.</center>',
            },
            error: {
                fileSize: '<center>Maksimal ukuran file 5 MB.</center>',
            }
        });
    </script>
@endpush
