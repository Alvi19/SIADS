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
        <a class="nav-link" href="<?= base_url('dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      
     
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('tagihan')?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Tagihan</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pembayaran')?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Pembayaran</span></a>
      </li>
     
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->