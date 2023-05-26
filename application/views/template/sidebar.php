 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/')?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url(); ?>/assets/img/logo/logo.JPG">
        </div>
        <div class="sidebar-brand-text mx-3">SIAD SMA</div>
      </a>
   
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Master Data</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master Data</h6>
            <a class="collapse-item" href="<?= base_url('petugas')?>">Data Petugas</a>
            <a class="collapse-item" href="<?= base_url('kelas')?>">Data Kelas</a>
            <a class="collapse-item" href="<?= base_url('mastertagihan')?>">Data Tagihan</a>
            <a class="collapse-item" href="<?= base_url('periode')?>">Tahun Ajaran</a>

          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('siswa')?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Siswa</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('transaksi')?>">
          <i class="fas fa-fw fa-pen"></i>
          <span>Transaksi</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('laporan')?>">
          <i class="fas fa-fw fa-book"></i>
          <span>laporan</span></a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pengguna')?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Managemen Akun Siswa</span></a>
      </li> -->
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->