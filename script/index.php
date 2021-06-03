<!doctype html>
<html lang="en">
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


    <title>WEB HAIR STYLE</title>

	<Link rel="icon" href="Logo_Dummy_Barber.png" sizes="32x32">
	<Link rel="icon" href="Logo_Dummy_Barber.png" sizes="192x192">
	
	
    <style>
	*{
		margin: 0;
		padding: 0;
		
	}
	 html {
			scroll-behavior: smooth;
	}

	#style-bridgnorth {

	font-family: bridgnorth;

	}

	.headline1{
		color: #fff;
		font-family: algerian;
		font-size: 40px;
		text-align: left;
		padding-top: 100px;
	  padding-left: 100px;
	  text-shadow: 3px 2px 1px grey;
		}

	.headline2{
		color: black;
		font-family: algerian;
		font-size: 40px;
		text-align: Center;
		padding-top: 250px;
	  padding-left: 500px;
		}
	.headline3{
		color: #fff;
		font-family: "Raleway",fantasy;
		font-size: 40px;
		text-align: left;
		margin-right:100px;
	  text-shadow: 3px 2px 1px grey;
		}

  .headline4{
    color: black;
		font-family: algerian;
		font-size: 40px;
		text-align: Center;
    padding-top: 5rem;
  }

  .headline5{
    color: black;
		font-family: algerian;
		font-size: 40px;
		text-align: Center;
    padding-top: 1rem;
  }

	.text1{
		color: #fff;
		font-family: bridgnorth;
		font-size: 22px;
		text-align: left;
	  padding-top: 10px;
	  padding-left: 50px;
	  text-shadow: 3px 2px 1px rgb(37, 35, 35);
		}
	.text2{
		color: black;
		font-family: bridgnorth;
		font-size: 22px;
		text-align: left;
	  padding-left: 535px;
	  padding-top: 50px;
	  text-shadow: 3px 2px 1px rgb(216, 206, 206);
		}
	.text3{
		color: #fff;
		font-family: "Raleway",serif;
		font-size: 22px;
		text-align: left;
		 margin-right:100px;
		}

	.text4{
	  color:#fff
	  font-family: bridgnorth;
	  font-size: 22px;
		text-align: center;
	  padding-top: 50px;
	  padding-right: 10px;
	  text-shadow: 3px 2px 1px rgb(216, 206, 206);
	}
  .text5{
    padding-top: 4rem;
  }

  .jumbotron{
    background-color:rgb(230, 221, 192)
  }

	.background1 {
		background: url(model1.png) no-repeat;
		background-size: cover;
		width:100%;
		height:650px;
		box-sizing:border-box;
	}

	.background2 {
		background: url(model2.png) no-repeat;
		background-size: cover;
		width:100%;
		height:650px;
		box-sizing:border-box;
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

	.row{

	  padding-top: 2rem;
	  text-align:center;

	}

	.row2{

	  padding-top: 100px;
	  text-align:center;

	}
	#logo {

		margin : -10px;
		padding-right : 50px;
	}

	#middle {

		padding-left: 500px;
    font-family: algerian;
	}

	#middle2{

		padding-left: 500px;
	}

	/* VERSI DESKTOP  */

  /*
	@media (min-width:992px){

	.navbar-brand, .nav-link{
	  color: #fff !important;
	}

	.nav-link {
	  text-transform: uppercase;
	  margin-right: 30px;
	  }
	}

	.nav-link:hover::after {
	  content: '';
	  display: block;
	  border-bottom: 3px solid #ffffff;
	  width: 100%;
	  margin: auto;
	  padding-bottom: 5px;
	}
  */
  

	.carousel-item{
	  height: 100vh;
	  min-height: 300px;
	  background:no-repeat center center scroll;
	  -webkit-background-size: cover;
	  background-size: cover;
	}

	.carousel-caption{
	  bottom: 220px;
	}

	.coursel-caption h5{
	  font-size: 45px;
	  text-transform: uppercase;
	  letter-spacing: 2px;
	  margin-top: 25px;
	  font-family:'Franklin Gothic Medium';
	}

	.coursel-caption p{
	  width: 60%;
	  margin: auto;
	  font-size: 18px;
	  line-height: 1.9;
	  font-family: 'Franklin Gothic Medium';
	}

	.coursel-caption a{
	  text-transform: uppercase;
	  background: #262626
	  padding: 10px 30px;
	  display: inline-block;
	  color: #fff;
	  margin-top: 15px;
	}

	#style-algerian{
	  font-family: 'Trebuchet MS';
	}

	#login {

		margin-left: 300px;
		
	}

	.anchor {
		color: transparent;
	}


  #Katalog {

    background-color:rgb(230, 221, 192)
  }

  .navbar-brand {
    font-family: algerian;
  }

  /*
  .row .card:hover {
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4);
  }
  */

  .title{
    color : white;
    font-size : 66px;
    font-family: algerian;
  }

    </style>
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

<!--Nav-1  
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
    <div class="container">
      <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				        <li class="nav-item">
                    <a class="nav-link active" id="logo" aria-current="page" href="#"><img src="Logo_Dummy_Barber.png" height="50px"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" a href="#katalog" text="transparent">Katalog</a>
					        </li>
                  <li class="nav-item">
                    <a class="nav-link" a href="#whspay">WHS Pay</a>
				          </li>
                  <li class="nav-item">
                    <a class="nav-link" a href="#contact-us">Kontak kami</a>
				          </li>
					<li class="nav-item">
                    <a class="nav-link" id="login" href="login.html">Login</a>
					<li class="nav-item">
                    <a class="nav-link" href="signup.html">Buat Akun</a>
					</li>
					</li>
                </ul>
            </div>
          </div>
        </div>
    </nav>
  -->

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow p-2" style="background-color: #000000">
    <div class="container">
        <a class="nav-link active" id="logo" aria-current="page" href="#"><img src="Logo_Dummy_Barber.png" height="50px"></a>
      <a class="navbar-brand" href="#">WEBHAIRSTYLE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" a href="#katalog">Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#WHSPay">WHSPay</a>
          </li>
	  <li class="nav-item">
            <a class="nav-link" href="wares.php">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-us">Kontak Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">Buat Akun</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


    <!--End Navbar-->

    <!--Start Carousel-->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" id=>
        <div class="carousel-item active">
          <img src="bg_1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="title">WEBHAIRSTYLE</h1>
            <p class="text1 text-center">Website Pangkas Rambut Online yang memudahkan loe untuk tampil keren dimanapun, kapanpun, loe mau</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="bg_2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="title">WEBHAIRSTYLE</h1>
            <p class="text1 text-center">Tetap jaga kesehatan, jangan sampai sakit. Tetap jaga kekerenan, jangan lupa tampil nyentrik</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="bg_3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="title">WEBHAIRSTYLE</h1>
            <p class="text1 text-center">Bergabung bersama kami</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--End Caraousel-->

    <!--Start Jumbotron - Get Membership-->

    <section class="jumbotron text-center">
      <h1 class="headline4">WE ARE STYLISH, THE NEW ERA OF KAPSTER</h1>
      <br>
      <br>
      <br>
      <button class="btn btn-dark md-3 mb-5" type="submit" href="signup.php">Get Membership</button>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fffff" fill-opacity="1" d="M0,192L40,170.7C80,149,160,107,240,90.7C320,75,400,85,480,74.7C560,64,640,32,720,37.3C800,43,880,85,960,101.3C1040,117,1120,107,1200,122.7C1280,139,1360,181,1400,202.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>


    <!--End Jumbotron - Get Membership-->

    <!-- Background #KerenTerus -->

	<div class="background1">
		<h1 class="headline1">#KERENTERUS</h1>
		<p class="text1" id="style-bridgnorth" >webhairstyle adalah salah satu startup yang berasal dari Indonesia<br> yang melayani jasa pangkas rambut secara daring.<br>
      webhairstyle didirikan pada tahun 2021 oleh 3 pemuda paling keren <br> di Kampus upi cibiru.<br>
      <br> 3 pemuda tersebut membuat website khusus untuk <br> para cowok agak tampil keren dan tidak lusuh.
      <br>3 pemuda ingin agar para cowok bisa sekeren mereka. <br>  kami sadar bahwa cowok-cowok haruslah keren <br> dimanapun dan kapanpun agar siap ketika jodoh telah datang.
    </p>
	</div>

   <!-- End Background #KerenTerus -->

   <!-- Background #Kenapa Harus Webhairstyle -->
   
   <div class="background2">
		<h1 class="headline4"> Kenapa harus webharistyle ? </h1>
		<p class="text2">1. kami menyediakan jasa layanan online yang cepat dengan tarif terjangkau<br>
      2. kami memiliki pengalaman terbaik, anda akan merasakan pengalaman penata rambut pribadi<br>
      3. kami selalu update dan upgrade model-model rambut dan skill kami
    </p>
   </div>

   <!-- End Background #Kenapa Harus Webhairstyle -->

   <!-- Layanan Kami - Jumbotron -->

   <section class="jumbotron text-center">
    <h1 class="headline4">Layanan Barber Kami</h1>
    <div class="row justify-content-center">
    <div class="card ms-4" style="width: 10rem;">
      <img src="Men's Hair.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Men's Haircut</h5>
      </div>
    </div>
    <div class="card ms-4" style="width: 10rem;">
      <img src="Beard Trim.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Beard Trim</h5>
      </div>
    </div>
    <div class="card ms-4" style="width: 10rem;">
      <img src="Treatment.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Treatment</h5>
      </div>
    </div>
    <div class="card ms-4" style="width: 10rem;">
      <img src="Wash.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Wash</h5>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  </section>


   <!-- End Layanan Kami - Jumbotron -->

   <!-- Katalog -->

   <section id="Katalog">
      <div class="container text-center">
        <div class="row">
              <h1 class="row" id="middle" >Katalog</h1>
              <h5 class="text4">Pilih gayamu</h5>
                <div class="col">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100 ms-5" style="width: 16rem;">
                        <img src="kt_1.jpg" class="card-img-center" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Model 1</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 ms-5" style="width: 16rem;">
                        <img src="kt_2.jpg" class="card-img-center" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Model 2</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 ms-5" style="width:16rem;">
                        <img src="kt_3.jpg" class="card-img-center" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Model 3</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
      </div>

      <div class="container text-center">
        <div class="row">
                <div class="col">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100 ms-5" style="width: 16rem;">
                        <img src="kt_4.jpg" class="card-img-center" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Model 4</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 ms-5" style="width: 16rem;">
                        <img src="kt_5.jpg" class="card-img-center" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Model 5</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 ms-5" style="width: 16rem;">
                        <img src="kt_6.jpg" class="card-img-center" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Model 6</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
      </div>

      <div class="container text-center">
        <div class="row">
                <div class="col">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100 ms-5" style="width:16rem;">
                        <img src="kt_7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Model 7</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 ms-5" style="width: 16rem;">
                        <img src="kt_8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Model 8</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100 ms-5" style="width: 16rem;">
                        <img src="kt_9.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Model 9</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L34.3,133.3C68.6,139,137,149,206,181.3C274.3,213,343,267,411,266.7C480,267,549,213,617,202.7C685.7,192,754,224,823,208C891.4,192,960,128,1029,133.3C1097.1,139,1166,213,1234,229.3C1302.9,245,1371,203,1406,181.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>

      <!-- End Katalog -->

      <!-- Founder -->
      <section>
      <div class="container text-center">
        <div class="row">
              <h1 class="row" id="middle2">Founder</h1>
                <div class="col">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="client1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Alang Sati Nan Tongga</h5>
                          <p class="card-text">"Teruslah Bernafas"</br>
						  </br>
						  <i>~ Jack Kahuna Laguna</i></p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="client2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Indra Yana Sabihartono</h5>
                          <p class="card-text">Seorang mahasiswa RPL yang profesional dengan makanan warteg serta pengamat gaya rambut orang yang datang ke warteg</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="client3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Muhammad Hafizd Ananto</h5>
                          <p class="card-text">Berusaha menjadi yang terbaik, walaupun tidak bisa jadi yang terbaik</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
      </div>
    </section>

            <!-- End Founder -->

            <!-- Kontak kami -->
      
 <div class="background3">
  <h1 class="headline3" id="Contact Us">Contact Us</h1></br>
    <p class="text3">Universitas Pendidikan Indonesia, Kampus Cibiru</p>
    <p class="text3">+61 (8) 8234 3555</p>
    <p class="text3">admin@uideck.com</p>
	  <p class="text3" id="contact-us">Hubungi Via WhatsApp <a href="https://api.whatsapp.com/send?phone=6281939123456">Disini</a></p>

        <!-- End Kontak kami -->
        
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
