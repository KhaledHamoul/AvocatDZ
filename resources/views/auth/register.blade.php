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
        .register-input input , .register-input select  {
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -ms-appearance: none;
            appearance: none;
            outline: 0!important;
            box-shadow: none;
            border: 1px solid #d7d7d7;
            border-radius: 0px;
            margin-bottom: 20px;
            color: #aaa;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            text-transform: capitalize;
            height: 48px;
            box-shadow:none;
        }
        .register-input input:focus, .register-input select:focus {
            border: 1px solid #d7d7d7;
            box-shadow:none;
        }
    </style>
    </head>
    <body>
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
            your browser</a> to improve your experience and security.</p>
        <![endif]-->

        @include('Vitrine.layouts.header')
        
        <!--Choisir avocat start-->
<section  class="choisir-avocat" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-travel-boxes">
					<div id="desc-tabs" class="desc-tabs">

						<ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
								<a href="#avocat" aria-controls="avocat" role="tab" data-toggle="tab">
									<i class="fa fa-user"></i>
									Avocat
								</a>
							</li>
							<li role="presentation" >
								<a href="#client" aria-controls="client" role="tab" data-toggle="tab">
									<i class="fa fa-user"></i>
									Client
								</a>
                            </li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content" >

							<div role="tabpanel" class="tab-pane active fade in" id="avocat">
								<div class="tab-para">
                                    <form action="/register_avocat" method="post">
                                        @csrf
                                        <div class="row"> 
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Nom</h2>
                                                    <div class="register-input">
                                                        <input name="nom" type="text" class="form-control" placeholder="Nom" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Prénom</h2>
                                                    <div class="register-input">
                                                        <input name="prenom" type="text" class="form-control" placeholder="Prénom" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Addresse</h2>
                                                    <div class="register-input">
                                                        <input name="addresse" type="text" class="form-control" placeholder="Addresse" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Ville</h2>
                                                    <div class="register-input">
                                                        <select name="ville" class="form-control" required>
                                                        <option disabled selected>Spécifier votre ville</option><!-- /.option-->
															<option value="Alger">Alger</option><!-- /.option-->
															<option value="Oran">Oran </option><!-- /.option-->
															<option value="Annaba">Annaba</option><!-- /.option-->
                                                        </select><!-- /.select-->
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Email</h2>
                                                    <div class="register-input">
                                                        <input name="email" type="text" class="form-control" placeholder="Email" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Téléphone</h2>
                                                    <div class="register-input">
                                                        <input name="telephone" type="text" class="form-control" placeholder="Téléphone" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Description</h2>
                                                    <div class="register-input">
                                                        <input name="description" type="text" class="form-control" placeholder="Déscription" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Profile</h2>
                                                    <div class="register-input">
                                                        <select name="profile" class="form-control " required>
                                                            <option>--</option><!-- /.option-->
                                                            @foreach($profiles as $profile)  
                                                                <option value="{{$profile->id}}">{{$profile->profile}}</option><!-- /.option-->
                                                            @endforeach
                                                        </select><!-- /.select-->
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Passeword</h2>
                                                    <div class="register-input">
                                                        <input name="password" type="password" class="form-control" placeholder="Passeword" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Confirmer le passeword</h2>
                                                    <div class="register-input">
                                                        <input type="text" class="form-control" placeholder="Confirmer">
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>N° de référence</h2>
                                                    <div class="register-input">
                                                        <input name="nref" name="reference_number" type="number" class="form-control" placeholder="N° de référence">
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->

                                        <div class="row">
                                            <div class="clo-sm-7">
                                                <div class="about-btn travel-mrt-0 pull-right">
                                                    <button  class="about-view travel-btn">
                                                            Enregistrer</i>
                                                    </button><!--/.travel-btn-->
                                                </div><!--/.about-btn-->
                                            </div><!--/.col-->
                                        </div><!--/.row-->
                                    </form>
								</div><!--/.tab-para-->

                            </div><!--/.tabpannel-->

                            <!-- ****************** Client ************************-->
                            <div role="tabpanel" class="tab-pane fade in" id="client">
								<div class="tab-para">
                                    <form action="/register_client" method="post">
                                        @csrf
                                        <div class="row"> 
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Nom</h2>
                                                    <div class="register-input">
                                                        <input name="nom" type="text" class="form-control" placeholder="Nom" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Prénom</h2>
                                                    <div class="register-input">
                                                        <input name="prenom" type="text" class="form-control" placeholder="Prénom" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Addresse</h2>
                                                    <div class="register-input">
                                                        <input name="addresse" type="text" class="form-control" placeholder="Addresse" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Ville</h2>
                                                    <div class="register-input">
                                                        <select name="ville" class="form-control" required>
                                                        <option disabled selected>Spécifier votre ville</option><!-- /.option-->
															<option value="Alger">Alger</option><!-- /.option-->
															<option value="Oran">Oran </option><!-- /.option-->
															<option value="Annaba">Annaba</option><!-- /.option-->
                                                        </select><!-- /.select-->
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Email</h2>
                                                    <div class="register-input">
                                                        <input name="email" type="text" class="form-control" placeholder="Email" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Téléphone</h2>
                                                    <div class="register-input">
                                                        <input name="telephone" type="text" class="form-control" placeholder="Téléphone" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Passeword</h2>
                                                    <div class="register-input">
                                                        <input name="password" type="password" class="form-control" placeholder="Passeword" required>
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="single-tab-select-box">
                                                    <h2>Confirmer le passeword</h2>
                                                    <div class="register-input">
                                                        <input type="text" class="form-control" placeholder="Confirmer">
                                                    </div><!-- /.travel-select-icon -->
                                                </div><!--/.single-tab-select-box-->
                                            </div><!--/.col-->
                                        </div>
                                        <div class="row">
                                            <div class="clo-sm-7">
                                                <div class="about-btn travel-mrt-0 pull-right">
                                                    <button  class="about-view travel-btn">
                                                            Enregistrer</i>
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

        @include('Vitrine.layouts.footer')
    </body>
</html>

