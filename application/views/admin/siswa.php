<?php

$auth = $this->session->userdata('Auth');

?>

       <!-- Container Fluid-->
        <div class="container-fluid min-vh-100" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $judul;?></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>             
              <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
            </ol>
          </div>
          <button type="button"  class="btn btn-success btn-sm <?=$auth->akses == 1 ? '' : 'd-none'?>" data-toggle="modal" data-target="#exampleModal"
                    id="#myBtn">
                    <i class="fas fa-plus"></i>
                     Tambah Data Siswa
                  </button>
              <br> 
              <br>
          <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Detail Data Siswa</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Orang Tua</th>
                        <th>Alamat</th>
                        <th>No Handphone</th>
                        <th>Tahun Ajaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        $no = 0;

                        foreach ($querySis as $value) {
                            $no++
                        ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $value->nisn; ?></td>
                        <td><?php echo $value->nama; ?></td>
                        <td><?php echo $value->nama_kelas; ?></td>
                        <td><?php echo $value->tanggal_lahir; ?></td>
                        <td><?php echo $value->nama_orangtua; ?></td>
                        <td><?php echo $value->alamat; ?></td>
                        <td><?php echo $value->no_hp; ?></td>
                        <td><?php echo $value->tahun_ajaran; ?></td>
                        <td><?php echo $value->status; ?></td>
                        
                       
                        <td class="<?=$auth->akses == 1 ? '' : 'd-none'?>">
                        <button type="button"  class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal3"
                            id="#myBtn3">
                            <i class="fas fa-trash"></i>
                           
                        </button>
                       
                        <a href="<?php echo base_url('/Siswa/editsiswa') ?>/<?php echo $value->id ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-pen"></i>
                        </a>
                        </td>
                    </tr>
                    <?php
                     }
                ?>
                        </tbody>
                  </table>
                    </div>
                    </div></div>
                     
           
                   
         <!-- Modal -->
         <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Pemberitahuan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Apakah anda yakin akan menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  <a href="<?php echo base_url('/Siswa/fungsiDelete') ?>/<?php echo $value->id ?>" title="Hapus" class="btn btn-danger alert_notif btn-icon-text"> Hapus</a>
                </div>
              </div>
            </div>
            </div>
                     
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Siswa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form action="<?php echo base_url() . 'Siswa/tambah_aksi'; ?>" method="post">
                <label class="nisn sm-2">NISN</label> 
                <input class="form-control form-control-sm  mb-3" required id="nisn" name="nisn" type="text" placeholder="Masukan NISN">
                <label class="nisn sm-2">Password Login</label> 
                <input class="form-control form-control-sm  mb-3" required id="password" name="password" type="password" placeholder="Masukan Password untuk siswa login">
                <label class="nama sm-2">Nama Lengkap</label> 
                <input class="form-control form-control-sm  mb-3" required id="nama" name="nama" type="text" placeholder="Masukan Nama Siswa">
                <label class="nama_kelas">Kelas</label> 
                <select class="form-control form-control-sm mb-3" required name="nama_kelas" id="nama_kelas">
                    <option value="">Masukan Kelas</option>
                    <?php foreach($queryKel as $row):?>
                    <option value="<?php echo $row->nama_kelas;?>"><?php echo $row->nama_kelas;?></option>
                    
                    <?php endforeach;?>
                </select> 
                <label class="tanggal_lahir sm-2">Tanggal Lahir</label> 
                <input class="form-control form-control-sm  mb-3" required id="tanggal_lahir" name="tanggal_lahir" type="date" placeholder="Masukan Nama Siswa">

                <label class="nama_orangtua sm-2">Nama Orang Tua</label> 
                <input class="form-control form-control-sm  mb-3" required id="nama_orangtua" name="nama_orangtua" type="text" placeholder="Masukan Nama Orang Tua Siswa">

                <label for="alamat">Alamat</label> 
                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>

                <label class="nama_orangtua sm-2">Nomor Handphone</label> 
                <input class="form-control form-control-sm  mb-3" required id="no_hp" name="no_hp" type="number" placeholder="Masukan Nomor Handphone">
               
               

                <label class="tahun_ajaran sm-2">Tahun Ajaran</label> 
                <select class="form-control form-control-sm mb-3" required name="tahun_ajaran" id="tahun_ajaran">
                    <option value="">Masukan Tahun Ajaran</option>
                    <?php foreach($queryPeriode as $row):?>
                    <option value="<?php echo $row->tahun_ajaran;?>"><?php echo $row->tahun_ajaran;?></option>
                    
                    <?php endforeach;?>
                </select>  
                <label class="status sm-2">Status</label> 
                <select class="form-control form-control-sm mb-3" required name="status" id="status">
                    <option value="">Pilih Salah Satu</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  
                </select>  
                <div class="modal-footer">
              
                  <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">  <i class="fas fa-exclamation-triangle"></i> Batal</button>
                  <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fas fa-check"></i> Simpan</button>
                </div>
              </div>
            </form>
            </div>
          </div>
                    </div>
                    </div>
                    </div>

          <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel2">Edit Data Siswa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form action="<?php echo base_url() . 'Siswa/tambah_aksi'; ?>" method="post">
                <input class="form-control form-control-sm  mb-3" required id="nisn" name="nisn" type="text" value="<?php echo $queryEdit->nisn?>">
                <input class="form-control form-control-sm  mb-3" required id="nama" name="nama" type="text" value="">
                <select class="form-control form-control-sm mb-3" required name="nama_kelas" id="nama_kelas"">
                    <?php foreach($queryKel as $row):?>
                    <option value="<?php echo $row->nama_kelas;?>"><?php echo $row->nama_kelas;?></option>
                    
                    <?php endforeach;?>
                </select>  
                </select>
                <input class="form-control form-control-sm  mb-3" required id="tahun_ajaran" name="tahun_ajaran" type="text" value="">
                <input class="form-control form-control-sm  mb-3" required id="biaya" name="biaya" type="text" value="">
 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              
            </form>
            </div> -->
                   
                   
                  
                    
       <!-- Page level plugins -->
  <script src="<?= base_url()?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
 
<script>
  $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>