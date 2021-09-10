@extends('template/master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-10 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">For Input</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                                <li class="breadcrumb-item"><a href="{{ base_url('bappeda/publikasi/agenda') }}">Agenda
                                        Kegiatan</a></li>
                                <li class="breadcrumb-item active">Form Input</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    <a href="{{ base_url('bappeda/publikasi/agenda') }}" class="btn btn-block btn-primary"><i
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
                                    <h4 class="card-title">Ubah Data Agenda</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        {!! form_open(base_url('bappeda/publikasi/agenda/save'), 'class="form" id="formInputRp"') !!}

                                        <input type="hidden" name="id_agenda"
                                            value="{{ isset($agenda) && $agenda != null ? encode($agenda->id_agenda) : '' }}">

                                        <div class="form-group">
                                            <label>Judul Agenda</label>
                                            <input type="text" name="judul_agenda" class="form-control"
                                                placeholder="Nama Agenda"
                                                value="{{ isset($agenda) && $agenda != null ? $agenda->judul_agenda : '' }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label>Isi Agenda</label>
                                            <input type="text" name="isi_agenda" class="form-control"
                                                placeholder="Keterangan Agenda"
                                                value="{{ isset($agenda) && $agenda != null ? $agenda->isi_agenda : '' }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label>Waktu Agenda</label>
                                            <div class='input-group'>
                                                <input type='text' name="waktu_agenda" class="form-control date-range"
                                                    value="{{ isset($agenda) && $agenda != null ? date('d/m/Y H:i', strtotime($agenda->waktu_awal)) . ' - ' . date('d/m/Y H:i', strtotime($agenda->waktu_akhir)) : '' }}" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <span class="la la-calendar"></span>
                                                    </span>
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
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/css/pickers/daterange/daterangepicker.css' }}">
    {{-- <link rel="stylesheet" type="text/css"
        href="{{ assets_url . 'app-assets/vendors/css/pickers/pickadate/pickadate.css' }}"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ assets_url . 'app-assets/css/plugins/pickers/daterange/daterange.css' }}">
@endpush

@push('js_plugin')
    <script src="{{ assets_url . 'app-assets/vendors/js/pickers/pickadate/picker.js' }}" type="text/javascript"></script>
    <script src="{{ assets_url . 'app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js' }}"
        type="text/javascript"> </script>
    <script src="{{ assets_url . 'app-assets/vendors/js/pickers/daterange/daterangepicker.js' }}"></script>
@endpush

@push('js_script')
    <script>
        $('.date-range').daterangepicker({
            timePicker: true,
            timePickerIncrement: 5,
            timePicker24Hour: true,
            timePickerSeconds: false,
            drops: "up",
            locale: {
                format: 'DD/MM/YYYY H:mm'
            },
            buttonClasses: "btn btn-sm",
            applyClass: "btn-info",
            cancelClass: "btn-danger"
        });
    </script>
@endpush
