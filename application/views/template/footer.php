
     <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-left my-auto">
            <span>Copyright &copy; <script> document.write(new Date().getFullYear()); </script> Sistem Informasi Administrasi Pembayaran Sekolah Berbasis Web
              <b><a href="home" target="_blank">- SMA PLUS NU Panguragan</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
      </div>
  </div>
       <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/ruang-admin.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script>
  
  
  </script>

  <!-- <script type="text/javascript">
    var rupiah = document.getElementById('saldo');
    rupiah.addEventListener('keyup', function(e){
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split             = number_string.split(','),
        sisa              = split[0].length % 3,
        rupiah            = split[0].substr(0, sisa),
        ribuan            = split[0].substr(sisa).match(/\d{3}/gi);
    if(ribuan){
        separator = sisa ? '.' : '';
        rupiah    += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
    </script> -->
        <?php 
          if($this->session->userdata('ntf_swal')) {
          ?>
            <script>
                  Swal.fire({
                    icon:"<?= $_SESSION['ntf_color']?>",
                    title:"<?= $_SESSION['ntf_title']?>",
                    text:"<?= $_SESSION['ntf_body']?>",
                    showConfirmButton:false,
                    timer:5000
                  },)
            </script>
        <?php } ?>
    </body>

    </html>