@extends('frontend.master')
@section('gallery')
	
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h3>Photo Gallery</h3>
			<p class="dolor">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

			<div class="wthree_gallery_grids">
				<div id="jzBox" class="jzBox">
					<div id="jzBoxNextBig"></div>
					<div id="jzBoxPrevBig"></div>
					<img src="#" id="jzBoxTargetImg" alt=" " />
					<div id="jzBoxBottom">
						<div id="jzBoxTitle"></div>
						<span id="jzBoxMoreItems">
							<div id="jzBoxCounter"></div>
							<i class="arrow-left" id="jzBoxPrev"></i> 
							<i class="arrow-right" id="jzBoxNext"></i> 
						</span>
						<i class="close" id="jzBoxClose"></i>
					</div>
				</div>
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
						<li role="presentation"><a href="#furnitures" role="tab" id="furnitures-tab" data-toggle="tab" aria-controls="furnitures">Furnitures</a></li>
						<li role="presentation"><a href="#rooms" role="tab" id="rooms-tab" data-toggle="tab" aria-controls="rooms">Bed Rooms</a></li>
						<li role="presentation"><a href="#services" role="tab" id="services-tab" data-toggle="tab" aria-controls="services">Services</a></li>
						<li role="presentation"><a href="#buildings" role="tab" id="buildings-tab" data-toggle="tab" aria-controls="buildings">Buildings</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tab_img">
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/6.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/6.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/9.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/7.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/7.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/8.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab_img">
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/10.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/10.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/12.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/12.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/14.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/14.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/15.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/15.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab_img">
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/16.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/16.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/17.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/17.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/18.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/18.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/19.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/19.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="furnitures" aria-labelledby="furnitures-tab">
							<div class="tab_img">
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/8.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/8.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/9.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/10.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/10.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/15.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/15.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="rooms" aria-labelledby="rooms-tab">
							<div class="tab_img">
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/9.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/9.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/10.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/10.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/14.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/14.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="services" aria-labelledby="services-tab">
							<div class="tab_img">
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/15.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/15.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="buildings" aria-labelledby="buildings-tab">
							<div class="tab_img">
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/6.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/6.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/7.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/7.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/17.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/17.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-3 agile_gallery_grids">
									<a href="images/19.jpg" class="jzBoxLink" title="Domicile">
										<div class="view view-sixth">
											<img src="images/19.jpg" alt=" " class="img-responsive" />
											<div class="mask">
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
											</div>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script src="js/jzBox.js"></script>
		</div>
	</div>
<!-- //gallery -->

	
@endsection