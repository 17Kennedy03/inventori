<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('temp/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('temp/dist/css/skins/_all-skins.min.css'); ?>">

 
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>W</b>I</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Inventory</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

<section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="#" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>  <?php echo $this->session->userdata('username') ?></p>
          <a href="https://images.app.goo.gl/mLo3LnXcSsz2vDtDA"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
<!-- <========================================================================================> -->    
      <ul class="sidebar-menu" data-widget="tree">
       <li class="header">Menu Utama</li>
		<?php if ($this->session->userdata('level') == "superadmin"){?>
      
        <li><a href="<?php echo site_url('User/DataUser'); ?>"><i class="fa fa-user"></i> <span>User Login</span></a></li>

        <li><a href="<?php echo site_url('Karyawan/DataKaryawan'); ?>"><i class="fa fa-id-card"></i> <span>Data Karyawan</span></a></li>

    <?php }else ($this->session->userdata('level') == "admin") ?>

       <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

       <li><a href="<?php echo site_url('Supplier/DataSupplier'); ?>"><i class="fa fa-truck"></i> <span>Data Supplier</span></a></li>

       <li><a href="<?php echo site_url('Barang/DataBarang'); ?>"><i class="fa fa-book"></i> <span>Data Barang</span></a></li>
       
       <li><a href="<?php echo site_url('Masuk/DataMasuk'); ?>"><i class="fa fa-arrow-right"></i> <span>Data Barang Masuk</span></a></li>

       <li><a href="<?php echo site_url('Keluar/DataKeluar'); ?>"><i class="fa fa-arrow-left"></i> <span>Data Barang Keluar</span></a></li>

       <li><a href="<?php echo site_url('Pembelian/DataPembelian'); ?>"><i class="fa fa-money"></i> <span>Pembelian</span></a></li>

       <li><a href="<?php echo site_url('Supplier/DataSupplier'); ?>"><i class="fa fa-industry"></i> <span>Supplier</span></a></li>

       <li><a href="<?php echo site_url('Welcome/Logout'); ?>"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>

		<?php  ?>
	  
	  </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
    
    <section class="content">

<?php $this->load->view($content); ?>
     

    </section>
    
      </div>
  


<div class="control-sidebar-bg"></div>
</div> -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('temp/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('temp/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('temp/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('temp/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('temp/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('temp/dist/js/demo.js'); ?>"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
