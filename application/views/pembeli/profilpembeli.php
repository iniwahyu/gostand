<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    
    <title>Profil Pembeli</title>

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

      <div id=formprofil>
      <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="table">
                <tr>
                  <div align="center" style="margin-top: 10px">            
                    <img class="img-fluid" src="<?php echo base_url('asset/img/pembeli-iconuser.png'); ?>" alt="Ikon User">
                  </div>                            
                </tr>                             
              </div>            
            </div>
        
            <div class="col-md-6">                  
               <table class="table">            
                <tbody>
                  <tr>
                    <th scope="row">Nama</th>
                    <td colspan="5">: Bugi Setiawan</td>              
                  </tr>
                  
                  <tr>
                    <th scope="row">NIM</th>
                    <td colspan="5">: A11.2016.09358</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">Email</th>
                    <td colspan="5">: bugisetiawan98@gmail.com</td>
                  </tr>
                  
                  <tr>
                    <th scope="row">No.Handphone :</th>
                    <td colspan="5">: 087830431896</td> 
                  </tr>                                       
                  </tbody>
              </table>
                <button type="button" class="btn btn-primary">Edit Data Diri</button>                
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