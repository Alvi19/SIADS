     <!-- Container Fluid-->
     <div class="container-fluid min-vh-100" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $judul;?></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('transaksi');?>">Transaksi</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
            </ol>
          </div>   
          <a href="<?php echo base_url('/Transaksi/bukti') ?>/<?php echo $queryPembayar->id ?>" class="btn btn-sm btn-danger">Cek Bukti Pembayaran</a>
          <button type="button"  class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal2"
                            id="#myBtn2">
                            Konfirmasi
          </button>
          <hr>
          <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center right-content-between">
          <?php 

          ?>
          <th>Nama   : </th> <th><?php echo $queryUserEdit->nama; ?></th><br>
          <th>NISN   : </th> <th><?php echo $queryUserEdit->nisn; ?></th><br>
          <th>Kelas  : </th> <th><?php echo $queryUserEdit->nama_kelas; ?></th><br>
          <th>Tahun Ajaran   : </th> <th><?php echo $queryUserEdit->tahun_ajaran; ?></th><br>
          <th>Status Pembayaran   : </th> <th><?php echo $queryUserEdit->status; ?></th><br>
          <th>Sisa Pembayaran   : </th> <th><?php echo rupiah($queryPembayar->biaya ?? 0); ?></th><br>
          
          
        </div>
        </div>
       
        <!-- <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center right-content-between">
          <th>Sisa Pembayaran   : </th> <th><?php echo rupiah($queryPembayar->biaya ?? 0); ?></th><br>
       </div> -->
        </div>
       

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel2">PEMBAYARAN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form action="<?php echo base_url() . 'Transaksi/transaksi/' .$queryPembayar->id; ?>" method="post">
                <div class="form-group col-12">
                    <label for="id_siswa">NISN Siswa</label>
                    <input type="text" name="nisn" id="nisn" class="form-control"readonly value="<?php echo $queryUserEdit->nisn; ?>">
                </div>
                <div class="form-group col-12">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $queryUserEdit->nama; ?>" readonly>
                </div>
                <div class="form-group col-12">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" value="<?php echo $queryUserEdit->nama_kelas; ?>" readonly>
                </div>
                <div class="form-group col-12">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal"   name="tanggal"  value="<?php echo $queryPembayar->tanggal; ?>">
                </div>
                <div class="form-group col-12">
                    <label for="setoran">Jumlah Setoran</label>
                    <input type="text" class="form-control" id="setoran" required name="setoran" placeholder="Masukan Nominal">
                </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-outline-success" value="simpan">Bayar</button>
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  
                </div>
                </form>
              </div>
         </div>
    </div>