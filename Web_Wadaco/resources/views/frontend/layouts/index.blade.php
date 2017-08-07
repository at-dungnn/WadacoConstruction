@extends('frontend.master')
@section('index')
<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">

            <!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First-Slide -->
                <div class="item active">
                    <img src="images/banner.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption">
                        <h3 data-animation="animated flipInX">Dream Land</h3>
                        <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                    </div>
                </div>

                <!-- Second-Slide -->
                <div class="item">
                    <img src="images/banner1.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX">Dream Home</h3>
                        <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                    </div>
                </div>

                <!-- Third-Slide -->
                <div class="item">
                    <img src="images/banner2.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated flipInX">Dream Land</h3>
                        <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                    </div>
                </div>

            </div>
			
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
			
        </div>
		<script src="js/custom.js"></script>
	</div>
<!-- //banner -->

<!-- about -->
	<div class="about">
		<div class="container">
			<h3>Phương châm hoạt động công ty</h3>
			<p class="dolor">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<div class="about-grids">
				<div class="col-md-6 about-grid about-one">
					<div class="about-grid-left">
						<h4>Magnam aliquam quaerateets</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="about-grid-right">
						<span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 about-grid about-one">
					<div class="about-grid-right aliquam">
						<span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<div class="about-grid-left non">
						<h4>Voluptate velit esse cillum</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="about-grids">
				<div class="col-md-6 about-grid">
					<div class="about-grid-left">
						<h4>Dolore eu fugiat nulla voluptate</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="about-grid-right">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 about-grid">
					<div class="about-grid-right aliquam">
						<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
					</div>
					<div class="about-grid-left non">
						<h4>Quis nostrum ullam corporis</h4>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->

<!-- about-bottom -->
	<div class="about-bottom">
			<div class="col-md-7 agileits_about_bottom_left">
				<h3>Giới thiệu công ty</h3>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
					sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
					Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
					adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
					dolore magnam aliquam quaerat voluptatem.</p>
				<div class="col-xs-4 agileits_about_bottom_left1">
					<div class="w3_updates_bottom_grid1">
						<p class="counter">324</p> 
						<h4>Agents</h4>
					</div>
				</div>
				<div class="col-xs-4 agileits_about_bottom_left1">
					<div class="w3_updates_bottom_grid1">
						<p class="counter">232</p> 
						<h4>Branches</h4>
					</div>
				</div>
				<div class="col-xs-4 agileits_about_bottom_left1">
					<div class="w3_updates_bottom_grid1">
						<p class="counter">301</p> 
						<h4>User Satisfaction</h4>
					</div>
				</div>
				<div class="clearfix"> </div>
				<!-- Starts-Number-Scroller-Animation-JavaScript -->
					<script src="js/waypoints.min.js"></script> 
					<script src="js/counterup.min.js"></script> 
					<script>
						jQuery(document).ready(function( $ ) {
							$('.counter').counterUp({
								delay: 20,
								time: 1000
							});
						});
					</script>
				<!-- //Starts-Number-Scroller-Animation-JavaScript -->
				<ul>
					<li>aliquam quaerat voluptatem</li>
					<li>quia dolor sit amet</li>
					<li>voluptatem sequi nesciunt</li>
					<li>tempora incidunt ut labore</li>
				</ul>
			</div>
			<div class="col-md-5 agileits_about_bottom_right">
				<img src="images/5.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="clearfix"> </div>
	</div>
<!-- //about-bottom -->
<!-- agile_testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Our Customers Says</h3>
			<p class="dolor">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<div class="agile_testimonials_grids">
				<ul id="flexiselDemo1">			
					<li>
						<div class="agile_testimonials_grid">
							<div class="agile_testimonials_grid1">
								<div class="rating">
									<span class="star">☆</span>
									<span class="star">☆</span>
									<span class="star">☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<p>Itaque earum rerum hic tenetur a sapiente delectus rerum hic tenetur.<span>Lina Richard</span></p>
							</div>
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="agile_testimonials_grid">
							<div class="agile_testimonials_grid1">
								<div class="rating">
									<span class="star">☆</span>
									<span class="star">☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<p>Itaque earum rerum hic tenetur a sapiente delectus rerum hic tenetur.<span>Andrew Crisp</span></p>
							</div>
							<img src="images/1.png" alt=" " class="img-responsive" />
						</div>
					</li>
					<li>
						<div class="agile_testimonials_grid">
							<div class="agile_testimonials_grid1">
								<div class="rating">
									<span class="star">☆</span>
									<span class="star">☆</span>
									<span class="star">☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<p>Itaque earum rerum hic tenetur a sapiente delectus rerum hic tenetur.<span>Joshi Fransis</span></p>
							</div>
							<img src="images/3.png" alt=" " class="img-responsive" />
						</div>
					</li>
				</ul>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:1
										},
										tablet: { 
											changePoint:768,
											visibleItems: 2
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
<!-- //agile_testimonials -->
@endsection