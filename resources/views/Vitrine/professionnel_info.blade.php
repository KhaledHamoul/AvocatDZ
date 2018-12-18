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


		/* 5 stars rating */ 
		#full-stars {

			/* use display:inline-flex to prevent whitespace issues. alternatively, you can put all the children of .rating-group on a single line */
			.rating-group {
			display: inline-flex !important;
			}

			/* make hover effect work properly in IE */
			.rating__icon {
			pointer-events: none !important;
			}

			/* hide radio inputs */
			.rating__input {
			position: absolute !important;
			left: -9999px !important;
			}

			/* hide 'none' input from screenreaders */
			.rating__input--none {
			display: none !important
			}

			/* set icon padding and size */
			.rating__label {
			cursor: pointer !important;
			padding: 0 0.1em !important;
			font-size: 2rem !important;
			}

			/* set default star color */
			.rating__icon--star {
			color: orange !important;
			}

			/* if any input is checked, make its following siblings grey */
			.rating__input:checked ~ .rating__label .rating__icon--star {
			color: #ddd !important;
			}

			/* make all stars orange on rating group hover */
			.rating-group:hover .rating__label .rating__icon--star {
			color: orange !important;
			}

			/* make hovered input's following siblings grey on hover */
			.rating__input:hover ~ .rating__label .rating__icon--star {
			color: #ddd !important;
			}
		}
		.profile-login-bg .form-group > button:hover{
			background-color: #00463e;
		}
	</style>
    <link rel="stylesheet" href="{{asset('css/leaflet.css')}}"/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="{{asset('js/leaflet.js')}}"></script>
    </head>
    <body>
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
            your browser</a> to improve your experience and security.</p>
        <![endif]-->

		@include('Vitrine.layouts.header')
		
		<!-- Inner Banner -->
		<section id="inner-banner-2">
			<div class="container">
				<div class="row">

					<div class="col-md-12 text-center">
						<div class="inner_banner_2_detail">
							<h2>Profile</h2>
							<p><a href="/">Accueil</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Profile</p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Inner Banner -->

		<!-- Profile -->
		<section id="profile" class="p_b70 p_t70 bg_lightgry">

			<div class="container">
				<div class="row">

					<div class="col-md-3 col-sm-3 col-xs-12">

						<div class="profile-leftbar">
							<div id="profile-picture" class="profile-picture">
								<img src="{{ asset('vetrine_assets/images/profile.jpg') }}" alt="">
							</div>
						</div>

						<div class="profile-list">
							<div class="col-12">
								
								<h3><i class="fa fa-clock-o"></i>&nbsp Horaires</h3>
								<br>
								@if(isset($horaires))
								<ul>
									<li>
										Samedi <span class="pull-right">de {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->samedi_d)->format('h:i') }} à {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->samedi_f)->format('h:i') }}</span>
									</li>
									<li>
										Dimanche <span class="pull-right">de {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->dimanche_d)->format('h:i') }} à {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->dimanche_f)->format('h:i') }}</span>
									</li>
									<li>
										Lundi <span class="pull-right">de {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->lundi_d)->format('h:i') }} à {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->lundi_f)->format('h:i') }}</span>
									</li>
									<li>
										Mardi <span class="pull-right">de {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->mardi_d)->format('h:i') }} à {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->mardi_f)->format('h:i') }}</span>
									</li>
									<li>
										Mercredi <span class="pull-right">de {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->mercredi_d)->format('h:i') }} à {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->mercredi_f)->format('h:i') }}</span>
									</li>
									<li>
										Jeudi <span class="pull-right">de {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->jeudi_d)->format('h:i') }} à {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->jeudi_f)->format('h:i') }}</span>
									</li>
									<li>
										Vendredi <span class="pull-right">de {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->vendredi_d)->format('h:i') }} à {{ \Carbon\Carbon::createFromFormat('H:i:s',$horaires->vendredi_f)->format('h:i') }}</span>
									</li>
								</ul>
								@else
									<p>Les horaires ne sont pas spécifiées par le professionnel </p>
								@endif
						
							</div>
						</div>

					</div>

					<div class="col-md-9 col-sm-9 col-xs-12">

						<div class="profile-login-bg">
							<h2><span><i class="fa fa-user"></i></span> Informations <span>personnelles</span></h2>

							<div class="row p_b30">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name">Nom</label>
										<h3>{{ $professionnel->nom }} </h3>
									</div>
									<!--/.form-group-->
								</div>
								<!--/.col-md-3-->
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="phone">Prénom</label>
										<h3>{{ $professionnel->prenom }}</h3>
									</div>
									<!--/.form-group-->
								</div>
								<!--/.col-md-3-->
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="email">Email</label>
										@if(isset($professionnel->user))
											<h3>{{ $professionnel->user->email }}</h3>
										@else
										
										@endif
									</div>
									<!--/.form-group-->
								</div>
								<!--/.col-md-3-->
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="mobile">N° téléphone</label>
										<h3>{{ $professionnel->telephone }}</h3>
									</div>
									<!--/.form-group-->
								</div>
								<!--/.col-md-3-->
							</div>
							<h2><span><i class="fa fa-map-marker"></i></span> A propos du <span>Professionnel</span></h2>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<h3>Profile</h4>
									<br>
									<p>{{ $professionnel->profile->profile }}</p>
									<!--/.form-group-->
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<h3>Compétences</h4>
									<br>
									<ul>
									@foreach($professionnel->getCompetences as $competences)
										<li>{{ $competences->competence }}</li>
									@endforeach
									</ul>
									<!--/.form-group-->
								</div>
							</div>
							<br>
							<div class="form-group">
								<h3>Description</h4>
								<br>
								<p>{{ $professionnel->description }}</p>
								<!--/.form-group-->
							</div>
							<br>

							<h2><span><i class="fa fa-map-marker"></i></span> Adresse</h2>

							<div class="form-group">
								<label for="state">Addresse bureau</label>
								<h3>{{ $professionnel->addresse }}</h3>
							</div>
							<!--/.form-group-->
							<div class="form-group">
								<label for="city">Ville</label>
								<h3>{{ $professionnel->ville }}</h3>
							</div>
							<div class="form-group">
									<input type="text" id="lat" value="{{$professionnel->lat}}" style="display:none;">
									<input type="text" id="lng" value="{{$professionnel->lng}}" style="display:none;">
								</div>
							<br>
							<div style="height: 400px">
								<div id="mapid" style="height:400px"></div>
							</div>
							<br>
							@if($rdv_show)
							<h2><span><i class="fa fa-map-marker"></i></span> Rendez-vous</h2>
							<div class="form-group">
								<div class="col-12" >
									<form action="/rendezvous" method="post">
										@csrf
										<div class="row"> 
											<div class="col-sm-12">
												<div class="form-group">
													<h2>Message</h2>
													<div class="register-input">
														<input style="height:100px" name="Message" type="text" class="form-control" placeholder="Message" >
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
											<div class="col-sm-12">
												<div class="form-group">
													<h2>Joindre un fichier</h2>
													<div class="register-input">
														<input  name="fichier" type="file" class="form-control"  >
													</div><!-- /.travel-select-icon -->
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
											<input type="hidden" name="pro_id" value="{{ $professionnel->id }}" /> 
											<div class="col-sm-12">
												<div class="form-group">
													<button type="submit" class="btn btn-large btn-default">valider</button>
												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
										</div>      
									</form>
								</div>
							</div>
							@else 
								<div class="row">
									<div class="col-sm-8">
										<div class="form-group">
											<button disabled class="btn btn-large btn-default">Connecter-vous pour pouvoir prendre des rendez-vous</button>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<button onclick="location.href = '/login'" class="btn btn-large btn-default">Se connecter</button>
										</div>
									</div>
								</div>
							@endif
							<h2><span><i class="fa fa-map-marker"></i></span> Avis</h2>
							@if((!$hidden)&&($has_review))
								<div class="form-group">
									<h3>{{ $review->client->nom }}</h4>
									<br>
									<input value="{{ $review->avis }}" name="review" />
									<!--/.form-group-->
								</div>
							@endif
							@foreach($reviews as $rev)
								<div class="form-group">
									<h4>{{ $rev->client->nom }}</h4>
									<p>{{ $rev->avis }}</p>
									<!--/.form-group-->
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- Popular Listing -->	

		@include('Vitrine.layouts.footer')
		<script>
			var init_lat = document.getElementById('lat').value;
			var init_len = document.getElementById('lng').value;
			var mymap = L.map('mapid').setView([init_lat, init_len], 13);
			L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
				attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				maxZoom: 18,
				id: 'mapbox.streets',
				accessToken: 'pk.eyJ1Ijoic2xhbGFoZWRkaW5lYmsiLCJhIjoiY2pwY3psc2kwMHEzNjNrcDhxaWN0NTBvaCJ9.mYLY2jJbLGhMhuX7OBEdNw'
			}).addTo(mymap);
			// Change the default cursor
			document.getElementById('mapid').style.cursor = 'pointer';
			var marker = L.marker([init_lat, init_len],{
				draggable : false
			}).addTo(mymap);
		</script>
    </body>
</html>