<!DOCTYPE html>
<html>

<head>
<title>GoStand</title>
  <!--/tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--//tags -->
  <link href="<?php echo base_url('asset/home/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('asset/home/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('asset/home/css/font-awesome.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('asset/css/stylecustom.css');?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!--pop-up-box-->
  <link href="<?php echo base_url('asset/home/css/popuo-box.css'); ?>" rel="stylesheet" type="text/css" media="all" />
  <!--//pop-up-box-->
  <!-- price range -->
  <link href="<?php echo base_url('asset/home/css/jquery-ui1.css');?>" rel="stylesheet" type="text/css">
  <!-- fonts -->
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>

<body>
  <?php require_once(APPPATH. 'views/home/navbar.php'); ?>
  <!-- page -->
  <div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
      <div class="container">
        <ul class="w3_short">
          <li>
            <a href="<?php echo base_url('/'); ?>">Home</a>
            <i>|</i>
          </li>
          <li>Produk Toko</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- //page -->
  
  <!-- top Products -->
  <div class="ads-grid">
    <div class="container">
      <!-- tittle heading -->
      <h3 class="tittle-w3l">Kitchen Products
        <span class="heading-style">
          <i></i>
          <i></i>
          <i></i>
        </span>
      </h3>
      <!-- //tittle heading -->
      <!-- product left -->
      <div class="side-bar col-md-3">
        <div class="search-hotel">
          <h3 class="agileits-sear-head">Search Here..</h3>
          <form action="#" method="post">
            <input type="search" placeholder="Product name..." name="search" required="">
            <input type="submit" value=" ">
          </form>
        </div>
        <!-- price range -->
        <div class="range">
          <h3 class="agileits-sear-head">Nama Toko</h3>
          <ul class="dropdown-menu6">
            <li>

              <div id="slider-range"></div>
              <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
            </li>
          </ul>
        </div>
        <!-- //price range -->
        <!-- food preference -->
        <div class="left-side">
          <h3 class="agileits-sear-head">Food Preference</h3>
          <ul>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Vegetarian</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Non-Vegetarian</span>
            </li>
          </ul>
        </div>
        <!-- //food preference -->
        <!-- discounts -->
        <div class="left-side">
          <h3 class="agileits-sear-head">Discount</h3>
          <ul>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">5% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">10% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">20% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">30% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">50% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">60% or More</span>
            </li>
          </ul>
        </div>
        <!-- //discounts -->
        <!-- reviews -->
        <div class="customer-rev left-side">
          <h3 class="agileits-sear-head">Customer Review</h3>
          <ul>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>5.0</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span>4.0</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span>3.5</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span>3.0</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span>2.5</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- //reviews -->
        <!-- cuisine -->
        <div class="left-side">
          <h3 class="agileits-sear-head">Cuisine</h3>
          <ul>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">South American</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">French</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Greek</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Chinese</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Japanese</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Italian</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Mexican</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Thai</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Indian</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span"> Spanish </span>
            </li>
          </ul>
        </div>
        <!-- //cuisine -->
        <!-- deals -->
        <div class="deal-leftmk left-side">
          <h3 class="agileits-sear-head">Special Deals</h3>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/d2.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>Lay's Potato Chips</h3>
              <a href="">$18.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/d1.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>Bingo Mad Angles</h3>
              <a href="">$9.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/d4.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>Tata Salt</h3>
              <a href="">$15.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/d5.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>Gujarat Dry Fruit</h3>
              <a href="">$525.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/d3.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>Cadbury Dairy Milk</h3>
              <a href="">$149.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- //deals -->
      </div>
      <!-- //product left -->
      <!-- product right -->
      <div class="agileinfo-ads-display col-md-9 w3l-rightpro">
        <div class="wrapper">
          <!-- first section -->
          <div class="product-sec1">
            <div class="col-xs-4 product-men">
              <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item">
                  <img src="images/k1.jpg" alt="">
                  <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                      <a href="single.html" class="link-product-add-cart">Quick View</a>
                    </div>
                  </div>
                  <span class="product-new-top">New</span>
                </div>
                <div class="item-info-product ">
                  <h4>
                    <a href="single.html">Zeeba Basmati Rice</a>
                  </h4>
                  <div class="info-product-price">
                    <span class="item_price">$950.00</span>
                    <del>$1020.00</del>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="#" method="post">
                      <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="Zeeba Basmati Rice - 5 KG" />
                        <input type="hidden" name="amount" value="950.00" />
                        <input type="hidden" name="discount_amount" value="1.00" />
                        <input type="hidden" name="currency_code" value="USD" />
                        <input type="hidden" name="return" value=" " />
                        <input type="hidden" name="cancel_return" value=" " />
                        <input type="submit" name="submit" value="Add to cart" class="button" />
                      </fieldset>
                    </form>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xs-4 product-men">
              <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item">
                  <img src="images/k2.jpg" alt="">
                  <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                      <a href="single.html" class="link-product-add-cart">Quick View</a>
                    </div>
                  </div>
                  <span class="product-new-top">New</span>

                </div>
                <div class="item-info-product ">
                  <h4>
                    <a href="single.html">Maiyas Gulab Jamun</a>
                  </h4>
                  <div class="info-product-price">
                    <span class="item_price">$137.00</span>
                    <del>$420.00</del>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="#" method="post">
                      <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="Maiyas Gulab Jamun, 500g" />
                        <input type="hidden" name="amount" value="137.00" />
                        <input type="hidden" name="discount_amount" value="1.00" />
                        <input type="hidden" name="currency_code" value="USD" />
                        <input type="hidden" name="return" value=" " />
                        <input type="hidden" name="cancel_return" value=" " />
                        <input type="submit" name="submit" value="Add to cart" class="button" />
                      </fieldset>
                    </form>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xs-4 product-men">
              <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item">
                  <img src="images/k3.jpg" alt="">
                  <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                      <a href="single.html" class="link-product-add-cart">Quick View</a>
                    </div>
                  </div>
                  <span class="product-new-top">New</span>

                </div>
                <div class="item-info-product ">
                  <h4>
                    <a href="single.html">Lipton Green Tea</a>
                  </h4>
                  <div class="info-product-price">
                    <span class="item_price">$384.00</span>
                    <del>$480.00</del>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="#" method="post">
                      <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="Lipton Green Tea, 100 Pieces" />
                        <input type="hidden" name="amount" value="384.00" />
                        <input type="hidden" name="discount_amount" value="1.00" />
                        <input type="hidden" name="currency_code" value="USD" />
                        <input type="hidden" name="return" value=" " />
                        <input type="hidden" name="cancel_return" value=" " />
                        <input type="submit" name="submit" value="Add to cart" class="button" />
                      </fieldset>
                    </form>
                  </div>

                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- //first section -->
        </div>
      </div>
      <!-- //product right -->
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