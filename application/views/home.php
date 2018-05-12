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
    
</head>
<body>

<!-- INI AWAL NAVBAR -->
<div id="header">
	<nav class="navbar navbar-expand-lg bg-dark">
  <a class="navbar-brand" href="#">GO-STAND</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="buku.php">Daftar Stand</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
    	<form class="form-inline">
   		 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
 		</form>

      <li class="nav-item">
        <a class="btn btn-outline-success my-2 my-sm-0" href="#">Login</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<!-- INI AKHIR NAVBAR -->

<!-- INI CONTAINER IKLAN/HOT PRODUK -->
<div class="section1">
<div class="container">
    <div class="row">
        <div class="col">
        	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="https://images.pexels.com/photos/539432/pexels-photo-539432.jpeg?cs=srgb&dl=caffeine-close-up-coffee-539432.jpg&fm=jpg/600x200?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://images.pexels.com/photos/161600/smoothie-fruit-beverage-drink-161600.jpeg?cs=srgb&dl=berry-beverage-blur-161600.jpg&fm=jpg/600x200?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://images.pexels.com/photos/452737/pexels-photo-452737.jpeg?cs=srgb&dl=beverage-citrus-fruit-cocktail-452737.jpg&fm=jpg/600x200?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div> 
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
            <div class="card"> 
                <div class="card-header text-white" >
                    <i class="fa fa-book " aria-hidden="true"></i> <span>Featured</span>  
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-white">
                    <span>Featured</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> 
    </div>
</div>
</div>
<!-- INI CARD AKHIR MAKANAN DAN MINUMAN -->

<!-- SCRIPT -->
<script src="<?php echo base_url('asset/js/jquery.js');?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>

</body>
</html>