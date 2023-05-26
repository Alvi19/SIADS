
       <!-- Container Fluid-->
       <div class="container-fluid min-vh-100" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $judul;?></h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>             
              <li class="breadcrumb-item active" aria-current="page"><?= $judul;?></li>
            </ol>
          </div>



          <div class="modal-body">
                <form action="<?php echo base_url() . 'Siswa/fungsiEdit'; ?>" method="post">
                <input class="form-control form-control-sm  mb-3"  id="id" name="id" type="hidden" value="<?php echo $querySis->id?>">
                <input class="form-control form-control-sm  mb-3"  id="nisn" name="nisn" type="text" value="<?php echo $querySis->nisn?>">
                <input class="form-control form-control-sm  mb-3"  id="nama" name="nama" type="text" value="<?php echo $querySis->nama?>">
                <input class="form-control form-control-sm  mb-3"  id="nama_kelas" name="nama_kelas" type="text" value="<?php echo $querySis->nama_kelas?>">
                            <input class="form-control form-control-sm  mb-3" required id="tanggal_lahir" name="tanggal_lahir" type="text" value="<?php echo $querySis->tanggal_lahir?>">
                <input class="form-control form-control-sm  mb-3"  id="nama_orangtua" name="nama_orangtua" type="text" value="<?php echo $querySis->nama_orangtua?>">
                <input class="form-control form-control-sm  mb-3"  id="tanggal_lahir" name="tanggal_lahir" type="text" value="<?php echo $querySis->tanggal_lahir?>">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $querySis->alamat?></textarea>
                <label for="tahun_ajaran">No Handphone</label>
                <input class="form-control form-control-sm  mb-3"  id="no_hp" name="no_hp" type="text" value="<?php echo $querySis->no_hp?>">
                <label for="tahun_ajaran">Tahun Ajaran</label>
                <input class="form-control form-control-sm  mb-3"  id="tahun_ajaran" name="tahun_ajaran" type="text" value="<?php echo $querySis->tahun_ajaran?>">
                <input class="form-control form-control-sm  mb-3"   id="status" name="status" type="text" value="<?php echo $querySis->status?>">
               
                Ubah Password Siswa
                <input class="form-control form-control-sm  mb-3"  id="password" name="password" type="password" placeholder="Masukkan Password baru jika ingin diubah"> 
             
              
                  <a href="<?= base_url('siswa');?>" class="btn btn-outline-primary" >Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
          
         
            </form>

                    </div>
                    </div>
</div>










<!-- footer --> 
</div>