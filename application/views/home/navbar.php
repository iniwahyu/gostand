<!-- header-bot-->
<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="<?php echo base_url('/'); ?>">
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
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> (024) 3565580
					</li>
					<!-- BAGIAN PEMBELI -->
					<?php
					$cek = $this->session->userdata('akses');
					// BAGIAN PEMBELI
					if( $cek == 'Pembeli' ) 
					{
					?>

					<li>
						<a href="<?php echo base_url('pembeli/profile'); ?>">
							<span class="fa fa-user-o" aria-hidden="true"></span> My Profile
						</a>
					</li>

					<li>
						<a href="<?php echo base_url('logout'); ?>">
							<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
						</a>
					</li>
					
					<?php } ?>				

					<?php
					if ( $cek == 'Penjual' ) { ?>
					<li>
						<a href="<?php echo base_url('penjual'); ?>">
							<span class="fa fa-dashboard" aria-hidden="true"></span> Dashboard
						</a>
					</li>

					<li>
						<a href="<?php echo base_url('logout'); ?>">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Logout
						</a>
					</li>
					
					<?php } ?>

					<?php
					if ( $cek == 'Admin' ) { ?>
					<li>
						<a href="<?php echo base_url('admin'); ?>">
							<span class="fa fa-dashboard" aria-hidden="true"></span> Dashboard
						</a>
					</li>

					<li>
						<a href="<?php echo base_url('logout'); ?>">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Logout
						</a>
					</li>
					
					<?php } ?>

					<?php $status = $this->session->userdata('status'); if ( $status != 'login' ) { ?>
					
					<li>
						<a href="<?php echo base_url('login'); ?>">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Login 
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('registrasi'); ?>">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Register
						</a>
					</li>
					<?php } ?>


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
					<a href="<?php echo base_url('pembeli/keranjang'); ?>">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<button class="custom-cart">
							<i class="fa fa-cart-arrow-down text-white" aria-hidden="true"></i>
						</button>
					</div>
					</a>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default navbar-left">
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
								<li class="<?php if ( $this->uri->uri_string() == '' ){ echo 'active'; } ?>">
									<a class="nav-stylehead" href="<?php echo base_url('/'); ?>">Home</a>
								</li>
								<li class="<?php if ( $this->uri->uri_string() == 'toko' ){ echo 'active'; } ?>">
									<a class="nav-stylehead" href="<?php echo base_url('toko'); ?>">Stand</a>
								</li>
								<li class="<?php if ( $this->uri->uri_string() == 'makanan' ){ echo 'active'; } ?>">
									<a class="nav-stylehead" href="<?php echo base_url('makanan'); ?>">Makanan</a>
								</li>
								<li class="<?php if ( $this->uri->uri_string() == 'minuman' ){ echo 'active'; } ?>">
									<a class="nav-stylehead" href="<?php echo base_url('minuman'); ?>">Minuman</a>
								</li>

								<?php if ( $cek == 'Pembeli' || $cek == 'Admin' ) { ?>

								<li class="<?php if ( $this->uri->uri_string() == 'pembeli/history' ){ echo 'active'; } ?>">
									<a class="nav-stylehead" href="<?php echo base_url('pembeli/history'); ?>">Riwayat Pembelian</a>
								</li>
								<li class="<?php if ( $this->uri->uri_string() == 'pembeli/keranjang' ){ echo 'active'; } ?>">
									<a class="nav-stylehead" href="<?php echo base_url('pembeli/keranjang'); ?>">Keranjang Belanja</a>
								</li>
								<?php } ?>

							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
