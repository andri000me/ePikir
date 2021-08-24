

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template.breadcumbs',['group' => 'Layanan', 'label' => 'Izin Penelitian'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <div class="contact-main">
                        <div class="row">
                            <!-- Contact Form -->
                            <div class="col-lg-8 col-12">
                                <div class="form-main">
                                    <div class="text-content">
                                        <h2>Izin Penelitian</h2>
                                    </div>
                                    <form class="form" method="post" action="mail/mail.php">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Full Name"
                                                        required="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Your Email"
                                                        required="required">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <select name="subject">
                                                        <option class="option" value="1">Starting a new business</option>
                                                        <option class="option" value="2">Startup Consultation</option>
                                                        <option class="option" value="3">Financial Consultation</option>
                                                        <option class="option" value="4">Business Consultation</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <textarea name="message" rows="6"
                                                        placeholder="Type Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn primary">Submit Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--/ End Contact Form -->
                            <!-- Contact Address -->
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
                                                <div>Nomor HP harus valid dan terdaftar WhatsApp</div>
                                            </li>
                                            <li>
                                                <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                                <div style="padding-left: 25px;">Upload lampiran berkas
                                                    kelengkapan
                                                    dalam satu file (<b>pdf</b>) yang berisi :</div>
                                                <ul>
                                                    <li>Scan KTP</li>
                                                    <li>Scan surat pengantar dari perguruan
                                                        tinggi/instansi
                                                    </li>
                                                    <li>Proposal penelitian</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                                <div style="padding-left: 25px;">Admin KESBANGPOL akan melakukan
                                                    validasi</div>
                                            </li>
                                            <li>
                                                <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                                <div style="padding-left: 25px;">Pemohon menerima notifikasi melalui
                                                    WhatsApp
                                                </div>
                                            </li>
                                            <li>
                                                <div class="float-left"><i class="fa fa-check-square-o"></i></div>
                                                <div style="padding-left: 25px;">Jika disetujui, pemohon mengambil <b>Surat
                                                        Rekomendasi</b> ke kantor KESBANGPOL dengan membawa berkas
                                                    kelengkapan
                                                    sesuai yg diupload
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <!--/ End Address -->
                                    <!-- Social -->
                                    
                                    <!--/ End Social -->
                                </div>
                            </div>
                            <!--/ End Contact Address -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css_style'); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/layanan/izin_penelitian.blade.php ENDPATH**/ ?>