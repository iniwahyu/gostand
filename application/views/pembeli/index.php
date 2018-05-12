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
      <li class="nav-item">
        <a class="nav-link" href="#">Riwayat Pembelian</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
    	<form class="form-inline">
   		 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
 		</form>

      <li class="nav-item">
        <a class="btn btn-outline-success my-2 my-sm-0" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<!-- INI AKHIR NAVBAR -->

<!-- INI AWALAN PROFILE -->
<div  class='container-fluid'>
	<div class="panel panel-primary">
  		<div class="panel-heading">
  			<h1 align="center"><br>Data Diri</h1>
  		</div>
  				
  		<div class="panel-body">
  			<div class="row">
				<div class="col-md-6">
					<div align="center">
						<div class="media">  					
  							<div class="media-body">
    							<h4 class="media-heading">Nama user</h4>
    							<p>Edit Data</p>
    							<p>Edit Data</p>
    							<p>Edit Data</p>
  							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">					
					<div align="left">
						<h4>NIM	:</h4>
						<h4>Nama	:</h4>
						<h4>Email	:</h4>
						<h4>No Hp	:</h4>
						<h4>Password	:</h4>

					</div>
				</div>
			</div>
  		</div>			
	</div>
</div>

<!-- INI AKHIRAN PROFILE -->

<!-- SCRIPT -->
<script src="<?php echo base_url('asset/js/jquery.js');?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>

</body>
</html>