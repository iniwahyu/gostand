<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Edit Profil</title>

   <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/stylehome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/stylepembeli.css'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  
  <body>


  

  <!-- INI AWAL NAVBAR -->
<div id="header">
  <nav class="navbar navbar-expand-lg">
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

    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
  </form>

    <ul class="navbar-nav ml-auto"> 
      <li class="nav-item">
        <a class="btn btn-outline-light" href="#">Login</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<!-- INI AKHIR NAVBAR -->
  
  <div>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 align="center"><br>Data Diri</h1>
      </div>

      <div id="formeditprofil">
      <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="table">
                <tr>
                  <div align="center">
                    <img id="img1" class="img-fluid" src="<?php echo base_url('asset/img/pembeli-iconuser.png'); ?>" alt="Ikon User">
                  </div>                            
                </tr>                             
              </div>
            </div>
          
        
            <div class="col-md-6">                  
               <form action="">
                  <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" placeholder="Nama Anda" name="email">
                  </div>
                  <div class="form-group">
                    <label for="nim">NIM :</label>
                    <input type="text" class="form-control" placeholder="NIM" name="nim" disabled>
                  </div>
                  <div class="form-group">
                    <label for="nama">Email :</label>
                    <input type="email" class="form-control" placeholder="Email Anda" name="email">
                  </div>                            
                  <div class="form-group">
                    <label for="nohape">No. Handphone :</label>
                    <input type="text" class="form-control" placeholder="No.Handphone" name="nohape">
              </form>
                <br>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>                
          </div>
        </div>
      </div>
    </div>
  </div>

      
  </body>
  
            

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="<?php echo base_url('asset/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>