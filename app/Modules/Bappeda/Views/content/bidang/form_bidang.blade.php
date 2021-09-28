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
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda/bidang') }}">Bidang</a></li>
                                <li class="breadcrumb-item active">Form Input</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    <a href="{{ base_url('bappeda/bidang') }}" class="btn btn-block btn-primary"><i
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
                                    <h4 class="card-title">Form Input Bidang</h4>
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
                                        {!! form_open(base_url('bappeda/bidang/save'), 'class="form" id="formInputBidang"') !!}

                                        <div class="col-md-12">
                                            <input type="hidden" name="id_bidang"
                                                value="{{ isset($bidang) && $bidang != null ? encode($bidang->id_bidang) : '' }}">

                                            <div class="form-group">
                                                <label>Nama Bidang</label>
                                                <textarea name="nama_bidang" id="nama_bidang" rows="2"
                                                    class="form-control textarea-maxlength" maxlength="50"
                                                    required>{{ isset($bidang) && $bidang != null ? $bidang->nama_bidang : '' }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Keterangan Bidang</label>
                                                <textarea name="ket_bidang" id="ket_bidang" rows="2"
                                                    class="form-control textarea-maxlength" maxlength="150"
                                                    required>{{ isset($bidang) && $bidang != null ? $bidang->ket_bidang : '' }}</textarea>
                                            </div>

                                            <div class="form-group" style="display: flex;">
                                                {{-- <label>Icon</label> --}}
                                                <input type="text" name="icon_bidang" id="icon_bidang"
                                                    class="form-control col-md-4" placeholder="Pilih icon yang sesuai"
                                                    value="{{ isset($bidang) && $bidang != null ? $bidang->icon_bidang : '' }}"
                                                    readonly required>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-success"
                                                        onclick="showModalIcon(this)">
                                                        <i class="fa fa-smile-o"></i> Pilih Icon
                                                    </button>
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

@push('modal')
    <div class="modal animated bounceInUp text-left" id="modal_icon" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div id="modal_header" class="modal-header bg-primary">
                    <h4 class="modal-title white" id="modal_title">Pilih Icon</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body" id="modal_body">
                    @include('content/bidang/icons')
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">KELUAR</button>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('css_plugin')
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/dropify/dist/css/dropify.min.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/css/extensions/sweetalert.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/css/forms/selects/select2.min.css' }}">
@endpush

@push('css_style')
    <style media="screen">
        .ui-datepicker-calendar {
            display: none;
        }

    </style>
@endpush
@push('js_plugin')
    <script src="{{ assets_url }}app-assets/vendors/js/editors/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="{{ assets_url }}app-assets/vendors/dropify/dist/js/dropify.min.js"></script>
    <script src="{{ assets_url }}app-assets/vendors/js/extensions/sweetalert.min.js"></script>
    <script src="{{ assets_url . 'app-assets/vendors/js/forms/select/select2.full.min.js' }}"></script>
    <script src="{{ assets_url . 'app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js' }}"></script>
    {{-- <script src="{{ base_url('assets/js/ckeditor_config.js') }}" type="text/javascript"></script> --}}
@endpush

@push('js_script')

    <script>
        $(".select2").select2();
    </script>

    <script>
        function showModalIcon(data) {
            $('#modal_icon').modal({
                backdrop: 'static',
                keyboard: false
            });
        }
    </script>

    <script>
        $('.textarea-maxlength').maxlength({
            alwaysShow: true,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger",
        });
    </script>

    <script>
        function selectIcon(data) {
            var icon = $(data).children().data().icon;
            $('#formInputBidang #icon_bidang').val(icon);
            $('#modal_icon').modal('hide');
        }
    </script>
@endpush
