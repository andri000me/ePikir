<!-- Start Form Rekomendasi Pengabdian -->
<section id="contact-us tahap-1" class="contact-us section">
    <div class="container px-0">
        <div class="row">
            <div class="col-12">
                <div class="contact-main" style="margin-top: -20px">
                    <div class="row">
                        <!-- Rekomendasi Pengabdian Form -->
                        <div class="col-lg-8 col-12">
                            <div class="form-main">
                                <div class="text-content">
                                    <h2>Rekomendasi Pengabdian</h2>
                                </div>

                                {!! form_open_multipart(base_url('landing/izinpengabdian/saverpb'), 'class="form" id="formInputRpb"') !!}
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

                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama_pemohon"
                                                autocomplete="on" placeholder="Nama lengkap pemohon" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pekerjaan_pemohon"
                                                autocomplete="on" placeholder="Pekerjaan pemohon" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="alamat_pemohon" rows="2"
                                                placeholder="Alamat lengkap pemohon" autocomplete="on"
                                                style="height: unset !important;" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email_pemohon"
                                                autocomplete="on" placeholder="Email pemohon" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input type="text" id="no_telp_pemohon" class="form-control"
                                                name="no_telp_pemohon" placeholder="Nomor WhatsApp pemohon"
                                                maxlength="14" autocomplete="on" onkeypress="return inputAngka(event);"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="tujuan" rows="2"
                                                placeholder="Tujuan kegiatan pengabdian masyarakat" autocomplete="on"
                                                style="height: unset !important;" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="lokasi" rows="2"
                                                placeholder="Lokasi kegiatan pengabdian masyarakat" autocomplete="on"
                                                style="height: unset !important;" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="input-daterange input-group date-range"
                                            style="height: 50px; margin-bottom: 25px">
                                            <div class="form-group w-100">
                                                <input type="text" class="form-control" id="tgl_pelaksanaan_mulai"
                                                    name="tgl_pelaksanaan_mulai" placeholder="Tgl Pelaksanaan Awal"
                                                    autocomplete="off" {{-- value="{{ date('d/m/Y') }}" --}} style="border-radius: 0px"
                                                    required />
                                            </div>
                                            <div class="input-group-append" style="padding: 12px; background: #2e2751;">
                                                <span class="input-group-text text-white"
                                                    style="padding: 5px">SAMPAI</span>
                                            </div>
                                            <div class="form-group w-100">
                                                <input type="text" class="form-control" id="tgl_pelaksanaan_akhir"
                                                    name="tgl_pelaksanaan_akhir" placeholder="Tgl Pelaksanaan Akhir"
                                                    autocomplete="off" {{-- value="{{ date('d/m/Y') }}" --}} style="border-radius: 0px"
                                                    required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="penanggung_jawab"
                                                autocomplete="on" placeholder="Penanggung jawab" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama_instansi"
                                                autocomplete="on" placeholder="Nama perguruan tinggi/instansi" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-8 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="no_surat_permohonan"
                                                autocomplete="on"
                                                placeholder="Nomor surat permohonan dari perguruan tinggi" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker"
                                                name="tgl_surat_permohonan" placeholder="Tanggal surat"
                                                autocomplete="off" style="border-radius: 0px" required />
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
                                            <span id="txt_alert">Token expired 90 detik</span><br>
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
                        <!--/ End Rekomendasi Pengabdian Form -->

                        <!-- Alur Permohonan -->
                        <div class="col-lg-4 col-12">
                            <div class="contact-address">
                                <!-- Address -->
                                <div class="contact">
                                    <h2>Alur Permohonan</h2>
                                    <ul class="address rules">
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div>Pemohon mengisi form secara lengkap</div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Nomor HP harus
                                                valid dan terdaftar WhatsApp, untuk menerima
                                                kode token
                                            </div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Upload lampiran berkas kelengkapan
                                                dalam satu file (<b>pdf</b>) yang berisi :
                                            </div>
                                            <ul>
                                                <li>Scan pernyataan kesediaan menjadi lokasi pengabdian masyarakat (KKN)
                                                    dari desa (yang sudah ditandatangani kepala desa)</li>
                                                <li>Scan surat pengantar dari perguruan tinggi/instansi</li>
                                                <li>Scan KTP penanggung jawab</li>
                                                <li>Daftar peserta/anggota</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Admin KESBANGPOL akan melakukan validasi
                                            </div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Pemohon menerima notifikasi melalui
                                                WhatsApp & Email (disetujui/tidak disetujui)
                                            </div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Jika disetujui,
                                                pemohon mengambil <b>Surat Rekomendasi</b> ke kantor KESBANGPOL
                                                dengan membawa berkas kelengkapan sesuai yg diupload
                                            </div>
                                        </li>
                                        <li>
                                            <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                            <div style="padding-left: 25px;">Lanjut tahap selanjutnya
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
<!--/ End Form Rekomendasi Pengabdian -->
