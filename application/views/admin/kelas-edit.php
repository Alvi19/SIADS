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

      <form action="<?php echo base_url() . 'kelas/update'; ?>" method="post">
        <input class="form-control form-control-sm  mb-3" id="id" name="id" type="hidden" value="<?php echo $kelas->id ?>">
        <input class="form-control form-control-sm  mb-3" id="kode_kelas" name="kode_kelas" type="text" required placeholder="Masukan Kode Kelas" value="<?= $kelas->kode_kelas ?>">
        <input class="form-control form-control-sm  mb-3" id="nama_kelas" name="nama_kelas" type="text" required placeholder="Masukan Nama Kelas" value="<?= $kelas->nama_kelas ?>">
        <input class="form-control form-control-sm  mb-3" id="jumlah" name="jumlah" type="text" required placeholder="Jumlah" value="<?= $kelas->jumlah ?>">

        <a href="<?= base_url('kelas'); ?>" class="btn btn-outline-primary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>


      </form>
    </div>

  </div>
</div>
</div>










<!-- footer -->
</div>