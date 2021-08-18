<!-- Footer -->
<footer id="footer" class="footer wow fadeIn" style="background-image:url('<?php echo e(assets_front); ?>images/map.png')">
    <!-- Top Arrow -->
    <div class="top-arrow">
        <a href="#header" class="btn"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--/ End Top Arrow -->
    <!-- Footer Top -->
    <div class="footer-top" style="padding: 50px 0 50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- About Widget -->
                            <div class="single-widget about">
                                <h2>Kontak Kami</h2>
                                <p>BAPPEDA & LITBANGDA Pemda Kabupaten Magelang</p>
                                <ul class="list">
                                    <li><i class="fa fa-map-marker"></i>Jln. Soekarno Hatta No. 59 Kota Mungkid</li>
                                    <li><i class="fa fa-phone"></i>Phone: <a href="tel:0293788181">(0293)-788181</a>
                                    </li>
                                    <li><i class="fa fa-fax"></i>Fax: (0293) - 788122</li>
                                    <li><i class="fa fa-envelope"></i>Email: <a
                                            href="mailto:bappeda@magelangkab.go.id">bappeda@magelangkab.go.id</a></li>
                                </ul>
                            </div>
                            <!--/ End About Widget -->
                        </div>
                        <div class="col-12">
                            <!-- About Widget -->
                            <div class="single-widget about">
                                <h2>Profil</h2>
                                <ul class="list">
                                    <li><a href="<?php echo e(base_url('landing/definisi')); ?>"><i
                                                class="fa fa-caret-right"></i>Definisi</a></li>
                                    <li><a href="<?php echo e(base_url('landing/tugaspokok')); ?>"><i
                                                class="fa fa-caret-right"></i>Tugas Pokok & Fungsi</a></li>
                                    <li><a href="<?php echo e(base_url('landing/organisasi')); ?>"><i
                                                class="fa fa-caret-right"></i>Struktur Organisasi</a></li>
                                </ul>
                            </div>
                            <!--/ End About Widget -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- Links Widget -->
                            <div class="single-widget about">
                                <h2>Statistik Pengunjung</h2>
                                <ul class="list">
                                    <li class="row">
                                        <div class="col-4">
                                            <i class="fa fa-users"></i> Hari Ini
                                        </div>
                                        <div class="col-2">:</div>
                                        <div class="col-3 text-right"><?php echo e($p_hari_ini); ?></div>
                                    </li>
                                    <li class="row">
                                        <div class="col-4">
                                            <i class="fa fa-users"></i> Kemarin
                                        </div>
                                        <div class="col-2">:</div>
                                        <div class="col-3 text-right"><?php echo e($p_kemarin); ?></div>
                                    </li>
                                    <li class="row">
                                        <div class="col-4">
                                            <i class="fa fa-users"></i> Bulan Ini
                                        </div>
                                        <div class="col-2">:</div>
                                        <div class="col-3 text-right"><?php echo e($p_bln_ini); ?></div>
                                    </li>
                                    <li class="row">
                                        <div class="col-4">
                                            <i class="fa fa-users"></i> Tahun Ini
                                        </div>
                                        <div class="col-2">:</div>
                                        <div class="col-3 text-right"><?php echo e($p_thn_ini); ?></div>
                                    </li>
                                    </li>
                                    <li class="row">
                                        <div class="col-4">
                                            <i class="fa fa-users"></i> Total
                                        </div>
                                        <div class="col-2">:</div>
                                        <div class="col-3 text-right"><?php echo e($p_total); ?></div>
                                    </li>
                                </ul>
                            </div>
                            <!--/ End Links Widget -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- About Widget -->
                            <div class="single-widget about">
                                <h2>Layanan</h2>
                                <ul class="list">
                                    <li><a href="<?php echo e(base_url('landing/izinpenelitian')); ?>"><i
                                                class="fa fa-caret-right"></i>Izin Penelitian</a></li>
                                    <li><a href="<?php echo e(base_url('landing/izinpengadian')); ?>"><i
                                                class="fa fa-caret-right"></i>Izin Pengabdian Masyarakan</a></li>
                                    <li><a href="<?php echo e(base_url('landing/klinik')); ?>"><i
                                                class="fa fa-caret-right"></i>Klinik Penelitian</a></li>
                                </ul>
                            </div>
                            <!--/ End About Widget -->
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-12 map-box" style="margin-top: 30px">
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15819.379724473827!2d110.2185791!3d-7.5918511!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x383a31a9abc50853!2sBappeda%20Dan%20Litbangda%20Kabupaten%20Magelang!5e0!3m2!1sid!2sid!4v1628813928425!5m2!1sid!2sid"
                            width="100%" height="250" style="border:5px solid #ff9800;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div><!-- /.about-img -->
                    <div class="button">
                        <a href="https://goo.gl/maps/AZR1L5jFyfB9G6qN6" target="_blank" class="btn"><i
                                class="fa fa-map-marker"></i> Buka di Google Map</a>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-top">
                        <!-- Social -->
                        <ul class="social">
                            <li title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li title="Twiiter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li title="Instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li title="Youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        <!--/ End Social -->
                        <!-- Copyright -->
                        <div class="copyright">
                            <p>&copy; <?php echo e(date('Y')); ?> All Right Reserved. Design & Development By <a
                                    href="https://diskominfo.magelangkab.go.id">Diskominfo Kab Magelang</a></p>
                        </div>
                        <!--/ End Copyright -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Bottom -->
</footer>
<!--/ End footer -->
<style>
    .map-box .button {
        position: relative;
        top: 0px;
        margin-top: -12px;
        width: 100%;
        background: #ff9800;
        padding-block: 10px;
        padding-inline: 50px;
    }

    .map-box .button .btn {
        background: #ff9800;
        border-radius: 30px;
        width: 100%;
    }

    .map-box .button .btn:hover {
        background: #fff;
        color: #2e2751;
    }

</style>
<?php $__env->startPush('css_script'); ?>

<?php $__env->stopPush(); ?>
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/template/footer.blade.php ENDPATH**/ ?>