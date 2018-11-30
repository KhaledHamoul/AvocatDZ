	<style>
	.dropdown-menu {
		margin-top:202px;
		text-align: center;
	}

	</style>
	<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="/">
									Avocat<span>DZ</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li><a href="/">Accueil</a></li>
										<li><a href="/professionnels">Avocats</a></li>
										<li><a href="#pack">Blog </a></li>
										<li><a href="#spo">FAQ</a></li>
										@auth
											<li class="nav-item dropdown"><a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->email }}</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="#">Dashboard</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Profile</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" onclick="document.getElementById('logout').submit()" href="#">Se deconnecter</a>
											</div>
											<form action="/logout" method="post" id="logout" style="display:none">
												@csrf
											</form>
										@else
										</li>
                                        <li><a href="/login"><i class="fa fa-user"></i></a></li>
                                        <li>
											<button onclick="location.href ='/Inscription'" class="book-btn">S'inscrire</button>
										</li><!--/.project-btn-->
										@endif 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->
