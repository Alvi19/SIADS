<!-- Container Fluid-->
<div class="container-fluid min-vh-100" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $judul; ?></li>
    </ol>
  </div>



  <div class="card">
    <div class="card-body">

      <form action="<?php echo base_url() . 'Petugas/update'; ?>" method="post">
        <input class="form-control form-control-sm  mb-3" id="id" name="id" type="hidden" value="<?php echo $petugas->id ?>">
        <input class="form-control form-control-sm  mb-3" id="username" name="username" type="text" required placeholder="Masukan Username" value="<?= $petugas->username ?>">
        <select class="form-control form-control-sm mb-3" required name="akses" id="akses">
          <option value="" disabled selected>Pilih Role</option>
          <option value="1" <?= $petugas->akses == 1 ? 'selected' : '' ?>>Admin</option>
          <option value="2" <?= $petugas->akses == 2 ? 'selected' : '' ?>>bendahara</option>
        </select>


        Ubah Password Petugas
        <input class="form-control form-control-sm  mb-3" id="password" name="password" type="password" placeholder="Masukkan Password baru jika ingin diubah">


        <a href="<?= base_url('petugas'); ?>" class="btn btn-outline-primary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>


      </form>
    </div>

  </div>
</div>
</div>










<!-- footer -->
</div>