<?php $__env->startPush('modal'); ?>
    <div class="modal animated bounceInUp text-left" id="modal_detail" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div id="modal_header" class="modal-header bg-primary">
                    <h4 class="modal-title white" id="modal_title">Detail Permohonan Izin Penelitian</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    
                    
                    <table id="tbl_detail_rpl"
                        class="table table-hover table-bordered table-striped table-responsive d-lg-table">
                        <thead> </thead>
                    </table>

                    <div id="lampiran"> </div>
                </div>

                <div class="modal-footer">
                    <!-- <button type="button" id="btn_reset" class="btn btn-success waves-effect" onclick="tableToExcel('tbl_rincian', 'RincianBarangPengadaan', 'RincianBarangPengadaan.xls')">EXPORT (.XLS)</button> -->
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">KELUAR</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css_style'); ?>
    <style>
        #modal_detail #tbl_detail_rpl thead tr th {
            vertical-align: top;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        function showDetailModal(data) {
            var id = $(data).data().id;
            var nama = $(data).data().nama;
            var pekerjaan = $(data).data().pekerjaan;
            var alamat = $(data).data().alamat;
            var hp = $(data).data().hp;
            var email = $(data).data().email;
            var noipl = $(data).data().noipl;
            var penanggung = $(data).data().penanggung;
            var instansi = $(data).data().instansi;
            var lokasi = $(data).data().lokasi;
            var tujuan = $(data).data().tujuan;
            var file = $(data).data().file;
            var mulai = $(data).data().mulai;
            var akhir = $(data).data().akhir;
            var pengajuan = $(data).data().pengajuan;

            var tglpelaksana = mulai + " s/d " + akhir;
            if (mulai == akhir) {
                var tglpelaksana = mulai;
            }

            var list = "<tr> <th> Nomor </th> <td>" + noipl + "</td> </tr>" +
                "<tr> <th> Nama Lengkap </th> <td>" + nama + "</td> </tr>" +
                "<tr> <th> Pekerjaan </th> <td>" + pekerjaan + "</td> </tr>" +
                "<tr> <th> Alamat </th> <td>" + alamat + "</td> </tr>" +
                "<tr> <th> Nomor HP </th> <td>" + hp + "</td> </tr>" +
                "<tr> <th> Email </th> <td>" + email + "</td> </tr>" +
                "<tr> <th> Perguruan Tinggi/Instansi </th> <td>" + instansi + "</td> </tr>" +
                "<tr> <th> Penanggung Jawab </th> <td>" + penanggung + "</td> </tr>" +
                "<tr> <th> Lokasi Penelitian</th> <td>" + lokasi + "</td> </tr>" +
                "<tr> <th> Judul Penelitian </th> <td>" + tujuan + "</td> </tr>" +
                "<tr> <th> Tanggal Pelaksanaan </th> <td>" + tglpelaksana + "</td> </tr>" +
                "<tr> <th> Waktu Pengajuan </th> <td>" + pengajuan + "</td> </tr>";

            // var lampiran = '<iframe src="<?php echo e(base_url('upload/permohonan/ipl')); ?>/' + file +
            //     '" style = "width:100%; height:80vh;" frameborder = "0" > < /iframe>';

            var embed =
                '<iframe src="https://docs.google.com/gview?url=<?php echo e(base_url('upload/permohonan/rpl')); ?>/' + file +
                '&embedded=true" style = "width:100%; height:80vh;"></iframe>';

            $('#modal_detail #tbl_detail_rpl thead').html(list);
            $('#modal_detail #lampiran').html(embed);
            $('#modal_detail').modal({
                backdrop: 'static',
                keyboard: false
            });

        }
    </script>

<?php $__env->stopPush(); ?>
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/klinik/modal_detail.blade.php ENDPATH**/ ?>