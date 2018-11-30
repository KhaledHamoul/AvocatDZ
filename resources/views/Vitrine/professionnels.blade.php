<!doctype html>
<html>
    <head>
    @include('Vitrine.layouts.head')
    <style>
        
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

        @include('Vitrine.layouts.find_lawyer')

        <!--packages start-->
		<section class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						Avocats
					</h2>
					
					@if ( $professionnels->count() == 0 )
						<p>Aucune avocat est trouvé pour cette requete. </p> 
					@endif
					
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">
						@foreach( $professionnels as $pro)
							<div class="col-md-4 col-sm-6">
								<div class="single-package-item">
									<img src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}" alt="package-place">
									<div class="single-package-item-txt">
										<h3>{{ $pro->nom }}</h3>
										<div class="packages-para">
											<p>
												<i class="fa fa-angle-right"></i> &nbsp Avocat
											</p>
											<p>
												<i class="fa fa-map-marker"></i> &nbsp  {{ $pro->addresse }}
											</p>
											<p>
												<i class="fa fa-map"></i> &nbsp {{ $pro->ville }}
											</p>
										</div><!--/.packages-para-->
										<div class="packages-para">
											<p>
												<i class="fa fa-angle-right"></i> &nbsp Spécialités
											</p>
											<ul>
												
												@foreach( $pro->getCompetences()->get() as $competence)
													<li>{{ $competence->competence }}</li>
												@endforeach
											</ul>
										</div><!--/.packages-para-->
										<div class="about-btn">
											<button onclick="location.href='/professionnels/{{ $pro->id }}'" class="about-view packages-btn">
												En savoir plus
											</button>
										</div><!--/.about-btn-->
									</div><!--/.single-package-item-txt-->
								</div><!--/.single-package-item-->

							</div><!--/.col-->
						@endforeach
                        
					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

        @include('Vitrine.layouts.footer')
    </body>
</html>