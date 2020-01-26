<?php

$urunid=1;

$YemekResim="y1.jpg";
$YemekAdi="TAVUK DÖNER";
$YemekFiyatı=8;
$YemekKategori="Aperatif";
$YemekAdres="Üni Caddesi";
$YemekFirma="Öncü Döner";





?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Yemekpaketi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="yonlendir.php">Anasayfa<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Hakkımızda</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Yemekler
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Aktif değil</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Ara" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
    </form>
  </div>
</nav>

<div class="container">   <!-- ana konteynır -->
  <h1 align="center"> <?php echo $YemekAdi; ?></h1>
  <div class="row">

         <div class="col-sm-5">
     <img src="<?php echo $YemekResim ?>" class="img-fluid">
     </div>
    <div class="col-sm-5">

<table class="table">

  <tbody>
        <tr>
      <th scope="row">Kategori</th>
      <td scope="row"><?php echo $YemekKategori ?></th>

    </tr>
    <tr>
      <th scope="row">Fiyatı</th>
      <td><?php echo $YemekFiyatı ?></td>

    </tr>
    <tr>
      <th scope="row">Firma</th>
      <td><?php echo $YemekFirma ?></td>

    </tr>
    <tr>
      <th scope="row">Adresi</th>
      <td><?php echo $YemekAdres ?></td>

    </tr>
  </tbody>
</table>

</div>


 
      <div class="col-sm-2">
      <img src="r1.jpg" class="img-fluid">
      </div>

  </div>
  
<div class="row">
  <div class="col-sm-3">
    <p>deneme</p>
  </div>
  <div class="col-sm-3">
        <p>deneme</p>
  </div>
  <div class="col-sm-3">
        <p>deneme</p>
  </div>
  <div class="col-sm-3">
        <p>deneme</p>
  </div>
  
</div>


</div>














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


