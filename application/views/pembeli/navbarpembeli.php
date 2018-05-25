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
          <li>
            <a href="<?php echo base_url('pembeli/profile'); ?>">
              <span class="fa fa-user-o" aria-hidden="true"></span> My Profile
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('logout'); ?>">
              <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> LogOut
            </a>
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
                <li class="active">
                  <a class="nav-stylehead" href="<?php echo base_url('/'); ?>">Home</a>
                </li>
                <li class="">
                  <a class="nav-stylehead" href="<?php echo base_url('toko'); ?>">Stand</a>
                </li>
                <li class="">
                  <a class="nav-stylehead" href="<?php echo base_url('makanan'); ?>">Makanan</a>
                </li>
                <li class="">
                  <a class="nav-stylehead" href="<?php echo base_url('minuman'); ?>">Minuman</a>
                </li>
                <li class="">
                  <a class="nav-stylehead" href="#">Riwayat Pembelian</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- //navigation -->
