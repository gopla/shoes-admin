<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-black">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item d-none d-sm-inline-block"> -->
        <a href="<?php echo base_url() . 'admin/home' ?>" class="btn btn-outline-light">
          <i class="ion ion-log-out"></i>
          Logout
        </a>
        <!-- </li> -->
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-dark elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url() . 'admin/home' ?>" class="brand-link">
        <img src="<?php echo base_url() . 'assets/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">didas</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo base_url() . 'home' ?>" class="nav-link" id="navHome">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'retail' ?>" class="nav-link" id="navRetail">
                <i class="fa fa-building nav-icon"></i>
                <p>
                  Retail
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'sepatu' ?>" class="nav-link" id="navSepatu">
                <i class="fas fa-shoe-prints nav-icon"></i>
                <p>
                  Sepatu
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'user' ?>" class="nav-link" id="navUser">
                <i class="fa fa-user nav-icon"></i>
                <p>
                  User
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'admin/pemesanan' ?>" class="nav-link" id="navPemesanan">
                <i class="fas fa-piggy-bank nav-icon"></i>
                <p>
                  Transaksi
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>