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
    <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url ('asset/penjual/plugins/timepicker/bootstrap-timepicker.min.css');?>">
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
        <a href="<?php echo base_url('registerlogin/logout'); ?>" class="btn btn-primary btn-block btn-flat" >LogOut <i class="fa fa-sign-out nav-icon"></i> </a>
      </li>
    </ul>
</nav>
<!--side navbar-->

<?php require_once(APPPATH. 'views/penjual/sidebar.php');?> ?>

<div class="content-wrapper">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Silahkan Isi Profil Toko Anda Terlebih Dahulu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profil</h3>
              </div>
              <?php echo form_open("penjual/inptdatadiri", array('enctype'=>'multipart/form-data')); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Toko</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="namatoko" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Handphone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nomorhp" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Stand</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="lokasi" placeholder="">
                  </div>
                  <div class="form-group">
                  <div class="box-header">
                    <h3 class="box-title">Deskripsi Penjual</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                    </div>
                    <!-- /. tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">
                      <textarea name="deskripsi"  class="textarea" placeholder="Silahkan Deskripsikan Produk Anda" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
              </div>
                  <h4>Jam Operasional</h4>
                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                      <label for="exampleInputEmail1">Jam Buka</label>
                      <input type="time" class="form-control" id="exampleInputPassword1" name="jambuka" placeholder="">
                    </div>
                    <div class="col-md-6">
                      <label for="exampleInputEmail1">Jam Tutup</label>
                      <input type="time" class="form-control" id="exampleInputPassword1" name="jamtutup" placeholder="">
                    </div>
                    <div class="form-group">
                      <h4>Foto Toko</h4>
                      <input type="file" class="form-control" name="input_gambar">
                  </div>
                  </div>
                  </div>

                   </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary" value="Simpan"></input>
                </div>
              <?php echo form_close(); ?>
            </div>
          </div>
          <!--/.col (right) -->

            
          <!--/.col (right) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</section>

</div><!--divakhir-->

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
<script src="<?php echo base_url('asset/penjual/plugins/ckeditor/ckeditor.js');?>"></script>
<script src="<?php echo base_url('asset/penjual/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#CKEditor'))
      .then(function (ckeditor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>

</body>
</html>