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
        <a class="nav-link" href="<?php echo base_url('pembeli/index');?>">Home <span class="sr-only">(current)</span></a>
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
        <a class="btn btn-outline-light" href="#">LogOut</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<!-- INI AKHIR NAVBAR -->