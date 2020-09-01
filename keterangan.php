<?php 
  include_once('./config/config.php'); 
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Teknik Terpadu| Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
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
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
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
      <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <h6><b>Aplikasi Teknik Terpadu</b></h6>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Risna Julianti</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Main</li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Menu
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>JTM</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Gangguan</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Inspeksi</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>SLD</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Sampling</p>
                  </a>
                </li>
              </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Gardu</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Ganggu/Manajemen Trafo</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="tampildata.php" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Inspeksi</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>SLD</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Sampling</p>
                  </a>
                </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>JTR</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Gangguan</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Inspeksi</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>SLD</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Sampling</p>
                  </a>
                </li>
              </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>SR</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Gangguan</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Inspeksi</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>SLD</p>
                  </a>
                </li>
              </ul>
              </li>
              <li class="nav-header">Statement</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Aset Distribusi</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Permintaan Material</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Monitoring Materal</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Input Aset</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>MDU</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Non-MDU</p>
                  </a>
                </li>
              </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>WO</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Monitoring</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Input WO</p>
                  </a>
                </li>
              </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Pekerjaan Distribusi</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Pengajuan</p>
                  </a>
                </li>
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Pengesahan</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Tindak Lanjut</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Jadwal</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Monitoring</p>
                  </a>
                </li>
              </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Laporan Distribusi</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Teknik</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Yantek</p>
                  </a>
                </li>
              </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Berita Acara</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Pengajuan</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Pengesahan</p>
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Monitoring</p>
                  </a>
                </li>
              </ul>
              </li>
            </ul>
          </li>
          <li class="nav-header">System</li>
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
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
          <h1 class="m-0 text-dark">Rekam Data Inspeksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
              <li class="breadcrumb-item active">Menu</li>
              <li class="breadcrumb-item active">Gardu</li>
              <li class="breadcrumb-item active">Inspeksi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="pull-right">
                  <a href ="" class="btn btn-default btn-xs"><i class="fa fa-sync-alt"></i></a>
                  <a href ="tambah5.php" class="btn btn-success btn-xs"><i class="fas fa-plus"></i>Tambah Data</a>
                </div>
             
                        <div style="margin-bottom: 20px;">
                            <form class="form-inline" action="" method="post">
                                <div class="form-group">
                                    <input type="text" name="Pencarian" class="form-control" placeholder="Pencarian">
                                </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><span class="fas fa-search" aria-hidden="true"></span></button>
                                    </div>
                            </form>
                        </div>
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Keterangan</th> 
                                                <th><i class="fas fa-cog"></th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                    <?php
                      $batas =10;
                      $hal = @$_GET['hal'];
                        if (empty ($hal)) {
                          $posisi = 0;
                          $hal = 1;
                      
                        } else {
                          $posisi = ($hal - 1) * $batas;
                        }
                          $id_ket='';
                          if ($_SERVER['REQUEST_METHOD'] == "POST"){
                            $pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
                            if($pencarian != ''){
                              $sql = "SELECT*FROM tb_keterangan WHERE id_ket LIKE '%$pencarian%'";
                              $query = $sql;
                            $queryJml = $sql;                            
                            } else {
                              $query = "SELECT * FROM tb_keterangan LIMIT $posisi, $batas";
                              $query = "SELECT * FROM tb_keterangan";
                              $no = $posisi + 1;
                            }
                          } else {
                            $query = " SELECT * FROM tb_keterangan LIMIT $posisi, $batas";
                            $querJml = " SELECT * FROM tb_keterangan";
                            $no = $posisi + 1; 
                          }
                           $sql_keterangan = mysqli_query($con, $query) or die ( mysqli_error($con));
                          if(mysqli_num_rows($sql_keterangan) > 0){
                            while($data = mysqli_fetch_array($sql_keterangan)){
                              ?>
                              <tr>
                              <td><?=$data['id_ket']?></td>
                              <td><?=$data['gambar']?></td>
                              <td><?=$data['keterangan']?></td>
                              <td class="text-center">
                                <a href="edit.php?id=<?=$data['id_ket']?>"><i class ="fas fa-edit"></i></a>
                                <a href="delete.php?id=<?=$data['id_ket']?>"><i class ="fas fa-trash-alt"></i></a>
                            </td>
                            </tr>
                            <?php
                        if (isset($_POST['pencarian']) == '') { ?>
                        <div style="float:left;">

                       
                        </div>

                        <div style="float:right;">
                        <ul class="pagination pagination-sm" style="margin:0">
                       
                        </ul>
                      </div>

                      <?php
                        } else {
                          echo "<div style=\"float:left;\">";
                          $jml = mysqli_num_rows(mysqli_query($con, $queryjml));
                          echo "Data Hasil Pencarian : <b>$jml</b>";
                          echo "</div>";
                        }
                        ?>

                            <?php

                            }
                          } else {
                            echo "<tr><td colspan=\"4\"align=\"center\"> Data Tidak Ditemukan </td></tr>";

                          }
                          ?>
                        </tbody>
                                </div>
                            </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
