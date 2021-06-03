<!doctype html>
<html lang="en">
<style>

*{
margin: 0;
padding: 0;
}
html {
scroll-behavior: smooth;
}
#logo {

margin : -10px;
padding-right : 50px;
}

body {
  min-height: 1100px;
}

.headline4{
    color: black;
		font-family: algerian;
		font-size: 40px;
		text-align: Center;
  }

.card-title{
  font-weight: bold;
}

.harga{
  font-weight: bold;
}

</style>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />


    <title>Akun</title>

	<Link rel="icon" href="Logo_Dummy_Barber.png" sizes="32x32">
	<Link rel="icon" href="Logo_Dummy_Barber.png" sizes="192x192">
	
	
    <title>Akun</title>
	
  </head>
 <body>
<?php
  if (isset($_GET['pesan'])){
    if ($_GET['pesan'] == "sukses"){
      function function_alert() {
        echo "<script>alert('selamat datang!');</script>";
      }
      function_alert();
    }
  }
?>
  <!--Start Navbar-->

  <nav class="navbar navbar-expand-lg navbar-dark shadow p-2" style="background-color: #000000">
    <div class="container">
        <a class="nav-link active" id="logo" aria-current="page" href="#"><img src="Logo_Dummy_Barber.png" height="50px"></a>
      <a class="navbar-brand" href="#">WEBHAIRSTYLE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
		  <li class="nav-item">
<?php 
		include "koneksi.php";
		$query="SELECT * FROM whspay";
		$result = mysqli_query($host, $query);
		if(mysqli_num_rows($result) > 0)
		{
		 while($row =mysqli_fetch_array($result))
		 {
		  echo '<div style="Color:white">WHSPay Balance : '. $row["saldo"].'</div>';
		 }
		}
?>

      <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="wares.php">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-us">Kontak Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pengaturan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!--End Navbar-->

    <!-- Login -->

    <div>

<form class="form" method="post" name="login">
    <div class="imgcontainer" style="padding-top: 2cm;padding-bottom: 1cm;">
     <center>
      <img src="Logo_Dummy_Barber.png" width="150" height="150" alt="Avatar">
     </center>
    </div>
  </form>

</div>

    <!-- End Login -->

<br>
<br>
<br>


   <!-- Layanan Kami - Jumbotron -->


   <section class="jumbotron text-center">
  
    <h1 class="headline4">Layanan Barber Kami</h1>
    <br>
    <br>
    <div class="row justify-content-center">
    <div class="card ms-4" style="width: 12rem;">
      <img src="Men's Hair.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> Men's Haircut</h5>
        <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <p>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        </p>
        <p class="harga"> Rp.40.000 </p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_konfirmasi">Order</button>
      </div>
    </div>
    <div class="card ms-4" style="width: 12rem;">
      <img src="Beard Trim.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Beard Trim</h5>
        <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <p>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        </p>
        <p class="harga"> Rp.10.000 </p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_konfirmasi">Order</button>
      </div>
    </div>
    <div class="card ms-4" style="width: 12rem;">
      <img src="Treatment.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Treatment</h5>
        <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <p>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star-half fa-lg"></i>
        </p>
        <p class="harga"> Rp.60.000 </p>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_konfirmasi">Order</button>
      </div>
    </div>
    <div class="card ms-4" style="width: 12rem;">
      <img src="Wash.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Wash</h5>
        <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        <p>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        <i class="fa fa-star fa-lg"></i>
        </p>
        <p class="harga"> Rp.30.000 </p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup_konfirmasi">Order</button>
		
      </div>
    </div>
  </div>
  
<!-- Modal -->
<div class="modal fade" id="popup_konfirmasi" tabindex="-1" role="dialog" aria-labelledby="popup_konfirmasi" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popup_konfirmasi">Konfirmasi</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin membeli layanan ini ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Konfirmasi</button>
      </div>
    </div>
  </div>
</div>
  </section>


   <!-- End Layanan Kami - Jumbotron -->



   <!-- Layanan Kami - Horizontal -->

      <!--
   <div class="card mb-3" style="max-width: 540px;">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <img src="Men's Hair.png" alt="100">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Men's Hair</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
 -->





   <!-- End Layanan Kami - Jumbotron -->

        
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>
</html>
