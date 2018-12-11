<!doctype html>
<html>
    <head>
    @include('Vitrine.layouts.head')
    <style>
		.advance-search{
			background: rgba(255,255,255,0.9);
			clear: both;
			height: 50px; 
			padding: 0;
			margin-top: 0; 
		}
		.zelect {
			outline: none;
		}
    </style>
    </head>
    <body>
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
            your browser</a> to improve your experience and security.</p>
        <![endif]-->

        @include('Vitrine.layouts.pro_header')

        <!-- Popular Listing -->
		<section id="popular-listing" class="p_b70 p_t70">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading">
					<h2>Liste <span> Professionnels</span></h2>
					@if ( $professionnels->count() == 0 )
					<br>
						<p>Aucune avocat n'est trouvé pour cette requete. </p> 
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12">
					@if ( $professionnels->count() != 0 )
					<div class="sort-by">
						<div class="sort-category"> 
							<ul class="nav nav-tabs sort-listing" role="tablist">
								<li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a>
								</li>
								<li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th-large" aria-hidden="true"></i></a>
								</li>
								<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
					@endif

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="profile">
							<div class="row">
								@foreach( $professionnels as $pro)
									<div class="col-md-4 col-sm-6 col-xs-12"  onclick="location.href='/professionnels/{{ $pro->id }}'" style="cursor: pointer;">
										<div class="popular-listing-box">
											<div class="popular-listing-img">
												<figure class="effect-ming"> <img src="{{ asset('vetrine_assets/images/popular-1.jpg') }}" alt="image">
												</figure>
											</div>
											<div class="popular-listing-detail">
												<h3><a href="/professionnels/{{ $pro->id }}">{{ $pro->nom }}</a></h3>
												
												<p>
													<i class="fa fa-angle-right"></i> &nbsp Spécialités
												</p>
												<ul>
													<?php $i = 0 ; ?>
													@foreach( $pro->getCompetences()->get() as $competence)
														@if($i < 5 )
															<li>{{ $competence->competence }}</li>
															<?php $i++ ; ?>
														@elseif($i == 5)
															<li>...</li>
														@endif
													@endforeach
												</ul>
												
												<br>
											</div>
											<div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $pro->ville }} </span> <span><img src="{{ asset('vetrine_assets/images/stars.png') }}" alt="image"></span> </div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="home">
							<div class="row">
								@foreach( $professionnels as $pro)
									<div class="col-md-6 col-sm-6 col-xs-12" onclick="location.href='/professionnels/{{ $pro->id }}'" style="cursor: pointer;">
										<div class="popular-listing-box">
											<div class="popular-listing-img">
												<figure class="effect-ming"> <img src="{{ asset('vetrine_assets/images/popular-1.jpg') }}" alt="image">
												</figure>
											</div>
											<div class="popular-listing-detail">
												<h3><a href="/professionnels/{{ $pro->id }}">{{ $pro->nom }}</a></h3>
												<p>
													<i class="fa fa-angle-right"></i> &nbsp Spécialités
												</p>
												<ul>
													<?php $i = 0 ; ?>
													@foreach( $pro->getCompetences()->get() as $competence)
														@if($i < 5 )
															<li>{{ $competence->competence }}</li>
															<?php $i++ ; ?>
														@elseif($i == 5)
															<li>...</li>
														@endif
													@endforeach
												</ul>
												<br>
											</div>
											<div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $pro->ville }}</span> <span><img src="images/stars.png" alt="image"></span> </div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="messages">
							<div class="row">
								@foreach( $professionnels as $pro)
									<div class="col-md-12"  onclick="location.href='/professionnels/{{ $pro->id }}'" style="cursor: pointer;">
										<div class="popular-listing-box">
											<div class="row">
												<div class="col-md-5 col-sm-5 col-xs-12">
													<div class="popular-listing-img">
														<figure class="effect-ming"> <img src="{{ asset('vetrine_assets/images/popular-1.jpg') }}" alt="image">
														</figure>
													</div>
												</div>
												<div class="col-md-7 col-sm-7 col-xs-12">
													<div class="popular-listing-detail">
														<h3><a href="/professionnels/{{ $pro->id }}">{{ $pro->nom }}</a></h3>
														<p>
															<i class="fa fa-angle-right"></i> &nbsp Spécialités
														</p>
														<ul>
															<?php $i = 0 ; ?>
															@foreach( $pro->getCompetences()->get() as $competence)
																@if($i < 5 )
																	<li>{{ $competence->competence }}</li>
																	<?php $i++ ; ?>
																@elseif($i == 5)
																	<li>...</li>
																@endif
															@endforeach
														</ul>
														<br>
													</div>
													<div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $pro->ville }}</span> <span><img src="images/stars.png" alt="image"></span> </div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- Popular Listing -->

		@include('Vitrine.layouts.footer')
		@include('Vitrine.layouts.js')
    </body>
</html>