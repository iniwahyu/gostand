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
          <li>Lihat Produk</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- //page -->
  <!-- top Products -->
  <div class="banner-bootom-w3-agileits">
    <div class="container">
      <!-- tittle heading -->
      <h3 class="tittle-w3l">Lihat Produk
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
              <li data-thumb="<?php echo base_url('asset/home/images/ayam1.jpg'); ?>">
                <div class="thumb-image">
                  <img src="<?php echo base_url('asset/home/images/ayam1.jpg'); ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
              </li>
              <li data-thumb="<?php echo base_url('asset/home/images/ayam2.jpg'); ?>">
                <div class="thumb-image">
                  <img src="<?php echo base_url('asset/home/images/ayam2.jpg'); ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
              </li>
              <li data-thumb="<?php echo base_url('asset/home/images/ayam3.jpg'); ?>">
                <div class="thumb-image">
                  <img src="<?php echo base_url('asset/home/images/ayam3.jpg'); ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="col-md-7 single-right-left simpleCart_shelfItem">
        <h3>Zeeba Premium Basmati Rice - 5 KG</h3>
        <div class="rating1">
          <span class="starRating">
            <input id="rating5" type="radio" name="rating" value="5">
            <label for="rating5">5</label>
            <input id="rating4" type="radio" name="rating" value="4">
            <label for="rating4">4</label>
            <input id="rating3" type="radio" name="rating" value="3" checked="">
            <label for="rating3">3</label>
            <input id="rating2" type="radio" name="rating" value="2">
            <label for="rating2">2</label>
            <input id="rating1" type="radio" name="rating" value="1">
            <label for="rating1">1</label>
          </span>
        </div>
        <p>
          <span class="item_price">$950.00</span>
          <del>$1300.00</del>
          <label>Free delivery</label>
        </p>
        
        <div class="product-single-w3l">
          <p>
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
            <label>Vegetarian</label> product.</p>
        </div>
        <div class="single-infoagile">
          <p>Ini deskripsi</p>
        </div>
        <div class="occasion-cart">
          <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
            <form action="#" method="post">
              <fieldset>
                <input type="submit" name="submit" value="Add to cart" class="button" />
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