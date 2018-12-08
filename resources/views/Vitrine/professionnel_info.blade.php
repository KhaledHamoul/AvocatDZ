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
										<h3>{{ $professionnel->nom }} {{ $professionnel->prenom }}</h3>
										<div class="packages-para row">
											<div class="col-md-6" >
												<p>
													<h3>Informations générales</h3>
												</p>
												<p>
													<i class="fa fa-angle-right"></i> &nbsp Avocat
												</p>
												<p>
													<i class="fa fa-map-marker"></i> &nbsp  {{ $professionnel->addresse }}
												</p>
												<p>
													<i class="fa fa-map"></i> &nbsp {{ $professionnel->ville }}
												</p>
												<p>
													<h3>Spécialités</h3> 
												</p>
												<ul>
													
													@foreach( $professionnel->getCompetences()->get() as $competence)
														<li>{{ $competence->competence }}</li>
													@endforeach
												</ul>
												<p>
													<h3>Présentation</h3> 
												</p>
												<p>
													<i class="fa fa-angle-right"></i> &nbsp {{ $professionnel->description }}
												</p>
											</div>
											<div class="col-md-6" >
												<img style="width:100%;height:400px;margin:auto;border-radius:0;box-shadow:none" src="Vitrine_assets/images/client/testimonial2.jpg" alt="map">
											</div>
											<div class="col-md-6 col-sm-12 pull-right">
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
												<!-- toggle button -->
												<button class="about-view packages-btn" data-toggle="modal" data-target="#rdv_modal">Rendez-vous</button>				
												<!-- End toggle button -->
												<!-- Info Client Model-->
												<div class="modal fade" id="rdv_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog" style="z-index:200;" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<div class="row">
																	<div class="col-sm-6">
																		<h4>Prendre un rendez-vous</h4>
																	</div>
																	<div class="col-sm-6">
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																</div>
															</div>
															<form action="/rendezvous" method="post">
																@csrf
																<div class="modal-body">
																	<div class="container-fluid" >
																		<div class="content col-sm-8" style="margin:0 16.6% 0 16.6% ">
																			<div class="row"> 
																				<div class="col-sm-12">
																					<div class="single-tab-select-box">
																						<h2>Message</h2>
																						<div class="register-input">
																							<input style="height:100px" name="Message" type="text" class="form-control" placeholder="Message" >
																						</div><!-- /.travel-select-icon -->
																					</div><!--/.single-tab-select-box-->
																				</div><!--/.col-->
																				<div class="col-sm-12">
																					<div class="single-tab-select-box">
																						<h2>Joindre un fichier</h2>
																						<div class="register-input">
																							<input  name="fichier" type="file" class="form-control"  >
																						</div><!-- /.travel-select-icon -->
																					</div><!--/.single-tab-select-box-->
																				</div><!--/.col-->
																				<input type="hidden" name="pro_id" value="{{ $professionnel->id }}" /> 
																				<div class="col-sm-12">
																					<div class="single-tab-select-box">
																						<div class="register-input">
																						<button type="submit" class="btn btn-default dropdown-toggle">valider</button>
																						</div><!-- /.travel-select-icon -->
																					</div><!--/.single-tab-select-box-->
																				</div><!--/.col-->
																			</div> 
																		</div>      
																	</div>
																</div>
															</form>
															<div class="modal-footer">
															</div>
														</div>
													</div>
												</div>	
												<!-- End Info Client Model-->
											@endif		
										</div><!--/.about-btn-->
									</div><!--/.single-package-item-txt-->
								</div><!--/.single-package-item-->

							</div><!--/.col-->    
					</div><!--/.row-->
				</div><!--/.packages-content-->
				@if($rdv_show)
					@if ($has_review)
					<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<form class="form-horizontal" action="{{route('review.update',['visite' => $curr_visite])}}" method="post">
									<fieldset>
									{{ csrf_field() }}
									<!-- Textarea -->
									<div class="form-group">
									<label class="col-md-4 control-label" for="contenu">Avis</label>
									@if($review != null)
									<div class="col-md-8">                     
										<textarea class="form-control" name="avis">{{$review->avis}}</textarea>
									</div>
									@else
									<div class="col-md-8">                     
											<textarea class="form-control" name="avis"></textarea>
									</div>
									@endif
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="contenu">Rate</label>
									<div class="col-md-8">                     
										<div id="full-stars">
											<div class="rating-group">
												<input disabled checked class="rating__input rating__input--none" name="rate" id="rate-none" value="0" type="radio">
												<label aria-label="1 star" class="rating__label" for="rate-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-1" value="1" type="radio">
												<label aria-label="2 stars" class="rating__label" for="rate-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-2" value="2" type="radio">
												<label aria-label="3 stars" class="rating__label" for="rate-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-3" value="3" type="radio">
												<label aria-label="4 stars" class="rating__label" for="rate-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-4" value="4" type="radio">
												<label aria-label="5 stars" class="rating__label" for="rate-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-5" value="5" type="radio">
											</div>
									</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 text-center" style="margin-top:100px;">
												<input type="submit" class="btn btn-info" value="Modifier" id="ajouter_article" name="submit"
												style="padding: 10px 2%; border-radius:4px;">
										</div>
									 </div>
									<fieldset>
								</form>
							</div>
						</div>
					@else
					<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<form class="form-horizontal" action="{{route('review.store',['visite' => $curr_visite])}}" method="post">
									<fieldset>
									{{ csrf_field() }}
									<!-- Textarea -->
									<div class="form-group">
									<label class="col-md-4 control-label" for="contenu">Avis</label>
									<div class="col-md-8">                     
										<textarea class="form-control" name="avis"></textarea>
									</div>
									</div>
									<div class="form-group">
									<label class="col-md-4 control-label" for="contenu">Rate</label>
									<div class="col-md-8">                     
										<div id="full-stars">
											<div class="rating-group">
												<input disabled checked class="rating__input rating__input--none" name="rate" id="rate-none" value="0" type="radio">
												<label aria-label="1 star" class="rating__label" for="rate-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-1" value="1" type="radio">
												<label aria-label="2 stars" class="rating__label" for="rate-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-2" value="2" type="radio">
												<label aria-label="3 stars" class="rating__label" for="rate-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-3" value="3" type="radio">
												<label aria-label="4 stars" class="rating__label" for="rate-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-4" value="4" type="radio">
												<label aria-label="5 stars" class="rating__label" for="rate-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
												<input class="rating__input" name="rate" id="rate-5" value="5" type="radio">
											</div>
									</div>
									</div>
									<div class="form-group">
										<div class="col-md-12 text-center" style="margin-top:100px;">
												<input type="submit" class="btn btn-danger" value="Ajouter" id="ajouter_article" name="submit"
												style="padding: 10px 2%; border-radius:4px;">
										</div>
									 </div>
									<fieldset>
								</form>
							</div>
						</div>
					@endif
				@endif
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

		

        @include('Vitrine.layouts.footer')
    </body>
</html>