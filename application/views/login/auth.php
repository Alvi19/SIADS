<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title><?= $title; ?> - Login </title>
  <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>/assets/css/ruang-admin.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                  <img src="<?php echo base_url(); ?>/assets/img/logo/logo.jpg" height="100" width="100">
                  </br>
                  <br>
                    <h1 class="h4 text-gray-900 mb-4">LOGIN PETUGAS </h1>
                  </div>
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"> </div>
                  <form class="user" action="<?php echo base_url().'Auth/proses_login/' ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" id="username" name="username" 
                        placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                   
                    <div class="form-group">
                    <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" type="submit">MASUK</button>
                    </div>
                    <hr>
                  
                  </form>
                  <a href="/AuthSiswa"><button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">LOGIN SISWA DISINI</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/ruang-admin.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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