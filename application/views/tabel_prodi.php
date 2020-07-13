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
            <a href="<?=site_url('Silab/dashbord');?>" class="nav-link">
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
            <a href="<?=site_url('Silab/daftar_prodi');?>" class="nav-link active">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tabel Prodi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tabel Prodi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Prodi</h3>
            </div>             
            <p class="card-body">
										<button style="float: right;" type="submit" class="btn btn-outline-primary">
												<i class="fas fa-plus">
												<a href="<?=site_url('Silab/register_prodi')?>">
												Tambah Data
												</i>
												</a>
										</button>
										</p>
                    <p>           
            <form class="form-inline ml-3" action="<?= site_url('Silab/search_prodi'); ?>" method="post">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="text" name="keyword" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>          
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
													<th>Nama Prodi</th>
													<th>Jurusan</th>
													<th>Fakultas</th>
													<th>Action</th>
												</tr>
											</thead>
                      <?php 
                      $no = 1;
                      foreach($id_prodi as $val){?>
												<tr>
                          <td><?php echo $no++ ?></td>
													<td><?=$val['nama_prodi'];?></td>
													<td><?=$val['jurusan'];?></td>
													<td><?=$val['fakultas'];?></td>
													<td>
                          <a href="<?=site_url('Silab/update_register_prodi/'.md5($val['id_prodi']))?>"><i class="fas fa-pencil-alt"></i></a>
													<a href="<?=site_url('Silab/delete_prodi/'.($val['id_prodi']));?>"onclick="return confirm('Anda yakin akan menghapus data ini ?');"><i class="fas fa-eraser"></i></a>
                          </td>
												</tr>
											<?php } ?>
											<tbody>
											</tbody>
										</table>
										<?php echo $this->pagination->create_links();?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<script src="<?=base_url();?>/dist/js/pages/dashboard.js"></script>
</body>
</html>
