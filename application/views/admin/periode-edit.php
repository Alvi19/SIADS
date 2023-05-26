<?php

$auth = $this->session->userdata('Auth');

?>


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

      <form action="<?php echo base_url() . 'Periode/update'; ?>" method="post">
        <input class="form-control form-control-sm  mb-3" id="id" name="id" type="hidden" value="<?php echo $periode->id ?>">
        <input class="form-control form-control-sm  mb-3" id="tahun_ajaran" name="tahun_ajaran" type="text" value="<?php echo $periode->tahun_ajaran ?>" placeholder="Tahun Jaran">
        <select class="form-control form-control-sm mb-3" required name="statu" id="statu">
          <option value="" disabled selected>Pilih Status</option>
          <option value="Aktif">AKTIF</option>
          <option value="Tidak Aktif">TIDAK AKTIF</option>
        </select>


        <a href="<?= base_url('periode'); ?>" class="btn btn-outline-primary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>


      </form>
    </div>

  </div>
</div>
</div>










<!-- footer -->
</div>