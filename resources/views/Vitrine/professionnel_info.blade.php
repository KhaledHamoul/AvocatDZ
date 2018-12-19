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


		/* use display:inline-flex to prevent whitespace issues. alternatively, you can put all the children of .rating-group on a single line */
		#half-stars .rating-group {
		display: inline-flex;
		}
		#half-stars .rating__icon {
		pointer-events: none;
		}
		#half-stars .rating__input {
		position: absolute !important;
		left: -9999px !important;
		}
		#half-stars .rating__label {
		cursor: pointer;
		/* if you change the left/right padding, update the margin-right property of .rating__label--half as well. */
		padding: 0 0.1em;
		font-size: 2rem;
		}
		#half-stars .rating__label--half {
		padding-right: 0;
		margin-right: -0.6em;
		z-index: 2;
		}
		#half-stars .rating__icon--star {
		color: orange;
		}
		#half-stars .rating__icon--none {
		color: #eee;
		}
		#half-stars .rating__input--none:checked + .rating__label .rating__icon--none {
		color: red;
		}
		#half-stars .rating__input:checked ~ .rating__label .rating__icon--star {
		color: #ddd;
		}
		#half-stars .rating-group:hover .rating__label .rating__icon--star, #half-stars .rating-group:hover .rating__label--half .rating__icon--star {
		color: orange;
		}
		#half-stars .rating__input:hover ~ .rating__label .rating__icon--star, #half-stars .rating__input:hover ~ .rating__label--half .rating__icon--star {
		color: #ddd;
		}
		#half-stars .rating-group:hover .rating__input--none:not(:hover) + .rating__label .rating__icon--none {
		color: #eee;
		}
		#half-stars .rating__input--none:hover + .rating__label .rating__icon--none {
		color: red;
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
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input type="text" id="review_average" value="{{$review_average}}" style="display:none;">
								</div>
								<div class="form-group">
									<h3>Note</h4>
									<br>
									<h1 id="review_average_display" class="jumbotron text-center" style="color: #1fb7a6;"></h1>
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
							<div class="row">
							<div class="col-sm-12">
								@if((!$hidden)&&($has_review))
								<form action="{{route('review.update',['visite' => $curr_visite])}}" method="post">
									@csrf
									<div class="form-group">
										<input type="text" id="review_rate" value="{{$review->rate}}" style="display:none;">
									</div>
									<div class="form-group">
										<h2>Rating</h2>
										<div id="half-stars">
											<div class="rating-group">
												<input class="rating__input rating__input--none" checked name="rate" id="rate-0" value="0" type="radio">
												<label aria-label="0 stars" class="rating__label" for="rate-0">&nbsp;</label>
												<label aria-label="0.5 stars" class="rating__label rating__label--half" for="rate-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rate" id="rate-05" value="0.5" type="radio">
												<label aria-label="1 star" class="rating__label" for="rate-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-10" value="1" type="radio">
												<label aria-label="1.5 stars" class="rating__label rating__label--half" for="rate-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rate" id="rate-15" value="1.5" type="radio">
												<label aria-label="2 stars" class="rating__label" for="rate-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-20" value="2" type="radio">
												<label aria-label="2.5 stars" class="rating__label rating__label--half" for="rate-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rate" id="rate-25" value="2.5" type="radio" checked>
												<label aria-label="3 stars" class="rating__label" for="rate-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-30" value="3" type="radio">
												<label aria-label="3.5 stars" class="rating__label rating__label--half" for="rate-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rate" id="rate-35" value="3.5" type="radio">
												<label aria-label="4 stars" class="rating__label" for="rate-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-40" value="4" type="radio">
												<label aria-label="4.5 stars" class="rating__label rating__label--half" for="rate-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
												<input class="rating__input" name="rate" id="rate-45" value="4.5" type="radio">
												<label aria-label="5 stars" class="rating__label" for="rate-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-50" value="5" type="radio">
											</div>
										</div>
									</div>
									<div class="form-group">
										<h2>Avis</h2>
										<textarea id="avis" name="avis" cols="40" rows="5" class="form-control">{{$review->avis}}</textarea>													
									</div><!--/.single-tab-select-box-->
									<div class="form-group">
											<button type="submit" class="btn btn-large btn-info">Modifier</button>
									</div><!--/.single-tab-select-box-->
								</form>
								@elseif(!$hidden)
								<form action="{{route('review.store',['visite' => $curr_visite])}}" method="post">
										@csrf
										<div class="form-group">
											<h2>Rating</h2>
											<div id="half-stars">
												<div class="rating-group">
													<input class="rating__input rating__input--none" checked name="rate" id="rate-0" value="0" type="radio">
													<label aria-label="0 stars" class="rating__label" for="rate-0">&nbsp;</label>
													<label aria-label="0.5 stars" class="rating__label rating__label--half" for="rate-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
													<input class="rating__input" name="rate" id="rate-05" value="0.5" type="radio">
													<label aria-label="1 star" class="rating__label" for="rate-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
													<input class="rating__input" name="rate" id="rate-10" value="1" type="radio">
													<label aria-label="1.5 stars" class="rating__label rating__label--half" for="rate-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
													<input class="rating__input" name="rate" id="rate-15" value="1.5" type="radio">
													<label aria-label="2 stars" class="rating__label" for="rate-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
													<input class="rating__input" name="rate" id="rate-20" value="2" type="radio">
													<label aria-label="2.5 stars" class="rating__label rating__label--half" for="rate-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
													<input class="rating__input" name="rate" id="rate-25" value="2.5" type="radio" checked>
													<label aria-label="3 stars" class="rating__label" for="rate-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
													<input class="rating__input" name="rate" id="rate-30" value="3" type="radio">
													<label aria-label="3.5 stars" class="rating__label rating__label--half" for="rate-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
													<input class="rating__input" name="rate" id="rate-35" value="3.5" type="radio">
													<label aria-label="4 stars" class="rating__label" for="rate-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
													<input class="rating__input" name="rate" id="rate-40" value="4" type="radio">
													<label aria-label="4.5 stars" class="rating__label rating__label--half" for="rate-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
													<input class="rating__input" name="rate" id="rate-45" value="4.5" type="radio">
													<label aria-label="5 stars" class="rating__label" for="rate-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
													<input class="rating__input" name="rate" id="rate-50" value="5" type="radio">
												</div>
											</div>
										</div>
										<div class="form-group">
											<h2>Avis</h2>
											<textarea id="avis" name="avis" cols="40" rows="5" class="form-control"></textarea>													
										</div><!--/.single-tab-select-box-->
										<div class="form-group">
											<button type="submit" class="btn btn-large btn-success">Ajouter</button>
										</div><!--/.single-tab-select-box-->
								</form>
								@endif
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
		<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
		<script src="{{asset('js/countup.js')}}"></script>
		@include('Vitrine.layouts.footer')
		<script>
			/* Setting up Map */
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


			/* count up */
			var options = {
			  useEasing: true,
			  useGrouping: true,
			  separator: ',',
			  decimal: '.',
			};
			var review_average = document.getElementById('review_average').value;
			var mark = new CountUp('review_average_display', 0,review_average, 2, 2, options);
			if (!mark.error) {
			mark.start();
			} else {
			  console.error(mark.error);
			}

			/* Setting up stars */
			var review_rate = document.getElementById('review_rate').value;
			console.log(review_rate);
			if(review_rate != '' || review_rate != null){
				switch(review_rate){
					case '0.5':
					$('#rate-05').prop('checked',true);
					break;
					case '1':
					$('#rate-10').prop('checked',true);
					break;
					case '1.5':
					$('#rate-15').prop('checked',true);
					break;
					case '2':
					$('#rate-20').prop('checked',true);
					break;
					case '2.5':
					$('#rate-25').prop('checked',true);
					break;
					case '3':
					$('#rate-30').prop('checked',true);
					break;
					case '3.5':
					$('#rate-35').prop('checked',true);
					break;
					case '4':
					$('#rate-40').prop('checked',true);
					break;
					case '4.5':
					$('#rate-45').prop('checked',true);
					break;
					case '5':
					$('#rate-50').prop('checked',true);
					break;
					default:
					break;
				}
			}
		</script>
    </body>
</html>