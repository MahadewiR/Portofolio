<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('porto/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('porto/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('porto/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('porto/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('porto/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('porto/vendors/nice-select/css/nice-select.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('porto/css/style.css')}}">

    <style>
        nav {
            background-color: rgb(104, 94, 94) !important;
            height: 50px;
        }
    </style>
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg ">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{route('portofolio')}}"><strong style="color: white">MAHADEWI</strong></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li  class="nav-item {{ Route::currentRouteName() == 'portofolio' ? 'active' : '' }}"><a class="nav-link" href="{{route('portofolio')}}">Home</a></li>
							<li  class="nav-item {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a class="nav-link" href="{{route('about')}}">About</a></li>
							<li  class="nav-item {{ Route::currentRouteName() == 'experiences' ? 'active' : '' }}"><a class="nav-link" href="{{route('experiences')}}">Experiences</a></li>
							<li  class="nav-item {{ Route::currentRouteName() == 'portos' ? 'active' : '' }}"><a class="nav-link" href="{{route('portos')}}">Portfolio</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start Home Banner Area =================-->
    @yield('content')
	<!--================ End Home Banner Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="{{$profile->instagram}}"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
					
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('porto/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('porto/js/popper.js')}}"></script>
	<script src="{{asset('porto/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('porto/js/stellar.js')}}"></script>
	<script src="{{asset('porto/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('porto/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('porto/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('porto/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('porto/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('porto/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('porto/js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('porto/js/gmaps.min.js')}}"></script>
	<script src="{{asset('porto/js/theme.js')}}"></script>
</body>

</html>