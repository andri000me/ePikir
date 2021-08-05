<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="navigation-header">
                <span data-i18n="nav.category.menu">Menu</span>
                <i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="menu"></i>
            </li>

            <li class="nav-item <?= (isset($active) && $active == '1' ? 'active' : '') ?>">
                <a href="<?= base_url('admin') ?>">
                    <i class="la la-home"></i>
                    <span class="menu-title">Dashboard</span>
                    <!-- <span class="badge badge badge-info badge-pill float-right mr-2">3</span> -->
                </a>
            </li>
            <li class="nav-item <?= (isset($active) && $active == '2' ? 'active' : '') ?>">
                <a href="javascript:void(0)">
                    <i class="la la-paste"></i>
                    <span class="menu-title">Permohonan</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item <?= (isset($active) && $active == '2.1' ? 'active' : '') ?>">
                        <a href="javascript:void(0)">Tambah Data</a>
                        <ul class="menu-content">
                            <?php
                            foreach ($data_surat as $key) {
                            ?>
                                <li class="<?= (isset($active) && $active == '2.1.' . $key['id_surat'] ? 'active' : '') ?>">
                                    <a class="menu-item" href="<?= base_url('admin/addPemohon/' . encode($key['id_surat'])) ?>"><?= $key['nama_surat'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item <?= (isset($active) && $active == '2.2' ? 'active' : '') ?>">
                        <a href="javascript:void(0)">List Data
                            <?php
                            if ($status_diproses_all['jml_status'] > 0) {
                            ?>
                                <span class="badge badge badge-primary badge-pill float-right mr-2"><?= $status_diproses_all['jml_status'] ?></span>
                            <?php } ?>

                            <?php
                            if ($status_diajukan_all['jml_status'] > 0) {
                            ?>
                                <span class="badge badge badge-info badge-pill float-right <?= ($status_diproses_all['jml_status'] == 0 ? 'mr-2' : '') ?>"><?= $status_diajukan_all['jml_status'] ?></span>
                            <?php } ?>
                        </a>
                        <ul class="menu-content">
                            <?php
                            foreach ($data_surat as $key) {
                            ?>
                                <li class="<?= (isset($active) && $active == '2.2.' . $key['id_surat'] ? 'active' : '') ?>">
                                    <a class="menu-item" href="<?= base_url('admin/dataPemohon/diajukan/' . encode($key['id_surat'])) ?>"><?= $key['nama_surat'] ?>
                                        <?php
                                        foreach ($status_diproses as $sts) {
                                            if ($sts['id_surat'] == $key['id_surat']) {
                                        ?>
                                                <span class="badge badge badge-primary badge-pill float-right"><?= $sts['jml_status'] ?></span>
                                        <?php }
                                        } ?>

                                        <?php
                                        foreach ($status_diajukan as $sts) {
                                            if ($sts['id_surat'] == $key['id_surat']) {
                                        ?>
                                                <span class="badge badge badge-info badge-pill float-right"><?= $sts['jml_status'] ?></span>
                                        <?php }
                                        } ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?= (isset($active) && $active == '4' ? 'active' : '') ?>">
                <a href="<?= base_url('admin/listSurat') ?>">
                    <i class="la la-envelope"></i>
                    <span class="menu-title">List Surat ke Dinkes</span>
                    <?php
                    if ($status_diproses_all['jml_status'] > 0) {
                    ?>
                        <span class="badge badge badge-warning badge-pill float-right"><?= $status_diproses_all['jml_status'] ?></span>
                    <?php } ?>
                </a>
            </li>
            <li class="nav-item <?= (isset($active) && $active == '3' ? 'active' : '') ?>">
                <a href="javascript:void(0)">
                    <i class="la la-pencil-square"></i>
                    <span class="menu-title">Perizinan</span>
                </a>
                <ul class="menu-content">
                    <?php
                    foreach ($data_surat as $key) {
                    ?>
                        <li class="<?= (isset($active) && $active == '3.' . $key['id_surat'] ? 'active' : '') ?>">
                            <a class="menu-item" href="<?= base_url('admin/perizinan/diterima/' . encode($key['id_surat'])) ?>"><?= $key['nama_surat'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </li>

        </ul>
    </div>
</div>