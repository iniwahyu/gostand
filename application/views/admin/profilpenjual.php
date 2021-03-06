<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Admin | Daftar Penjual GoStand</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/admin/css/lib/bootstrap/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('asset/admin/css/helper.css');?>" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php echo base_url('asset/admin/css/lib/calendar2/semantic.ui.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin/css/lib/calendar2/pignose.calendar.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin/css/lib/owl.carousel.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('asset/admin/css/lib/owl.theme.default.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('asset/admin/css/helper.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/admin/css/style.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/styleadmin.css');?>">
</head>

<body class="fix-header fix-sidebar">
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <?php require_once(APPPATH. 'views/admin/src/menu.php'); ?>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <?php require_once(APPPATH.'views/admin/src/sidebar.php'); ?>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Daftar Penjual / Toko</h3> 
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row bg-white m-l-0 m-r-0 box-shadow ">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-body p-b-0">
                                <h4 class="card-title">Profil Toko <b>Nama</b> </h4>
                                <hr>
                                <!-- Nav tabs -->
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Hai</th>
                                                <th>Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Nama Toko</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th>Nama Pemilik</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th>Username</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th>No Hape</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th>Lokasi Stand</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <th>Jam Operasional</th>
                                                <td>Buka - Tutup</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Produk Toko</h4>
                                <hr>

                                <div class="produk-toko">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>ini</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>ini</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>ini</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p>ini</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Redesign By <a href="https://iniwahyu.com">IniWahyu</a> | Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url('asset/admin/js/lib/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('asset/admin/js/lib/bootstrap/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/bootstrap/js/bootstrap.min.js');?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('asset/admin/js/jquery.slimscroll.js');?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('asset/admin/js/sidebarmenu.js');?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('asset/admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js');?>"></script>
    <!--Custom JavaScript -->

    <!-- Amchart -->
    <script src="<?php echo base_url('asset/admin/js/lib/morris-chart/raphael-min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/morris-chart/morris.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/morris-chart/dashboard1-init.js');?>"></script>
	<script src="<?php echo base_url('asset/admin/js/lib/calendar-2/moment.latest.min.js');?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('asset/admin/js/lib/calendar-2/semantic.ui.min.js');?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('asset/admin/js/lib/calendar-2/prism.min.js');?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('asset/admin/js/lib/calendar-2/pignose.calendar.min.js');?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('asset/admin/js/lib/calendar-2/pignose.init.js');?>"></script>

    <script src="<?php echo base_url('asset/admin/js/lib/owl-carousel/owl.carousel.min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/owl-carousel/owl.carousel-init.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/scripts.js');?>"></script>
    <!-- scripit init-->

    <script src="<?php echo base_url('asset/admin/js/custom.min.js');?>"></script>

    <!-- DATA TABLES -->
    <script src="<?php echo base_url('asset/admin/js/lib/datatables/datatables.min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('asset/admin/js/lib/datatables/datatables-init.js');?>"></script>

</body>

</html>