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

.headline4{
    color: black;
		font-family: algerian;
		font-size: 40px;
		text-align: Center;
  }
  
.background3 {
	        background: #333333 no-repeat;
	        background-size: cover;
	        background-attachment:fixed;
	        margin-top:100px;
	        width:100%;
	        height:350px;
	        padding:50px;
          box-sizing:border-box;
	        text-align:left;
          }
		  
.headline3{
            color: #fff;
            font-family: "Raleway",fantasy;
            font-size: 40px;
	        text-align: left;
	        margin-right:100px;
            text-shadow: 3px 2px 1px grey;
	        }
			
.text3{
            color: #fff;
            font-family: "Raleway",serif;
            font-size: 22px;
	        text-align: left;
	        margin-right:100px;
	        }
			
.card-title{
  font-weight: bold;
}

.harga{
  font-weight: bold;
  
}

.navbar-brand {
    font-family: algerian;
}

.button-invoice {
    text-align: right;
    padding-right: 6rem;
    padding-top: 1rem;
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


    <title>INVOICE</title>

	<Link rel="icon" href="Logo_Dummy_Barber.png" sizes="32x32">
	<Link rel="icon" href="Logo_Dummy_Barber.png" sizes="192x192">
	
	
    <title>INVOICE</title>
	
  </head>
 <body>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
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
		</li>
	  
		<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-us">Kontak Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editakun.php">Pengaturan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!--End Navbar-->

   <!-- Invoice -->

   <div class="container">
    <h2 class="alert alert-primary text-center mt-5">INVOICE</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Invoice ID</th>
      <th scope="col">Email</th>
      <th scope="col">Layanan</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $_SESSION['username']; ?></td>
      <td>Treatment</td>
      <td>Rp. 60.000</td>
    </tr>
  </tbody>
</table>
</div>

   <div class="button-invoice">
   <button onclick="location.href = 'akun.php';" type="button" class="btn btn-primary">Kembali</button>
   </div>





   <!-- End Invoice -->




<div class="background3">
          <h1 class="headline3" id="Contact Us">Contact Us</h1></br>
          <p class="text3">Universitas Pendidikan Indonesia, Kampus Cibiru</p>
          <p class="text3">+61 (8) 8234 3555</p>
          <p class="text3">admin@uideck.com</p>
		  <p class="text3" id="contact-us">Hubungi Via WhatsApp <a href="https://api.whatsapp.com/send?phone=6281939123456">Disini</a></p>
        </div>

        
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>
</html>
© 2021 GitHub, Inc.