<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wedding</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Kontak</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
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
        <a class="nav-link" href="<?php echo base_url(); ?>login/logout" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/theme/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Wedding</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="<?php echo base_url(); ?>dashboard" class="nav-link <?php if($this->uri->segment(1)=="dashboard"){echo "active";} ?>">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>
          <li class="nav-item
          <?php
          if($this->uri->segment(2) == "tema" ||
          $this->uri->segment(2) == "video" ||
          $this->uri->segment(2) == "pengantin" ||
          $this->uri->segment(2) == "pembukaan" ||
          $this->uri->segment(2) == "jadwal" ||
          $this->uri->segment(2) == "informasi" ||
          $this->uri->segment(2) == "prewed" ||
          $this->uri->segment(2) == "komentar"
          )
          {
            echo "menu-is-opening menu-open";
          }
          else{

          }
           ?>
          ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Konfigurasi Web
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>konfigurasi/tema" class="nav-link <?php if($this->uri->segment(2)=="tema"){echo "active";} ?>">
                  <i class="fas fa-palette nav-icon"></i>
                  <p>Tema</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>konfigurasi/video" class="nav-link <?php if($this->uri->segment(2)=="video"){echo "active";} ?>">
                  <i class="fab fa-youtube nav-icon"></i>
                  <p>Video</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>konfigurasi/pengantin" class="nav-link <?php if($this->uri->segment(2)=="pengantin"){echo "active";} ?>">
                  <i class="fas fa-heart nav-icon"></i>
                  <p>Pengantin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>konfigurasi/pembukaan" class="nav-link <?php if($this->uri->segment(2)=="pembukaan"){echo "active";} ?>">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Pembukaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>konfigurasi/jadwal" class="nav-link <?php if($this->uri->segment(2)=="jadwal"){echo "active";} ?>">
                  <i class="fas fa-calendar-alt nav-icon"></i>
                  <p>Jadwal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>konfigurasi/informasi" class="nav-link <?php if($this->uri->segment(2)=="informasi"){echo "active";} ?>">
                  <i class="fas fa-info-circle nav-icon"></i>
                  <p>Informasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>konfigurasi/prewed" class="nav-link">
                  <i class="fas fa-camera-retro nav-icon"></i>
                  <p>Galeri Prewed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>konfigurasi/komentar" class="nav-link">
                  <i class="fas fa-comments nav-icon"></i>
                  <p>Komentar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Tamu
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Album Gambar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
