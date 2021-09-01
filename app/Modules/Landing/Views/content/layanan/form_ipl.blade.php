<!-- Start Form Izin Penelitian -->
<section id="contact-us tahap-2" class="contact-us section">
    <div class="container px-0">
        <div class="row">
            <div class="col-12">
                <div class="contact-main" style="margin-top: -20px">
                    <div class="row">
                        <!-- Izin Penelitian Form -->
                        <div class="col-lg-8 col-12">
                            <div class="form-main">
                                <div class="text-content">
                                    <h2>Izin Penelitian</h2>
                                </div>

                                {!! form_open_multipart(base_url('landing/izinpenelitian/saveipl'), 'class="form" id="formInputIpl"') !!}
                                <div class="row" id="inputform">
                                    <div class="col-12">
                                        <div id="alert_info" class="alert alert-danger alert-dismissible"
                                            style="width: 100%; border-radius: 50px; text-align: center; display: none;">
                                            {{-- <button type="button" class="close"
                                                data-dismiss="alert"
                                                aria-hidden="true">&times;</button> --}}
                                            <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                                            <span id="txt_alert"></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="no_rpl" name="no_rpl"
                                                autocomplete="off" placeholder="Nomor Surat Rekomendasi" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="file" data-validation-required-message="Upload file lampiran"
                                                name="file_lampiran" class="dropify" data-height="150"
                                                accept="application/pdf" data-max-file-size="10240K"
                                                data-min-width="300" data-min-height="250"
                                                data-allowed-file-extensions="pdf" style="height: unset" required />
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="button" onclick="getToken(this)" class="btn primary">Kirim
                                                Token</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="checktoken" style="display: none;">
                                    <div class="col-12">
                                        <div id="alert_info" class="alert alert-danger alert-dismissible"
                                            style="width: 100%; border-radius: 50px; text-align: center; display: none;">
                                            {{-- <button type="button" class="close"
                                                data-dismiss="alert"
                                                aria-hidden="true">&times;</button> --}}
                                            <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                                            <span id="txt_alert"></span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div id="show_info" class="alert alert-success alert-dismissible"
                                            style="width: 100%; text-align: center;">
                                            <h4><i class="icon fa fa-clock-o"></i> <span id="timertoken">90</span></h4>
                                            <span id="txt_alert">Token expired 90
                                                detik</span><br>
                                            <span>Token dikirim ke WhatsApp Anda.</span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" id="inputToken" class="form-control text-center"
                                                name="token" autocomplete="off" placeholder="TOKEN" maxlength="6"
                                                onkeypress="return inputAngka(event);"
                                                style="font-size: 23pt; letter-spacing: 15px; font-weight: bold;">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group button">
                                            <button type="button" onclick="checkToken(this)"
                                                class="btn primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                                {!! form_close() !!}

                            </div>
                        </div>
                        <!--/ End Izin Penelitian Form -->

                        <!-- Alur Permohonan -->
                        <div class="col-lg-4 col-12">
                            <div class="contact-address">
                                <!-- Address -->
                                <div class="contact">
                                    <h2>Alur Permohonan</h2>
                                    <ul class="address rules">
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Isi nomor surat rekomendasi yang didapat
                                                dari KESBANGPOL </div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Upload file
                                                scan surat rekomendasi dalam satu file
                                                (<b>pdf</b>)
                                            </div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Admin DPMPTSP
                                                akan melakukan validasi</div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Pemohon menerima notifikasi melalui
                                                WhatsApp & Email (disetujui/tidak disetujui)
                                            </div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Jika disetujui, pemohon mengambil <b>Surat
                                                    Izin Penelitian</b> ke kantor DPMPTSP dengan membawa Surat
                                                Rekomendasi dari KESBANGPOL sesuai yg diupload
                                            </div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Pemohon menyampaikan Surat Izin Penelitian
                                                di BAPPEDA & LITBANGDA
                                            </div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Siap melaksanakan kegiatan penelitian
                                                dengan arahan dari BAPPEDA & LITBANGDA
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
<!--/ End Form Izin Penelitian -->
