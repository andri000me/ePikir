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
                            <!-- About Us Tab -->
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                <!-- Start Contact -->
                                <section id="contact-us" class="contact-us section">
                                    <div class="container px-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="contact-main" style="margin-top: -20px">
                                                    <div class="row">
                                                        <!-- Contact Form -->
                                                        <div class="col-lg-8 col-12">
                                                            <div class="form-main">
                                                                <div class="text-content">
                                                                    <h2>Rekomendasi Penelitian</h2>
                                                                </div>

                                                                {!! form_open_multipart(base_url('landing/izinpenelitian/saverpl'), 'class="form" id="formInputRp"') !!}
                                                                <div class="row" id="inputform">
                                                                    <div class="col-12">
                                                                        <div id="alert_info"
                                                                            class="alert alert-danger alert-dismissible"
                                                                            style="width: 100%; border-radius: 50px; text-align: center; display: none;">
                                                                            {{-- <button type="button" class="close"
                                                                                data-dismiss="alert"
                                                                                aria-hidden="true">&times;</button> --}}
                                                                            <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                                                                            <span id="txt_alert"></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                name="nama_pemohon" autocomplete="off"
                                                                                placeholder="Nama lengkap pemohon" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                name="pekerjaan_pemohon" autocomplete="off"
                                                                                placeholder="Pekerjaan pemohon" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control"
                                                                                name="alamat_pemohon" rows="2"
                                                                                placeholder="Alamat lengkap pemohon"
                                                                                autocomplete="off"
                                                                                style="height: unset !important;"
                                                                                required></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="lokasi"
                                                                                rows="2"
                                                                                placeholder="Lokasi kegiatan penelitian"
                                                                                autocomplete="off"
                                                                                style="height: unset !important;"
                                                                                required></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="tujuan"
                                                                                rows="2"
                                                                                placeholder="Tujuan kegiatan penelitian"
                                                                                autocomplete="off"
                                                                                style="height: unset !important;"
                                                                                required></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="input-daterange input-group date-range"
                                                                            style="height: 50px; margin-bottom: 25px">
                                                                            <div class="form-group w-100">
                                                                                <input type="text" class="form-control"
                                                                                    id="tgl_pelaksanaan_mulai"
                                                                                    name="tgl_pelaksanaan_mulai"
                                                                                    placeholder="Tgl Pelaksanaan Awal"
                                                                                    autocomplete="off" {{-- value="{{ date('d/m/Y') }}" --}}
                                                                                    style="border-radius: 0px" required />
                                                                            </div>
                                                                            <div class="input-group-append"
                                                                                style="padding: 12px; background: #2e2751;">
                                                                                <span class="input-group-text text-white"
                                                                                    style="padding: 5px">SAMPAI</span>
                                                                            </div>
                                                                            <div class="form-group w-100">
                                                                                <input type="text" class="form-control"
                                                                                    id="tgl_pelaksanaan_akhir"
                                                                                    name="tgl_pelaksanaan_akhir"
                                                                                    placeholder="Tgl Pelaksanaan Akhir"
                                                                                    autocomplete="off" {{-- value="{{ date('d/m/Y') }}" --}}
                                                                                    style="border-radius: 0px" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-lg-6 col-12">
                                                                        <div class="form-group">
                                                                            <input type="email" class="form-control"
                                                                                name="email_pemohon" autocomplete="on"
                                                                                placeholder="Email pemohon" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-12">
                                                                        <div class="form-group">
                                                                            <input type="text" id="no_telp_pemohon"
                                                                                class="form-control" name="no_telp_pemohon"
                                                                                placeholder="Nomor WhatsApp pemohon"
                                                                                maxlength="14" autocomplete="on"
                                                                                onkeypress="return inputAngka(event);"
                                                                                required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                name="penanggung_jawab" autocomplete="off"
                                                                                placeholder="Penanggung jawab" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input type="file"
                                                                                data-validation-required-message="Upload file lampiran"
                                                                                name="file_lampiran" class="dropify"
                                                                                data-height="150" accept="application/pdf"
                                                                                data-max-file-size="10240K"
                                                                                data-min-width="300" data-min-height="250"
                                                                                data-allowed-file-extensions="pdf"
                                                                                style="height: unset" required />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form-group button">
                                                                            <button type="button" onclick="getToken()"
                                                                                class="btn primary">Kirim
                                                                                Token</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row" id="checktoken" style="display: none;">
                                                                    <div class="col-12">
                                                                        <div id="alert_info"
                                                                            class="alert alert-danger alert-dismissible"
                                                                            style="width: 100%; border-radius: 50px; text-align: center; display: none;">
                                                                            {{-- <button type="button" class="close"
                                                                                data-dismiss="alert"
                                                                                aria-hidden="true">&times;</button> --}}
                                                                            <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                                                                            <span id="txt_alert"></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div id="show_info"
                                                                            class="alert alert-success alert-dismissible"
                                                                            style="width: 100%; text-align: center;">
                                                                            <h4><i class="icon fa fa-clock-o"></i> <span
                                                                                    id="timertoken">90</span></h4>
                                                                            <span id="txt_alert">Token expired 90
                                                                                detik</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input type="text" id="inputToken"
                                                                                class="form-control text-center"
                                                                                name="token" autocomplete="off"
                                                                                placeholder="TOKEN" maxlength="6"
                                                                                onkeypress="return inputAngka(event);"
                                                                                style="font-size: 23pt; letter-spacing: 15px; font-weight: bold;">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-12">
                                                                        <div class="form-group button">
                                                                            <button type="submit"
                                                                                class="btn primary">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {!! form_close() !!}

                                                            </div>
                                                        </div>
                                                        <!--/ End Contact Form -->

                                                        <!-- Alur Permohonan -->
                                                        <div class="col-lg-4 col-12">
                                                            <div class="contact-address">
                                                                <!-- Address -->
                                                                <div class="contact">
                                                                    <h2>Alur Permohonan</h2>
                                                                    <ul class="address rules">
                                                                        <li>
                                                                            <div class="float-left"><i
                                                                                    class="fa fa-check-square-o"></i></div>
                                                                            <div>Pemohon mengisi form secara lengkap</div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="float-left"><i
                                                                                    class="fa fa-check-square-o"></i></div>
                                                                            <div>Nomor HP harus valid dan terdaftar WhatsApp
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="float-left"><i
                                                                                    class="fa fa-check-square-o"></i></div>
                                                                            <div style="padding-left: 25px;">Upload lampiran
                                                                                berkas
                                                                                kelengkapan
                                                                                dalam satu file (<b>pdf</b>) yang berisi :
                                                                            </div>
                                                                            <ul>
                                                                                <li>Scan KTP</li>
                                                                                <li>Scan surat permohonan penelitian dari
                                                                                    perguruan
                                                                                    tinggi/instansi
                                                                                </li>
                                                                                <li>Proposal penelitian</li>
                                                                                <li>dll.</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <div class="float-left"><i
                                                                                    class="fa fa-check-square-o"></i></div>
                                                                            <div style="padding-left: 25px;">Admin
                                                                                KESBANGPOL akan melakukan
                                                                                validasi</div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="float-left"><i
                                                                                    class="fa fa-check-square-o"></i></div>
                                                                            <div style="padding-left: 25px;">Pemohon
                                                                                menerima notifikasi melalui
                                                                                WhatsApp
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="float-left"><i
                                                                                    class="fa fa-check-square-o"></i></div>
                                                                            <div style="padding-left: 25px;">Jika disetujui,
                                                                                pemohon mengambil <b>Surat
                                                                                    Rekomendasi</b> ke kantor KESBANGPOL
                                                                                dengan membawa berkas
                                                                                kelengkapan
                                                                                sesuai yg diupload
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="float-left"><i
                                                                                    class="fa fa-check-square-o"></i></div>
                                                                            <div style="padding-left: 25px;">Lanjut tahap
                                                                                selanjutnya
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                                <!--/ End Address -->
                                                            </div>
                                                        </div>
                                                        <!--/ End Alur Permohonan -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--/ End Contact -->
                            </div>
                            <!--/ End About Us Tab -->
                            <!-- Story -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-content">
                                            <p>We are creative company here are many variation generators on the Internet
                                                tend to chunks as necessary, making this the first true generator on the
                                                Internet. It uses a <b>repeat predefined</b> dictionary of over 200 Latin
                                                words, combined with a handful of model sentence structures, to generate
                                                Lorem Ipsum which looks reasonable</p>
                                            <p>All riation generators on the Internet tend to chunks as necessary, making
                                                this the first true generator on the Internet the Lorem Ipsum generators on
                                                the Internet tend to repeat predefined chunks as necessary It uses a
                                                dictionary of over 200 Latin words, combined with a handful of model
                                                sentence structures</p>
                                            <p>We are Professional long established fact that a reader will be distracted by
                                                the readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters Internet tend to chunks as necessary, making this the first true
                                                generator on the Internet the Lorem Ipsum generators on the Internet tend to
                                                repeat predefined chunks creative company here are many variation generators
                                                on the</p>
                                            <div class="button">
                                                <a href="services.html" class="btn primary">Our Services</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Story -->
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
        function getToken() {
            var check_valid = $('#formInputRp')[0].checkValidity();
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
                            timerToken(90);
                        } else {
                            $('#inputform #alert_info #txt_alert').html(data.alert);
                            $("#inputform #alert_info").fadeIn("slow").delay(1000).slideUp('slow');
                        }
                    }
                });
            } else {
                alert('Isi semua data pada form yang tersedia!')
            }

            return false;
        }
    </script>

    <!-- Check Token & Save Data -->
    <script>
        $('#formInputRp').submit(function(e) {
            $("#loading-show").fadeIn("slow");
            var token = $('#inputToken').val();

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
                        saveData();
                    } else {
                        $('#checktoken #alert_info #txt_alert').html(data.alert);
                        $("#checktoken #alert_info").fadeIn("slow").delay(1000).slideUp('slow');
                    }
                }
            });
            return false;
        });

        function saveData() {
            var form = $('#formInputRp')[0];
            var formData = new FormData(form); //membuat form data baru
            $.ajax({
                type: "POST",
                url: "{{ base_url('landing/izinpenelitian/saverpl') }}",
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
        function timerToken(time = 90) {
            timeleft = time;
            tokenTimer = setInterval(function() {
                var numb = n(timeleft);
                $('#checktoken #timertoken').html(numb);

                timeleft -= 1;
                if (timeleft == -1) {
                    clearInterval(tokenTimer);
                    $('#formInputRp')[0].reset();
                    $('#checktoken').slideUp();
                    $('#inputform').delay(500).slideDown();
                }
            }, 1000);
        }

        function n(n) {
            return n > 9 ? "" + n : "0" + n;
        }
    </script>
@endpush
