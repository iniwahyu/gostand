<!DOCTYPE html>
<html>

<head>
  <title>Cart</title>

  
  <!--/tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="" />
  <!--//tags -->
  <link href="<?php echo base_url('asset/home/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url('asset/home/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url('asset/css/stylecustom.css');?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!--pop-up-box-->
  <link href="<?php echo base_url('asset/home/css/popuo-box.css'); ?>" rel="stylesheet" type="text/css" media="all" />
  <!--//pop-up-box-->
  <!-- price range -->
  <link href="<?php echo base_url('asset/home/css/jquery-ui1.css');?>" rel="stylesheet" type="text/css">
  <!-- fonts -->
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/stylepembeli.css'); ?>">

</head>

<body>


  <!-- Awal Navbar Pembeli-->  
  <?php require_once(APPPATH. 'views/home/navbar.php'); ?>
  <!-- Akhir Navbar Pembeli-->  


<!-- Content -->

<!-- Content -->
  <!-- page -->
  <div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
      <div class="container">
        <ul class="w3_short">
          <li>
            <a href="index.html">Home</a>
            <i>|</i>
          </li>
          <li>Keranjang Belanja</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div>
      <!-- tittle heading -->
      <h3 style="margin-top: 50px;" class="tittle-w3l">Daftar Pemesanan
        <span class="heading-style">
          <i></i>
          <i></i>
          <i></i>
        </span>
      </h3>
      <!-- //tittle heading -->  
    </div>
    

<!-- Content -->
<div id="keranjangbelanja">
<div class="checkout-right">
                <h4>Total Produk:
                    <span><?php
                      $namadata=$this->session->userdata('username');
                      $query=$this->db->get_where('keranjang',array('nama_pembeli'=>$namadata));//memilih tabel
                      echo $query->num_rows();
                      ?></span>                    
                </h4>
                <div class="table-responsive">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Produk</th>
                                <th>Jumlah Pesanan</th>
                                <th>Sub Total</th>
                                <th>Nama Toko</th>                                
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no=1;
                          foreach ($data as $produk) {?>
                          <tr>
                            <tr class="rem1">                               
                                <td class="invert"><?php echo $no++;?></td>
                                <td class="invert"><?php echo $produk['nama_produk'];?></td>
                                <td class="invert"><?php echo $produk['jumlah_produk'];?></td>
                                <td class="invert">Rp. <?php echo number_format($produk['total_harga'],2,',','.'); ?></td>
                                <td class="invert"><?php echo $produk['nama_toko'];?></td>
                                <td class="invert">
                                  <a href="<?php echo base_url('pembeli/deletekeranjang/').$produk['id']; ?>" class="btn btn-danger" onClick="return doconfirm();"><i class="fa fa-times"></i></a>
                                </td> 
                            </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
                    <div id="formpengiriman">
                      <label>Alamat Pengiriman</label>
                      <label>:</label>
                      <br>
                      <textarea></textarea>
                      <br><br><br>
                      <label>Tanggal Pemesanan</label>
                      <?php
                      date_default_timezone_set("Asia/Jakarta");
                      $tgl1 = date("Y-m-d");
                      ?>
                      <br>
                      <input type="date" value="<?php echo $tgl1; ?>" readonly>
                    </div>
            </div> 
            </div>                  
          </div>
    <!-- //checkout page -->

   

  <!-- footer -->
  <footer>
    <?php require_once(APPPATH. 'views/home/footer.php'); ?>
  </footer>
  <!-- //footer -->
  <!-- copyright -->
  <div class="copy-right">
    <div class="container">
      <p>© 2018 Go Stand. All rights reserved</p>
    </div>
  </div>
  <!-- //copyright -->

  <!-- js-files -->
  <!-- jquery -->
  <script src="<?php echo base_url('asset/home/js/jquery-2.1.4.min.js');?>"></script>
  <!-- //jquery -->

  <!-- popup modal (for signin & signup)-->
  <script src="<?php echo base_url('asset/home/js/jquery.magnific-popup.js');?>"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

    });
  </script>
  <!-- Large modal -->
  <!-- <script>
    $('#').modal('show');
  </script> -->
  <!-- //popup modal (for signin & signup)-->

  <!-- cart-js -->
  <script src="<?php echo base_url('asset/home/js/minicart.js');?>"></script>
  <script>
    paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

    paypalm.minicartk.cart.on('checkout', function (evt) {
      var items = this.items(),
        len = items.length,
        total = 0,
        i;

      // Count the number of each item in the cart
      for (i = 0; i < len; i++) {
        total += items[i].get('quantity');
      }

      if (total < 3) {
        alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
        evt.preventDefault();
      }
    });
  </script>
  <!-- //cart-js -->

  <!-- price range (top products) -->
  <script src="<?php echo base_url('asset/home/js/jquery-ui.js');?>"></script>
  <script>
    //<![CDATA[ 
    $(window).load(function () {
      $("#slider-range").slider({
        range: true,
        min: 0,
        max: 9000,
        values: [50, 6000],
        slide: function (event, ui) {
          $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
      });
      $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
  </script>
  <!-- //price range (top products) -->

  <!-- flexisel (for special offers) -->
  <script src="<?php echo base_url('asset/home/js/jquery.flexisel.js');?>"></script>
  <script>
    $(window).load(function () {
      $("#flexiselDemo1").flexisel({
        visibleItems: 3,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 2
          },
          tablet: {
            changePoint: 768,
            visibleItems: 2
          }
        }
      });

    });
  </script>
  <!-- //flexisel (for special offers) -->

  <!-- password-script -->
  <script>
    window.onload = function () {
      document.getElementById("password1").onchange = validatePassword;
      document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
      var pass2 = document.getElementById("password2").value;
      var pass1 = document.getElementById("password1").value;
      if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
      else
        document.getElementById("password2").setCustomValidity('');
      //empty string means no validation error
    }
  </script>
  <!-- //password-script -->

  <!-- smoothscroll -->
  <script src="<?php echo base_url('asset/home/js/SmoothScroll.min.js');?>"></script>
  <!-- //smoothscroll -->

  <!-- start-smooth-scrolling -->
  <script src="<?php echo base_url('asset/home/js/move-top.js');?>"></script>
  <script src="<?php echo base_url('asset/home/js/easing.js');?>"></script>
  <script>
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();

        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- //end-smooth-scrolling -->

  <!-- smooth-scrolling-of-move-up -->
  <script>
    $(document).ready(function () {
      /*
      var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      */
      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  <!-- //smooth-scrolling-of-move-up -->

  <!-- for bootstrap working -->
  <script src="<?php echo base_url('asset/home/js/bootstrap.js');?>"></script>
  <!-- //for bootstrap working -->
  <!-- //js-files -->


    <!-- Alert Hapus -->
    <script type="text/javascript">
    function doconfirm()
    {
        job=confirm("Apakah anda ingin menghapus produk ini ?");
        if(job!=true)
        {
            return false;
        }
    }
    </script>
  </script>



</body>

</html>