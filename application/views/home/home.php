<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/stylehome.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
</head>
<body id="body">

<!-- INI AWAL NAVBAR -->
<?php require_once(APPPATH. 'views/home/navbar.php'); ?>
<!-- INI AKHIR NAVBAR -->

<!-- INI CONTAINER IKLAN/HOT PRODUK -->
<div class="section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <img src="https://s3.bukalapak.com/uploads/flash_banner/33392/s-1256-824/New_Banner_1.jpg" alt="" width="100%" height="350" >
            </div>
            <div class="col-sm-6">
                <img src="https://s3.bukalapak.com/uploads/flash_banner/30392/s-824-392/Banner_2_BukaYangBaik_massvucher_.jpg" alt="" width="100%" height="350" >
            </div>
        </div>
    </div>
</div>
<!-- INI PENUTUP CONTAINER IKLAN/HOT PRODUK -->

<!-- INI CARD AWAL MAKANAN DAN MINUMAN -->
<div class="section2">
<div class="container">
    <div class="row">
        <div class="col-md-6">
			<a href="<?php echo base_url('produk');?>">
            <div class="card-kiri">
			  <div class="card-body">
				<div class="card-icon">
					<i class="fa fa-cutlery" aria-hidden="true"></i>
				</div>
			    <div class="card-text">
					<h4>MAKANAN</h4>
					<ul>
						<li>Makanan Halal 100%</li>
						<li>Makanan Selalu Terbaru</li>
						<li>Makanan Berkualitas</li>
					</ul>
				</div>
			  </div>
			  </a>
			</div>
        </div>

        <div class="col-md-6">
            <div class="card-kanan">
			  <div class="card-body">
				<div class="card-icon">
					<i class="fa fa-coffee" aria-hidden="true"></i>
				</div>
			    <div class="card-text">
				<h4>MINUMAN</h4>
					<ul>
						<li>Minuman Halal 100%</li>
						<li>Minuman Selalu Terbaru</li>
						<li>Minuman Berkualitas</li>
					</ul>
				</div>
			  </div>
			</div>
        </div> 
    </div>
</div>
</div>
<!-- INI CARD AKHIR MAKANAN DAN MINUMAN -->

<!-- INI AWAL ABOUT -->
<div class="section3">
<div class="container">
	<h3>HOT PRODUK</h3>
	<div class="row">
		<div class="col-md-4">
			<div class="card">
			<img class="card-img-top" src="https://ecs.tokopedia.com/img/cache/300-square/attachment/2018/5/8/22150512/22150512_84f116df-5e56-4adb-93d5-4ca7e03b4602.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="card">
			<img class="card-img-top" src="https://ecs.tokopedia.com/img/cache/300-square/attachment/2018/5/8/22150512/22150512_84f116df-5e56-4adb-93d5-4ca7e03b4602.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
			<img class="card-img-top" src="https://ecs.tokopedia.com/img/cache/300-square/attachment/2018/5/8/22150512/22150512_84f116df-5e56-4adb-93d5-4ca7e03b4602.jpg" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		
	</div>
</div>
</div>

<div class="section4">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card-icon">
				<i class="fa fa-shield" aria-hidden="true"></i>
			</div>
			<h4>AMAN</h4>
		</div>
		
		<div class="col-md-4">
			<div class="card-icon">
				<i class="fa fa-money" aria-hidden="true"></i>
			</div>
			<h4>MUDAH BAYARNYA</h4>
		</div>

		<div class="col-md-4">
			<div class="card-icon">
				<i class="fa fa-ticket" aria-hidden="true"></i>
			</div>
			<h4>24 / 7</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="about">
			<p><b>GoStand</b> adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id feugiat arcu. Proin non nisi augue. Cras pharetra velit quis aliquam pretium. Proin a augue ac sem eleifend lacinia id rutrum arcu. Vestibulum venenatis, felis vel dapibus maximus, augue ipsum cursus magna, sed condimentum dui tortor sed diam. Duis in nulla a nunc lacinia dapibus quis in turpis. Vestibulum porttitor pharetra nisi sed interdum. Nam molestie magna tortor, egestas sollicitudin risus vehicula eleifend. Curabitur lobortis est bibendum, laoreet arcu ut, iaculis mauris. Donec sollicitudin sed enim non viverra. Nullam mollis, nunc nec scelerisque congue, diam urna luctus purus, id eleifend ante eros convallis nisl. Vestibulum quis elit eu diam ornare mattis ut at felis. Vestibulum felis felis, lacinia in fermentum ac, consequat eu purus. Donec molestie elit in imperdiet vulputate. Etiam arcu nulla, mollis a nulla vitae, varius condimentum libero. </p>
			</div>
		</div>
	</div>
</div>
</div>

<!-- INI AKHIR ABOUT -->

<!-- SCRIPT -->
<script src="<?php echo base_url('asset/js/jquery.js');?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>