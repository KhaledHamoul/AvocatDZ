<!doctype html>
<html lang="en">

	<head>
		@include('Vitrine.layouts.head')
	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		@include('Vitrine.layouts.header')
		
		<!-- Slider start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Choisissez votre avocat 

									</h2>
									<div class="about-btn">
										<button  class="about-view" onclick="location.href ='/Inscription'">
											S'inscrire
										</button>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--Slider end -->

		@include('Vitrine.layouts.find_lawyer')

        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="{{ asset('Vitrine_assets/images/service/s1.png') }}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
									Rendez-vous en ligne
									</a>
								</h2>
								<p>Prenez un rendez-vous chez votre avocat en quelque cliques.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="{{ asset('Vitrine_assets/images/service/s2.png') }}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
										Service 24/7
									</a>
								</h2>
								<p>Trouver un avocat selon son domaine d'intervention de chez vous.</p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="statistics-img">
								<img src="{{ asset('Vitrine_assets/images/service/s3.png') }}" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">

								<h2>
									<a href="#">
										bla bla 
									</a>
								</h2>
								<p>bla bla bla blabblaalallal blablbalb blablbla    </p>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

		<!--blog start-->
		<section id="blog" class="blog">
			<div class="container">
				<div class="blog-details">
						<div class="gallary-header text-center">
							<h2>
								Blog
							</h2>
							<p>
								Découvrer nos derniers articles 
							</p>
						</div><!--/.gallery-header-->
						<div class="blog-content">
							<div class="row">

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>AvocatDZ <span>15 november 2017</span></h2>
										<div class="thumbnail-img">
											<img src="{{ asset('Vitrine_assets/images/blog/b1.jpg') }}" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
									  
										<div class="caption">
											<div class="blog-txt">
												<h3>
													<a href="#">
														Comment choisir son avocat
													</a>
												</h3>
												<p>
													Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
												</p>
												<a href="#">Lire la suite ...</a>
											</div><!--/.blog-txt-->
										</div><!--/.caption-->
									</div><!--/.thumbnail-->

								</div><!--/.col-->

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>AvocatDZ <span>15 november 2017</span></h2>
										<div class="thumbnail-img">
											<img src="{{ asset('Vitrine_assets/images/blog/b2.jpg') }}" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
										<div class="caption">
											<div class="blog-txt">
												<h3>
													<a href="#">
														C'est quoi le code pénal
													</a>
												</h3>
												<p>
													orem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
												</p>
												<a href="#">Lire la suite ...</a>
											</div><!--/.blog-txt-->
										</div><!--/.caption-->
									</div><!--/.thumbnail-->

								</div><!--/.col-->

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
										<h2>AvocatDZ <span>15 november 2017</span></h2>
										<div class="thumbnail-img">
											<img src="{{ asset('Vitrine_assets/images/blog/b3.jpg') }}" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
										<div class="caption">
											<div class="blog-txt">
												<h3><a href="#">Divorce en ALgérie</a></h3>
												<p>
													Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam 
												</p>
												<a href="#">Lire la suite ...</a>
											</div><!--/.blog-txt-->
										</div><!--/.caption-->
									</div><!--/.thumbnail-->

								</div><!--/.col-->

							</div><!--/.row-->
						</div><!--/.blog-content-->
					</div><!--/.blog-details-->
				</div><!--/.container-->

		</section><!--/.blog-->
		<!--blog end-->

		
		<!-- Nos Partenaires Start -->
		<section   class="testemonial">
			<div class="container">

				<div class="gallary-header text-center">
					<h2>
						Nos partenaires
					</h2>
				

				</div><!--/.gallery-header-->

				<div class="owl-carousel owl-theme" id="testemonial-carousel">

				

					<div class="home1-testm item">
						<img src="{{ asset('Vitrine_assets/images/client/testimonial1.jpg') }}" alt="img"/>
					</div><!--/.item-->
					<div class="home1-testm item">
						<img src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}" alt="img"/>
					</div><!--/.item-->
					<div class="home1-testm item">
						<img src="{{ asset('Vitrine_assets/images/client/testimonial1.jpg') }}" alt="img"/>
					</div><!--/.item-->
					<div class="home1-testm item">
						<img src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}" alt="img"/>
					</div><!--/.item-->
					<div class="home1-testm item">
						<img src="{{ asset('Vitrine_assets/images/client/testimonial1.jpg') }}" alt="img"/>
					</div><!--/.item-->

					

				</div><!--/.testemonial-carousel-->
			</div><!--/.container-->

		</section><!--/.testimonial-->	
		<!-- Nos Partenaires End -->

		
		<!--subscribe start-->
		<section id="subs" class="subscribe">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Restez connecter avec nous.	
					</h2>
					<p>
						Inscrivez-vous pour recevoir des notifications sur nos nouveautés.
					</p>
				</div>
				<form>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="custom-input-group">
								<input type="email" class="form-control" placeholder="Mettez votre email ici">
								<button class="appsLand-btn subscribe-btn">S'inscrire</button>
								<div class="clearfix"></div>
								<i class="fa fa-envelope"></i>
							</div>

						</div>
					</div>
				</form>
			</div>

		</section>
		<!--subscribe end-->

		@include('Vitrine.layouts.footer')


	</body>

</html>