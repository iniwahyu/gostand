<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gostand | Penjual</title>

    <link rel="stylesheet" href="<?php echo base_url('asset/penjual/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/penjual/plugins/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/penjual/plugins/iCheck/flat/blue.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/penjual/plugins/morris/morris.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/penjual/plugins/jvectormap/jquery-jvectormap-1.2.2.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('asset/penjual/plugins/datepicker/datepicker3.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('asset/penjual/plugins/daterangepicker/daterangepicker-bs3.css');?>">
    <link rel="stylesheet" href="<?php echo base_url ('asset/penjual/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/penjual/asset/css/stylepenjual.css'); ?>">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
	<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('penjual/index'); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <!--form-->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
      <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li>
        <a href="<?php echo base_url('registerlogin/logout'); ?>" class="btn btn-primary btn-block btn-flat" >LogOut</a>
      </li>
    </ul>
</nav>
<!--side navbar-->
<?php require_once(APPPATH. 'views/penjual/sidebar.php');?> ?>

<!-- CONTENT -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="callout callout-info">
            <h5>Selamat Datang <?php echo $this->session->userdata('nama'); ?> !</h5>
            <p>Follow the steps to continue to payment.</p>
          </div>
        </div>
      </div>
      <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php
                  $produk = $this->db->get('produk');
                  echo $produk->num_rows();
                  ?>
                </h3>

                <p>Jumlah Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url('penjual/produk') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
  </section>
</div>

</div><!--divakhir - WRAPPER -->



<!-- SCRIPT -->
<script src="<?php echo base_url('asset/penjual/plugins/jquery/jquery.min.js');?>"></script>
<script src="<?php echo base_url('asset/penjual/https://code.jquery.com/ui/1.12.1/jquery-ui.min.js');?>"></script>
<script src="<?php echo base_url('asset/penjual/asset/js/bootstrap.min.js');?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('asset/penjual/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('asset/penjual/https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js');?>"></script>
<script src="<?php echo base_url('asset/penjual/plugins/morris/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('asset/penjual/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('asset/penjual/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('asset/penjual/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('asset/penjual/plugins/knob/jquery.knob.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js');?>"></script>
<script src="<?php echo base_url('asset/penjual/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('asset/penjual/plugins/datepicker/bootstrap-datepicker.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('asset/penjual/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('asset/penjual/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('asset/penjual/plugins/fastclick/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/penjual/dist/js/adminlte.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('asset/penjual/dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/penjual/dist/js/demo.js');?>"></script>

</body>
</html>