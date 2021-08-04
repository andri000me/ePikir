  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; <?= date('Y') ?> <a class="text-bold-800 grey darken-2" href="https://diskominfo.magelangkab.go.id" target="_blank">DISKOMINFO </a> Kabupaten Magelang. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>

  <div class="modal animated bounceIn text-left" id="show_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning white">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <i class="la la-warning warning" style="font-size: 70pt;"></i>
          <h2 style="font-weight: bold;">
            Info Permohonan
          </h2>
          <br>
          <div>
            <?php if (isset($flash) && !empty($flash)) { 
            foreach ($flash as $val) {
              if ($val['status_pemohon'] == 'diajukan') {
            ?>
                <div class="alert alert-info">Terdapat <b><?= $val['jml_status'] ?></b> permohonan baru yang belum diproses ke Dinkes.</div>
              <?php }
              if ($val['status_pemohon'] == 'diproses') {
              ?>
                <div class="alert alert-primary">Terdapat <b><?= $val['jml_status'] ?></b> permohonan yang butuh verfikasi diterima atau ditolak.</div>
            <?php }
            }} ?>
          </div>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="la la-close"></i> Keluar</button>
        </div> -->
      </div>
    </div>
  </div>

  <?php
  if (isset($flash) && !empty($flash)) {
  ?>
    <script>
      setTimeout(function(){ $('#show_info').modal('show'); }, 700);
    </script>
  <?php } ?>

  <?php if (isset($js)) { foreach ($js as $val) { ?>
    <script src="<?= $val ?>"></script>
  <?php }} ?>

  <?php
  if (isset($script)) {
    foreach ($script as $scr) {
  ?>
      <script type="text/javascript">
        <?= $scr ?>
      </script>
  <?php }
  } ?>

  <script type="text/javascript">
    function inputAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      // alert(charCode);
      if (charCode > 31 && (charCode < 46 || charCode > 57))
        return false;
      return true;
    }
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#alts').fadeTo(3000, 500).slideUp(500);
    });
  </script>

  </body>

  </html>