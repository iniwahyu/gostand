<!DOCTYPE html>
<html>

<head>
  <title>Profil</title>

  
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
  <?php require_once(APPPATH. 'views/pembeli/navbarpembeli.php'); ?>
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
          <li>My Profile</li>
          <i>|</i>
          <li>Edit Profile</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div>
      <!-- tittle heading -->
      <h3 style="margin-top: 50px;" class="tittle-w3l">Edit Profile
        <span class="heading-style">
          <i></i>
          <i></i>
          <i></i>
        </span>
      </h3>
      <!-- //tittle heading -->  
    </div>
    
    <div id="profilpembeli">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div align="center">
              <img id="img1" class="img-fluid" src="<?php echo base_url('asset/img/pembeli-iconuser.png'); ?>" alt="Ikon User">  
            </div>            
          </div>

          <div class="col-md-6">
            <form role="form" action="<?php echo base_url('pembeli/updatedataprofile'); ?>" method="post">
              <table class="table">
              <?php
                  foreach ($data as $profil) {?>
              <tr>
                <td><label>NIM</label></td>              
                <td><label>:</label></td>
                <td><?php echo $this->session->userdata('username');?></td>
              </tr>
              <tr>
                <td><label>Nama</label></td>
                <td><label>:</label></td>
                <td><input type="text" name="namaorang" placeholder="Nama Anda..." 
                  value="<?php echo $profil['nama'];?>"> </td>
              </tr>
              <tr>
                <td><label>Email</label></td>
                <td><label>:</label></td>                
                <td><input type="email" name="email" placeholder="Email Anda..." value="<?php echo $profil['email'];?>">></td>
              </tr>
              <tr>
                <td><label>No. Handphone</label></td>
                <td><label>:</label></td>
                <td><input type="text" name="nohape" placeholder="No. Handphone Anda..." value="<?php echo $profil['nohape'];?>">></td>
              </tr>
              <?php } ?>
            </table>
            <button type="submit" class="btn btn-primary">Save</button>  
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Content -->

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
</body>

</html>