<!--Choisir avocat start-->
<section  class="choisir-avocat" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-travel-boxes">
					<div id="desc-tabs" class="desc-tabs">

						<ul class="nav nav-tabs" role="tablist">

							<li role="presentation" class="active">
								<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									<i class="fa fa-tree"></i>
									Choisissez votre avocat
								</a>
							</li>

						</ul>

						<!-- Tab panes -->
						<div class="tab-content">

							<div role="tabpanel" class="tab-pane active fade in" id="tours">
								<div class="tab-para">
									<form method="post" action="/Avocats">
										@csrf
										<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>Profile</h2>

													<div class="travel-select-icon">
														<select name="domaine" class="form-control ">
															<option disabled selected>Profile</option><!-- /.option-->
															
																<option value="">Avocat</option>
																<option value="">Comptable</option>
																<option value="">Huissier</option>
																<option value="">Notaire</option>
																<option value="">Traducteur</option>
															
														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->

												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>Compétence en</h2>

													<div class="travel-select-icon">
														<select name="domaine" class="form-control ">
															<option disabled selected>Compétence en ...	</option><!-- /.option-->
															@foreach( $domaines as $domaine)
																<option value="{{ $domaine->id }}">{{ $domaine->domaine }}</option>
															@endforeach
														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->

												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="single-tab-select-box">

													<h2>Ville</h2>

													<div class="travel-select-icon">
														<select name="ville" class="form-control ">
															<option disabled selected>Spécifier votre ville</option><!-- /.option-->
															<option value="Alger">Alger</option><!-- /.option-->
															<option value="Oran">Oran </option><!-- /.option-->
															<option value="Annaba">Annaba</option><!-- /.option-->
														</select><!-- /.select-->
													</div><!-- /.travel-select-icon -->

												</div><!--/.single-tab-select-box-->
											</div><!--/.col-->
										</div><!--/.row-->

										<div class="row">
											<div class="clo-sm-7">
												<div class="about-btn travel-mrt-0 pull-right">
													<button  class="about-view travel-btn">
															Chercher &nbsp &nbsp <i class="fa fa-search"></i>
													</button><!--/.travel-btn-->
												</div><!--/.about-btn-->
											</div><!--/.col-->

										</div><!--/.row-->
									</form>
								</div><!--/.tab-para-->

							</div><!--/.tabpannel-->


						</div><!--/.tab content-->
					</div><!--/.desc-tabs-->
				</div><!--/.single-travel-box-->
			</div><!--/.col-->
		</div><!--/.row-->
	</div><!--/.container-->
</section><!--/.travel-box-->
<!--Choisir avocat end-->