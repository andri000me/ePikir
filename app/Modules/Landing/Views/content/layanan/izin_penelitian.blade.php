@extends('template/master')

@section('content')
    @include('template.breadcumbs',['group' => 'Layanan', 'label' => 'Izin Penelitian'])

    <!-- Radix Tabs -->
    <section id="radix-tabs" class="radix-tabs section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-main" style="margin-top: -20px">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs row d-flex" id="myTab" role="tablist">
                                <li class="nav-item col-6" style="padding-right: 0px">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">Tahap I <br>
                                        <span class="d-none d-lg-block">Permohonan Rekomendasi Penelitian</span>
                                    </a>
                                </li>
                                <li class="nav-item col-6" style="padding-left: 0px">
                                    <a class="nav-link" data-toggle="tab" href="#tab2" role="tab">Tahap II <br>
                                        <span class="d-none d-lg-block">Permohonan Izin Penelitian</span>
                                    </a>
                                </li>
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Tahap 1 - Rekomendasi Penelitian Tab -->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                @include('content/layanan/form_rpl')
                            </div>
                            <!--/ End Tahap 1 - Rekomendasi Penelitian Tab -->

                            <!-- Tahap 2 - Izin Penelitian Tab -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel">
                                @include('content/layanan/form_ipl')
                            </div>
                            <!--/ End Tahap 2 - Izin Penelitian Tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Radix Tabs -->
@endsection

@push('loading')
    <div class="loadingers" id="loading-show">
        <div style="top: 40%; position: relative; z-index: 30">
            @include('template.loading')
        </div>
    </div>
@endpush

@push('css_plugin')
    <link rel="stylesheet"
        href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/style-datepicker.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/dropify/dist/css/dropify.min.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/css/extensions/sweetalert.css' }}">
@endpush

@push('css_style')
    <style>
        .contact-address {
            height: auto !important;
        }

        .rules {
            font-size: 9pt;
        }

        .rules ul {
            padding-left: 45px;
        }

        .rules li div i {
            color: #FF9800 !important;
        }

        .rules ul li {
            list-style: circle;
            margin-bottom: 0px !important;
        }

    </style>

    <style>
        .loadingers {
            text-align: center;
            z-index: 10000;
            width: 100%;
            height: 100%;
            position: fixed;
            background: #32004c5e;
            display: none;
        }

    </style>
@endpush

@push('js_plugin')
    <script src="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js' }}"></script>
    <script src="{{ assets_url . 'app-assets/vendors/dropify/dist/js/dropify.min.js' }}"></script>
    <script src="{{ assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js' }}"></script>
@endpush

@push('js_script')
    <!-- Date Range Picker-->
    <script>
        $('.date-range').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd/mm/yyyy',
            toggleActive: true
        });
    </script>

    <!-- Dropify -->
    <script type="text/javascript">
        var drEvent = $('.dropify').dropify({
            messages: {
                default: '<center>Upload file lampiran (<b>pdf</b>).</center>',
                error: '<center>Maksimal ukuran file 10 MB.</center>',
            },
            error: {
                fileSize: '<center>Maksimal ukuran file 10 MB.</center>',
            }
        });
    </script>

    <!-- Input Number Only-->
    <script type="text/javascript">
        function inputAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 46 || charCode > 57))
                return false;
            return true;
        }
    </script>

    <!-- Get Token -->
    <script>
        function getToken(dt) {
            var form = $(dt).parent().parent().parent().parent()[0];
            var check_valid = form.checkValidity();
            if (check_valid) {
                $("#loading-show").fadeIn("slow");
                var no_hp = $('#no_telp_pemohon').val();
                $.ajax({
                    type: "POST",
                    url: "{{ base_url('landing/gettoken') }}",
                    dataType: "json",
                    data: {
                        no_hp: no_hp
                    },
                    success: function(data) {
                        $("#loading-show").fadeIn("slow").delay(20).fadeOut('slow');
                        if (data.success) {
                            $('#inputform').slideUp();
                            $('#checktoken').delay(500).slideDown();
                            timerToken(90, form.id);
                        } else {
                            $('#inputform #alert_info #txt_alert').html(data.alert);
                            $("#inputform #alert_info").fadeIn("slow").delay(1000).slideUp('slow');
                        }
                    }
                });
            } else {
                alert('Isi semua data pada form yang tersedia! Pastikan email & nomor WhatsApp valid.')
            }

            return false;
        }
    </script>

    <!-- Check Token & Save Data -->
    <script>
        function checkToken(dt) {
            var form = $(dt).parent().parent().parent().parent()[0];
            var token = $('#' + form.id + ' #inputToken').val();
            if (token != '') {
                $("#loading-show").fadeIn("slow");

                $.ajax({
                    type: "POST",
                    url: "{{ base_url('landing/checktoken') }}",
                    dataType: "json",
                    data: {
                        token: token
                    },
                    success: function(data) {
                        $("#loading-show").fadeIn("slow").delay(10).fadeOut('slow');

                        if (data.success) {
                            saveData(form);
                        } else {
                            $('#checktoken #alert_info #txt_alert').html(data.alert);
                            $("#checktoken #alert_info").fadeIn("slow").delay(1000).slideUp('slow');
                        }
                    }
                });
            } else {
                alert('Isi kode token!')
            }

            return false;
        }

        function saveData(form) {
            var formData = new FormData(form); //membuat form data baru
            var url = form.action;
            $.ajax({
                type: "POST",
                url: url,
                dataType: "json",
                processData: false,
                contentType: false,
                data: formData,
                success: function(data) {
                    if (data.success) {
                        swal({
                            title: "Sukses!",
                            text: "Data berhasil terkirim dan akan segera di tinjau oleh Admin!",
                            type: "success",
                            timer: 2000
                        }).then(function() {
                            location.reload();
                        });
                    } else {
                        swal({
                            title: "Gagal!",
                            text: data.alert,
                            type: "error",
                            timer: 2000
                        }).then(function() {
                            location.reload();
                        });
                    }
                }
            });
        }
    </script>

    <!-- Timer Left Token -->
    <script>
        function timerToken(time = 90, form_id = '') {
            timeleft = time;
            tokenTimer = setInterval(function() {
                var numb = n(timeleft);
                $('#' + form_id + ' #checktoken #timertoken').html(numb);

                timeleft -= 1;
                if (timeleft == -1) {
                    clearInterval(tokenTimer);
                    $('#' + form_id)[0].reset();
                    $('#' + form_id + ' #checktoken').slideUp();
                    $('#' + form_id + ' #inputform').delay(500).slideDown();
                }
            }, 1000);
        }

        function n(n) {
            return n > 9 ? "" + n : "0" + n;
        }
    </script>
@endpush
