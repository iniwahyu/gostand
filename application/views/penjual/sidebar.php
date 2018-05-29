<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Penjual</span>
    </a>
    <!--side navbar bottom-->
     <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('username');?></a>
        </div>
      </div>
       <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url('penjual/index'); ?>" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Profile Toko
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('penjual/profil'); ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Lihat Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('penjual/editprofil'); ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Edit Profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Produk
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('penjual/produk'); ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Lihat Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('penjual/tambahproduk'); ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Input Produk Baru</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('penjual/pemesanan'); ?>" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Pemesanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('penjual/riwayatpemesanan'); ?>" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                History Order
              </p>
            </a>
          </li>
      </nav>
     </div>
</aside>