<<!DOCTYPE html>
<html>

<head>
<title>GoStand</title>
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
  <!-- flexslider -->
  <link rel="stylesheet" href="<?php echo base_url('asset/home/css/flexslider.css');?>" type="text/css" media="screen" />
  <!-- price range -->
  <link href="<?php echo base_url('asset/home/css/jquery-ui1.css');?>" rel="stylesheet" type="text/css">
  <!-- fonts -->
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
  <?php require_once(APPPATH. 'views/home/navbar.php'); ?>
  <!-- banner-2 -->
  <!-- <div class="page-head_agile_info_w3l">

  </div> -->
  <!-- //banner-2 -->
  <!-- page -->
  <div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
      <div class="container">
        <ul class="w3_short">
          <li>
            <a href="<?php echo base_url('/'); ?>">Home</a>
            <i>|</i>
          </li>
          <li><?php foreach($data as $makanan) { echo $makanan['nama_produk']; } ?></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- //page -->
  <!-- top Products -->
  <div class="banner-bootom-w3-agileits">
    <div class="container">
      <!-- tittle heading -->
      <h3 class="tittle-w3l"><?php foreach($data as $makanan) { echo $makanan['nama_produk']; } ?>
        <span class="heading-style">
          <i></i>
          <i></i>
          <i></i>
        </span>
      </h3>
      <!-- //tittle heading -->
      <div class="col-md-5 single-right-left ">
        <div class="grid images_3_of_2">
          <div class="flexslider">
            <ul class="slides">
            <?php foreach($data as $makanan) { ?>
              <li data-thumb="<?php echo base_url('asset/img/produk/').$makanan['nama_file']; ?>" >
                <div class="thumb-image">
                  <img src="<?php echo base_url('asset/img/produk/').$makanan['nama_file']; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
              </li>
            <?php } ?>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="col-md-7 single-right-left simpleCart_shelfItem">
        <?php foreach( $data as $makanan ) { ?>
        <h3><?php echo $makanan['nama_produk']; ?></h3>
        
        <p>
          <span class="item_price">Rp. <?php echo number_format($makanan['harga'],2,'.','.'); ?></span>
          <label>Free delivery</label>
        </p>
        
        <div class="product-single-w3l">
          <p>
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
            <label>Vegetarian</label> product.</p>
        </div>

        <div class="single-infoagile">
          <p><?php echo $makanan['deskripsi']; ?></p>
        </div>
        <?php }  ?>

        
        
        <div class="occasion-cart">
          <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
            <form action="<?php echo base_url('welcome/prosestambahkeranjang'); ?>" method="post">
              <fieldset>
              <label>Jumlah Pesanan</label>
              <select name="jumlah" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <?php foreach ( $data as $makanan ) { ?>
                <input type="hidden" name="nama_produk" value="<?php echo $makanan['nama_produk']; ?>" >
                <input type="hidden" name="harga" value="<?php echo $makanan['harga']; ?>" >
              <?php } ?>
                <input type="submit" name="submit" value="Tambah Ke Keranjang" class="button" style="margin-top:25px;" />
              </fieldset>
            </form>
          </div>
        </div>
      
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!-- //top products -->
  <!-- footer -->
  <footer>
    <?php require_once(APPPATH. 'views/home/footer.php'); ?>
  </footer>
  <!-- //footer -->
  <!-- copyright -->
  <div class="copy-right">
    <div class="container">
      <p>© 2018 Go Stand. All rights reserved
      </p>
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

  <!-- imagezoom -->
  <script src="<?php echo base_url('asset/home/js/imagezoom.js');?>"></script>
  <!-- //imagezoom -->

  <!-- FlexSlider -->
  <script src="<?php echo base_url('asset/home/js/jquery.flexslider.js');?>"></script>
  <script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
      });
    });
  </script>
  <!-- //FlexSlider-->

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

  <!-- for bootstrap working -->
  <script src="<?php echo base_url('asset/home/js/bootstrap.js');?>"></script>
  <!-- //for bootstrap working -->
  <!-- //js-files -->
</body>

</html>