  <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('Overview') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Gerbang Lamongan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('Overview') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->


      <!-- Nav Item - Utilities Collapse Menu -->
    
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Overview/lihatdata') ?>" >
          <i class="fas fa-fw fa-table"></i>
          <span>Lihat Data Penjual</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Overview/lihat_kategori') ?>" >
          <i class="fas fa-fw fa-table"></i>
          <span>Lihat Kategori</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Overview/lihatproduk') ?>" >
          <i class="fas fa-box-open"></i>
          <span>Lihat Produk</span></a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Overview/lihatproduk') ?>" >
          <i class="fas fa-book-open"></i>
          <span>Lihat Artikel</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
			<div class="sidebar-heading">
        Manajemen Website
      </div>
			<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
								<i class="fas fa-camera"></i>
                    <span>Manajemen Website</span></a>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" >
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="<?php echo site_url('Overview/manajemenwebsite') ?>">Ganti Banner</a>
												<a class="collapse-item" href="<?php echo site_url('Overview/iklan1') ?>">Ganti Iklan 1</a>
												<a class="collapse-item" href="<?php echo site_url('Overview/iklan2') ?>">Ganti Iklan 2</a>
                      
                    </div>
                </div>
            </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
