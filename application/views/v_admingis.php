 <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-home fa-3x"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Tata Usaha</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/adminweb/home_admin'); ?>">
          <i class="fas fa-fw fa-tachometer-alt "></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pengajuan Perjalanan Dinas
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Pengajuan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Jenis Pengajuan :</h6>
            <a class="collapse-item" href="<?php echo base_url('index.php/adminweb/list_pengajuan_internal'); ?>">Internal</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/adminweb/list_pengajuan_eksternal'); ?>">Eksternal</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/adminweb/tambah_pengajuan'); ?>">Tambah Pengajuan</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan Perjalanan Dinas
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Laporan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Laporan : </h6>
            <a class="collapse-item" href="<?php echo base_url('index.php/adminweb/list_laporan_sementara'); ?>">Sementara</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/adminweb/list_laporan_akhir'); ?>">Akhir</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/adminweb/list_laporan_pj'); ?>">Keuangan</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Pegawai
      </div>

      <!-- Nav Item - Pages Collapse Menu Pegawai-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-user"></i>
          <span>Pegawai</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Pegawai :</h6>
            <a class="collapse-item" href="<?php echo base_url('index.php/adminweb/list_pegawai'); ?>">Data Pegawai</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/adminweb/daftar'); ?>">Tambah Pegawai</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->