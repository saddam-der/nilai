<!DOCTYPE html>
<html lang="en">
	<head>
    	<!--
    	Boxer Template
    	http://www.templatemo.com/tm-446-boxer
    	-->
		<meta charset="utf-8">
		<title>Landing Page</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
		<!-- font-awesome -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="{{ asset('css/templatemo-style.css')}}">

	</head>
	<body>
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Manajemen Penilaian</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="#home">Home</a></li>
						<li><a href="#feature">Tentang</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">Manajemen Penilaian Siswa</h1>
							<h1>SMK Taruna Bhakti</h1>
							<br>
                            <a class="btn btn-primary" href="{{ url('/admin/login') }}" style="width: 115px; "><h4>Login</h4></a>
							<img src="images/software-img.png" class="img-responsive" alt="home img">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->

		<!-- start feature -->
		<section id="feature">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
						<h2 class="text-uppercase text-center">Tentang Aplikasi</h2>
						<p>Manajemen Penilaian adalah aplikasi berbasis web yang berfungsi sebagai manajemen penilaian siswa</p>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<img src="images/software-img.png" class="img-responsive" alt="feature img">
					</div>
				</div>
			</div>
		</section>
		<!-- end feature -->



		<!-- start contact -->
		<section id="contact">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center wow fadeInUp" data-wow-delay="0.6s">
							<h2 class="text-uppercase">Contact Us</h2>
							<address>
								<p><i class="fa fa-map-marker"></i>Jalan Pekapuran, RT.02 RW.07, Curug Cimanggis Depok</p>
								<p><i class="fa fa-envelope"></i> taruna@smktarunabhakti.net</p>
								<p><i class="fa fa-phone"></i> (021) 8744810</p>
							</address>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end contact -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © 2020 dmare</p>
				</div>
			</div>
		</footer>
		<!-- end footer -->

		<script src="{{ asset('js/jquery.js')}}"></script>
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('js/wow.min.js')}}"></script>
		<script src="{{ asset('js/jquery.singlePageNav.min.js')}}"></script>
		<script src="{{ asset('js/custom.js')}}"></script>
	</body>
</html>
