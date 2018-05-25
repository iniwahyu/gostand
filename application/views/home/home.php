<!DOCTYPE html>
<html>

<head>
<<<<<<< HEAD
	<title>GOSTAND</title>
=======
	<title>GoStand</title>
>>>>>>> refs/remotes/origin/master
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
</head>

<body>

<<<<<<< HEAD
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.html">
						<span>G</span>o
						<span>S</span>tand
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim">
							<span class="fa fa-map-marker" aria-hidden="true"></span> Semarang</a>
					</li>
					<!-- <li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-truck" aria-hidden="true"></span>Lacak pesanan</a>
					</li> -->
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> (024) 3565580
					</li>
					<li>
						<a href="penjual/login.php" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Login </a>
					</li>
					<li>
						<a href="penjual/registrasi.php" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Register</a>
					</li>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="Bagaimana kami dapat membantu anda hari ini?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Login </h3>
						<p>
							Masuk sekarang, Mari mulai Belanja Makanan dan Minuman Anda. Punya akun?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Register Sekarang</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Login">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Register</h3>
						<p>
							Ayo bergabung dengan GoStand! Mari siapkan Akun Anda.
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
							</div>
							<input type="submit" value="Register">
						</form>
						<p>
							<a href="#">Dengan mengklik register, saya menyetujui persyaratan Anda</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" required="">
						<option value="">Semua Kategori</option>
						<option value="Kitchen">Kitchen</option>
						<option value="Household">Household</option>
						<option value="Snacks &amp; Beverages">Snacks & Beverages</option>
						<option value="Personal Care">Personal Care</option>
						<option value="Gift Hampers">Gift Hampers</option>
						<option value="Fruits &amp; Vegetables">Fruits & Vegetables</option>
						<option value="Baby Care">Baby Care</option>
						<option value="Soft Drinks &amp; Juices">Soft Drinks & Juices</option>
						<option value="Frozen Food">Frozen Food</option>
						<option value="Bread &amp; Bakery">Bread & Bakery</option>
						<option value="Sweets">Sweets</option>
					</select>
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="index.html">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.html">Makanan</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="faqs.html">Minuman</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->

=======
	<?php require_once(APPPATH. 'views/home/navbar.php'); ?>
>>>>>>> refs/remotes/origin/master
	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
<<<<<<< HEAD
			<h3 class="tittle-w3l">Penawaran khusus
=======
			<h3 class="tittle-w3l">HOT PRODUK
>>>>>>> refs/remotes/origin/master
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
            <div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
<<<<<<< HEAD
						<h3 class="heading-tittle">Hot Menu</h3>
=======
						<h3 class="heading-tittle">MAKANAN</h3>
>>>>>>> refs/remotes/origin/master
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo base_url('asset/home/images/ramen.jpg'); ?>" alt="">
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Ramen</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">Rp 25.000</span>
										<del>Rp 35.000</del>
									</div>
									<a href="" class="btn btn-primary">Lihat Produk</a>
								</div>
							</div>
						</div>
                        
                        <div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo base_url('asset/home/images/pearl.jpg'); ?>" alt="">
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Jus Melon</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">Rp 10.000</span>
										<del>Rp 15.000</del>
									</div>
									<a href="" class="btn btn-primary">Lihat Produk</a>
								</div>
							</div>
                        </div>
                        
                        <div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo base_url('asset/home/images/m1.jpg'); ?>" alt="">
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Almonds, 100g</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">$149.00</span>
										<del>$280.00</del>
									</div>
									<a href="" class="btn btn-primary">Lihat Produk</a>
								</div>
							</div>
                        </div>
                        
						<div class="clearfix"></div>
					</div>
					<!-- //first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">MINUMAN</h3>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo base_url('asset/home/images/m1.jpg'); ?>" alt="">
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Almonds, 100g</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">$149.00</span>
										<del>$280.00</del>
									</div>
									<a href="" class="btn btn-primary">Lihat Produk</a>
								</div>
							</div>
						</div>
                        
                        <div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo base_url('asset/home/images/snack.jpg'); ?>" alt="">
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Snack Pedas</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">Rp 20.000</span>
										<del>Rp 25.000</del>
									</div>
									<a href="" class="btn btn-primary">Lihat Produk</a>
								</div>
							</div>
                        </div>
                        
                        <div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo base_url('asset/home/images/m1.jpg'); ?>" alt="">
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Almonds, 100g</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">$149.00</span>
										<del>$280.00</del>
									</div>
									<a href="" class="btn btn-primary">Lihat Produk</a>
								</div>
							</div>
                        </div>
                        
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- //special offers -->
	<!-- footer -->
	<footer>
<<<<<<< HEAD
		<div class="container">
			<!-- footer first section -->
			<p class="footer-main"  align="justify">
				<span>"Grocery Shoppy"</span> Website GoStand ini sengaja kami ciptakan untuk mencari makanan  dan minuman yang 
				sangat special yang berasal dari setiap UKM di Universitas Dian Nuswantoro, karena kami percaya bahwa 
				di setiap UKM pasti memiliki keunikan menu dari masing masing produk. Melalui GoStand kami ingin mengajak 
				untuk setiap mahasiswa bisa menikmati makanan dan minuman dari UKM tersebut. Keunikan dari GoStand 
				mahasiswa dapat memesan makanan dan minuman secara online, dan dapat menerimanya sesuai tempat perjanjian
				dengan UKM. Jadi GoStand memudahkan mahasiswa dalam membeli makanan dan minuman, serta membantu UKM
				untuk lebih profesional dan maju.</p>
			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-thumbs-up" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3> Cita Rasa Khas </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-heart" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Higienis </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-star" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3> Berkualitas </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Kategori</h3>
						<ul>
							<li>
								<a href="product.html">Grocery</a>
							</li>
							<li>
								<a href="product.html">Fruits</a>
							</li>
							<li>
								<a href="product.html">Soft Drinks</a>
							</li>
							<li>
								<a href="product2.html">Dishwashers</a>
							</li>
							<li>
								<a href="product.html">Biscuits & Cookies</a>
							</li>
							<li>
								<a href="product2.html">Baby Diapers</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							<li>
								<a href="product.html">Snacks & Beverages</a>
							</li>
							<li>
								<a href="product.html">Bread & Bakery</a>
							</li>
							<li>
								<a href="product.html">Sweets</a>
							</li>
							<li>
								<a href="product.html">Chocolates & Biscuits</a>
							</li>
							<li>
								<a href="product2.html">Personal Care</a>
							</li>
							<li>
								<a href="product.html">Dried Fruits & Nuts</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Tautan Langsung</h3>
						<ul>
							<li>
								<a href="about.html">Tentang Kami</a>
							</li>
							<li>
								<a href="contact.html">Hubungi Kami</a>
							</li>
							<!-- <li>
								<a href="help.html">Help</a>
							</li>
							<li>
								<a href="faqs.html">Faqs</a>
							</li>
							<li>
								<a href="terms.html">Terms of use</a>
							</li>
							<li>
								<a href="privacy.html">Privacy Policy</a>
							</li> -->
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Hubungi Kami</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> Jalan Imam Bonjol No. 207, Pindrikan Lor, Semarang </li>
							<li>
								<i class="fa fa-mobile"></i> 081225225988 </li>
							<li>
								<i class="fa fa-phone"></i> (024) 3565580 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:example@mail.com"> mail@example.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Ikuti Kami</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="agileits_app-devices">
						<h5>Download the App</h5>
						<a href="#">
							<img src="images/1.png" alt="">
						</a>
						<a href="#">
							<img src="images/2.png" alt="">
						</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->

			<!-- //footer fourth section (text) -->
		</div>
=======
		<?php require_once(APPPATH. 'views/home/footer.php'); ?>
>>>>>>> refs/remotes/origin/master
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
<<<<<<< HEAD
			<p>© 2018 GoStand. All rights reserved | Design with
				<a href="http://w3layouts.com"> Love.</a>
=======
			<p>© 2018 Go Stand. All rights reserved
>>>>>>> refs/remotes/origin/master
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