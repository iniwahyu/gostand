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
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('/admin');?>">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                   
                    <!-- User profile and search -->
                    <ul class="navbar-nav ml-auto my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <?php require_once(APPPATH.'views/admin/sidebar.php'); ?>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Daftar User</h3> 
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

                    <div class="col-lg-12">
                    <div class="card">
                            <div class="card-body">
                                <?php
                                if($this->session->flashdata('success'))
                                {
                                    echo $this->session->flashdata('success');
                                }
                                else
                                {
                                    echo $this->session->flashdata('error');
                                }
                                ?>
                                <?php
                                // $query = $this->db->get('hello');
                                
                                // foreach ($query->result() as $row)
                                // {
                                //     echo $row->username;
                                //     echo $row->password ."<br/>";
                                // }
                                ?>
                                <h4 class="card-title">Daftar User </h4>
                                <div class="table-responsive m-t-20">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama / Nama Toko</th>
                                                <th>Nim</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>2011/04/25</td>
                                            </tr>
                                        </tbody>
                                    </table>
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