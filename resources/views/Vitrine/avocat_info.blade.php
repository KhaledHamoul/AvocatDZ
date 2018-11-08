<!doctype html>
<html>
    <head>
    @include('Vitrine.layouts.head')
    <style>
        .header-area {
            position: fixed;
            background-color:rgba(77,78,84,1);
        }
        .single-travel-boxes {
          margin-top:100px;  
          background-color: #fefefe;
          margin-bottom: -60px;
        }
        .home-border {
            border: none;
        }
        .single-package-item img {
            width: 150px;
            height:150px;
            border-radius: 100%;
            margin-left: 31%;
            margin-top: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,.1);
        }
        .packages-para ul , li {
            font-size: 14px;
            color: #aaa;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 10px;
        }
        .packages-para li {
            margin-bottom: 3px;
            margin-left: 30px;
        }
    </style>
    </head>
    <body>
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
            your browser</a> to improve your experience and security.</p>
        <![endif]-->

        @include('Vitrine.layouts.header')

        <!--packages start-->
		<section class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						Information sur l'avocat
					</h2>
					
					
					
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="single-package-item">
									<img src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}" alt="package-place">
									<div class="single-package-item-txt">
										<h3>{{ $avocat->nom }} {{ $avocat->prenom }}</h3>
										<div class="packages-para row">
											<div class="col-md-6" >
												<p>
													<h3>Informations générales</h3>
												</p>
												<p>
													<i class="fa fa-angle-right"></i> &nbsp Avocat
												</p>
												<p>
													<i class="fa fa-map-marker"></i> &nbsp  {{ $avocat->addresse }}
												</p>
												<p>
													<i class="fa fa-map"></i> &nbsp {{ $avocat->ville }}
												</p>
												<p>
													<h3>Spécialités</h3> 
												</p>
												<ul>
													
													@foreach( $avocat->getDomaines()->get() as $doamine)
														<li>{{ $doamine->domaine }}</li>
													@endforeach
												</ul>
												<p>
													<h3>Présentation</h3> 
												</p>
												<p>
													<i class="fa fa-angle-right"></i> &nbsp {{ $avocat->description }}
												</p>
											</div>
											<div class="col-md-6" >
												<img style="width:100%;height:400px;margin:auto;border-radius:0;box-shadow:none" src="Vitrine_assets/images/client/testimonial2.jpg" alt="map">
											</div>
											<div class="col-md-6 pull-right">
												<p>
													<h3><i class="fa fa-clock-o"></i>&nbsp Horaires</h3>
												</p>
												<p>
													Samedi <span class="pull-right">/</span>
												</p>
												<p>
													Dimanche <span class="pull-right">de 9:00 à 18:00</span>
												</p>
												<p>
													Lundi <span class="pull-right">de 9:00 à 18:00</span>
												</p>
												<p>
													Mardi <span class="pull-right">de 9:00 à 18:00</span>
												</p>
												<p>
													Mercredi <span class="pull-right">de 9:00 à 18:00</span>
												</p>
												<p>
													Jeudi <span class="pull-right">de 9:00 à 18:00</span>
												</p>
												<p>
													Vendredi <span class="pull-right">/</span>
												</p>
											</div>
										</div><!--/.packages-para-->
										<div class="about-btn">
											@if($rdv_show)
											<button onclick="location.href='/avocat/{{ $avocat->id }}'" class="about-view packages-btn">
												Rendez-vous
											</button>
											@endif
										</div><!--/.about-btn-->
									</div><!--/.single-package-item-txt-->
								</div><!--/.single-package-item-->

							</div><!--/.col-->                       
					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

        @include('Vitrine.layouts.footer')
    </body>
</html>