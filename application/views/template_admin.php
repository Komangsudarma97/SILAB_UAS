<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Sistem Informasi Inventaris Lab | Dashboard </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url();?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?=base_url();?>/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="<?=site_url('Login/logout');?>" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Log Out
                  <span class="float-right text-sm text-danger"><i class="fas fa-power-off "></i></span>
                </h3>
              </div>
            </div>
            <!-- Message End -->
          </a>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer"></a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url();?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SILAB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url();?>/dist/img/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sudarma Puja Yasa</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
            <a href="<?=site_url('Silab/dashboard');?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item has-treeview">
            <a href="<?=site_url('Silab/daftar_user');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Master User
              </p>
            </a>
            
          <li class="nav-item has-treeview">
            <a href="<?=site_url('Silab/daftar_lokasi');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Master Lokasi
              </p>
            </a>
          <li class="nav-item has-treeview">
            <a href="<?=site_url('Silab/daftar_prodi');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Master Prodi
              </p>
            </a>
            <li class="nav-item has-treeview">
            <a href="<?=site_url('Silab/daftar_pelaporan');?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Master Pelaporan
              </p>
            </a>
          <li class="nav-item has-treeview">
            <a href="<?=site_url('Silab/daftar_aset');?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Aset
              </p>
            </a>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center">Selamat datang di halaman admin, halaman ini adalah halaman induk untuk mengakses semua pangkalan data
										Silakan manajemen data dengan baik setelah masuk ke sistem ini, sesuai dengan hak akses Anda</h3>
                    <img src="<?=base_url();?>/dist/img/logo.png" width="300px" height="300px" style="display: block; margin: auto;"/>
										<h3 class="text-center">Copyright Manajemen Informatika-Undiksha 2020</h3>
                    </div>
                </div>
            </div>
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            

              
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">

            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            
              

                    
                    

                    

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            
            <div class="row">
              <div class="col-md-6">
                <!-- DIRECT CHAT -->
               
                  <div class="card-body">
                   

                      <!-- Message to the right -->
                     

                      <!-- Message. Default to the left -->
                      

                      <!-- Message to the right -->
                      

                   
                        
                       
                        
                        
                      

              <div class="col-md-6">
                <!-- USERS LIST -->
                
                 
                  <!-- /.card-body -->
                 
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            

            <div class="card">
              
              
                  <!-- /.col -->
                  <div class="col-md-4">
                    
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
             

            
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://Silab">Sistem Informasi Inventaris Lab</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">

    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?=base_url();?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url();?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url();?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?=base_url();?>/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?=base_url();?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url();?>/plugins/raphael/raphael.min.js"></script>
<script src="<?=base_url();?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url();?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url();?>/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?=base_url();?>/dist/js/pages/dashboard2.js"></script>
</body>
</html>
