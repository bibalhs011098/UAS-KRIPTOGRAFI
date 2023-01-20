<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Welcome to My Website</h1>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="navbar-brand" href="index.php">Home</a>
    </li>
  </ul>
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <div class="card" style="width:350px">
  <img class="card-img-top" src="IMG_0029.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Habib Al Hasan</h4>
	<p class="card-text">NPM : 1955201124.</p>
	<p class="card-text">Teknik Informatika.</p>
    <p class="card-text">Universitas Muhammadiyah.</p>
    <a href="Profile.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-sm-8">
     <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="better.jpg" alt="better" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="better.jpg" alt="better" class="d-block w-100">
    </div>
  </div>
  
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
    </div>
  </div>
</div>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-8">
      <h2>Description</h2>
      <h5>better</h5>
      <p>   Mayora Indah Tbk (MAYOR). didirikan 17 februari 1977 dan Mulai beroperasi secara komersial pada bulan Mei 1878.
Kantor pusat Mayora berlokasi di gedung Mayora, Jl, Tomang Raya No, 21-23 jakarta 11440.

     Berdasarkan Anggaran Dasar Perusahaan, ruang lingkup Mayora adalah mejalankan usaha dalam bidanag industri, perdagangan serta agen/perwakilan. Saat ini, Myora mejalankan bidang usaha industri biskuit (Roma, Danisa, Royal Choice Better, Muuch Better, Slai O lai, Sari Gandum ,Sari Gandum Sandwich,Coffeejoy, Chees' Krees), kembang gula (Choki- choki), kopi (Torabika dan Kopiko) dan makan kesehatan (Energen) serta mejual produknya di pasar lokal dan luar negeri.
Pada tanggal 25 Mei 1990 Mayor memperoleh peryataan efektif dari Bapem - LK untuk melakukan penawaran umum perdana saham Mayor (IPO) kepada masyarakat sebanyak 3.000.000 dengan nilai nominal Rp 1.000,per saham dengan harga penawaran Rp 9.300,- per saham.</p>
	  <p><h5>Diperkenalkan :</h5> 17 februari 1977 dan Mulai beroperasi secara komersial pada bulan Mei 1878
	  <h5>Produsen :</h5> Mayora Indah Tbk (MAYOR)
	  <h5>Diluncurkan :</h5> 25 Mei 1990
	  <h5>Jenis produk :</h5>  BETTER SANDWICH BISKUIT VANILA CREAM
	  <h5>Perusahaan induk :</h5> Mayora Indah Tbk (MAYOR)
</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
<ul class="pagination">
  <li class="page-item"><a class="page-link" href="index.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="index.php">1</a></li>
  <li class="page-item"><a class="page-link" href="page2.php?page=page2.php">2</a></li>
  <li class="page-item"><a class="page-link" href="page3.php?page=page3.php">3</a></li>
  <li class="page-item"><a class="page-link" href="page2.php?page=page1.php">Next</a></li>
</ul>
  <p>2023</p>
</div>
 <?php 
    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    else 
    {
        echo "<p></p>";
    }
    
    ?>
</body>
</html>