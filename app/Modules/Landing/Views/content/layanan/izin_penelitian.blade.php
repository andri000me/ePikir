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
                                <li class="nav-item col-lg-6"><a class="nav-link active" data-toggle="tab" href="#tab1"
                                        role="tab">Tahap I <br>Permohonan Rekomendasi Penelitian</a></li>
                                <li class="nav-item col-lg-6"><a class="nav-link" data-toggle="tab" href="#tab2"
                                        role="tab">Tahap II
                                        <br>Permohonan Izin Penelitian</a></li>
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
                                                                <form class="form" method="post" action="mail/mail.php">
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    name="nama_pemohon"
                                                                                    placeholder="Nama lengkap pemohon"
                                                                                    required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    name="pekerjaan_pemohon"
                                                                                    placeholder="Pekerjaan pemohon"
                                                                                    required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12 col-12">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control"
                                                                                    name="alamat_pemohon" rows="2"
                                                                                    placeholder="Alamat lengkap pemohon"
                                                                                    style="height: unset !important;"
                                                                                    required></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12 col-12">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control" name="lokasi"
                                                                                    rows="2"
                                                                                    placeholder="Lokasi kegiatan penelitian"
                                                                                    style="height: unset !important;"
                                                                                    required></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12 col-12">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control" name="tujuan"
                                                                                    rows="2"
                                                                                    placeholder="Tujuan kegiatan penelitian"
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
                                                                                        placeholder="DD/MM/YYYY"
                                                                                        value="{{ date('d/m/Y') }}"
                                                                                        style="border-radius: 0px"
                                                                                        required />
                                                                                </div>
                                                                                <div class="input-group-append"
                                                                                    style="padding: 12px; background: #2e2751;">
                                                                                    <span
                                                                                        class="input-group-text text-white"
                                                                                        style="padding: 5px">SAMPAI</span>
                                                                                </div>
                                                                                <div class="form-group w-100">
                                                                                    <input type="text" class="form-control"
                                                                                        placeholder="DD/MM/YYYY"
                                                                                        value="{{ date('d/m/Y') }}"
                                                                                        id="tgl_pelaksanaan_akhir"
                                                                                        name="tgl_pelaksanaan_akhir"
                                                                                        style="border-radius: 0px"
                                                                                        required />
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-lg-6 col-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    name="penanggung_jawab"
                                                                                    placeholder="Penanggung jawab" required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <input type="file"
                                                                                    data-validation-required-message="Upload file lampiran"
                                                                                    name="file_lampiran" class="dropify"
                                                                                    data-height="150"
                                                                                    data-max-file-size="5120K"
                                                                                    data-min-width="300"
                                                                                    data-min-height="250"
                                                                                    data-allowed-file-extensions="pdf"
                                                                                    style="height: unset" />
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-lg-12 col-12">
                                                                            <div class="form-group button">
                                                                                <button type="submit"
                                                                                    class="btn primary">Submit
                                                                                    Message</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
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

@push('css_plugin')
    <link rel="stylesheet"
        href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/style-datepicker.css' }}">
    <link rel="stylesheet" href="{{ assets_url . 'app-assets/vendors/dropify/dist/css/dropify.min.css' }}">
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
@endpush

@push('js_plugin')
    <script src="{{ assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js' }}"></script>
    <script src="{{ assets_url . 'app-assets/vendors/dropify/dist/js/dropify.min.js' }}"></script>
@endpush

@push('js_script')
    <script>
        $('.date-range').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd/mm/yyyy',
            toggleActive: true
        });
    </script>

    <script type="text/javascript">
        var drEvent = $('.dropify').dropify({
            messages: {
                default: '<center>Upload foto disini (<b>.jpg, .jpeg</b>).</center>',
                error: '<center>Maksimal ukuran file 5 MB.<br> Resolusi minimal 300x250 px </center>',
            },
            error: {
                fileSize: '<center>Maksimal ukuran file 5 MB.</center>',
                minWidth: '<center>Minimal resolusi gambar 300 x 250.</center>',
                // maxWidth: 'The image width is too big (@{{ value }}px max).',
                minHeight: '<center>Minimal resolusi gambar 300 x 250.</center>',
                // maxHeight: 'The image height is too big (@{{ value }}px max).',
                imageFormat: 'The image format is not allowed (@{{ value }} only).'
            }
        });

        // drEvent.on('dropify.beforeClear', function(event, element) {
        //     var id = element.element.id;
        //     var ids = id.split("_");
        //     var num = ids[2];

        //     $("#foto_kejadian_old_" + num).val('');
        // });

        // drEvent.on('dropify.errors', function(event, element) {
        //     var id = element.element.attributes.id.nodeValue;
        //     var ids = id.split("_");
        //     var num = ids[2];

        //     $("#foto_kejadian_old_" + num).val('');
        // });
    </script>
@endpush
