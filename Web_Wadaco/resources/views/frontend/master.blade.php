<!DOCTYPE html>
<html>
<head>
<title>Wadaco Construction| Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Domicile Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Css -->

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/ken-burns.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/price-range.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" media="all" />


<!-- js -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>


<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>



<body>
	<div class="header-bottom">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="/"><span>D</span>omicile</a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1" id="cl-effect-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Trang Chủ</a></li>
							<li><a href="/service" class="hvr-bounce-to-bottom">Dịch Vụ</a></li>
							<li><a href="/gallery" class="hvr-bounce-to-bottom">Hình Ảnh</a></li>
							<li><a href="/news" class="hvr-bounce-to-bottom">Tin Tức</a></li>
							<li><a href="/contact" class="hvr-bounce-to-bottom">Liên Hệ</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			<div class="w3ls_search">
				<div class="cd-main-header">
					<ul class="cd-header-buttons">
						<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
					</ul> <!-- cd-header-buttons -->
				</div>
				<div id="cd-search" class="cd-search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="Search...">
					</form>
				</div>
			</div>
			<!-- search-jQuery -->
				<script src="js/main.js"></script>
			<!-- //search-jQuery -->
		</div>
	</div>
	<!-- //header -->

	 @yield('index')
	 @yield('service')
	 @yield('gallery')
	 @yield('news')






	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3agile_footer_grids">
				<div class="col-md-4 agileinfo_footer_grid">
					<div class="footer-logo">
						<h2><a href="index.html"><i>D</i>omicile <span>We are professional in our service</span></a></h2>
					</div>
				</div>
				<div class="col-md-3 agileinfo_footer_grid">
					<h4>Call Us <span>+1234 567 891</span></h4>
					<p>My Company, 875 Jewel Road <span>8907 Ukraine.</span></p>
					<ul class="social-icons">
						<li><a href="#" class="icon icon-border facebook"></a></li>
						<li><a href="#" class="icon icon-border twitter"></a></li>
						<li><a href="#" class="icon icon-border instagram"></a></li>
						<li><a href="#" class="icon icon-border pinterest"></a></li>
					</ul>
				</div>
				<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
					<ul>
						<li><a href="/">Trang Chủ</a></li>
						<li><a href="/services">Dịch Vụ</a></li>
						<li><a href="/gallery">Hình Ảnh</a></li>
						<li><a href="/news">Tin Tức</a></li>
						<li><a href="/contact">Liên Hệ</a></li>
					</ul>
				</div>
				<div class="col-md-3 agileinfo_footer_grid">
					<div class="agileinfo_footer_grid_left">
						<a href="single.html"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="single.html"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="single.html"><img src="images/8.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="agileinfo_footer_grid_left">
						<a href="single.html"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>© 2016 Domicile. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
		</div>
	</div>
<!-- //footer -->



<!-- for bootstrap working -->
	<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->


<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

</body>
</html>