<!-- HEADER -->
<header id="main_header">
  <div id="header-top">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-5 col-xs-12">
                  <div class="top-contact">
                      <p>Appellez nous : <span>+0123 456 78910</span> email: <span>info@knoune.com</span>
                      </p>
                  </div>
              </div>
              <div class="col-md-6 col-sm-7 col-xs-12 top_right_links">
				<ul class="top_links">
                      @auth
                        @if( session('dashboard_path') == '/')
                            <li><i class="fa fa-user-o" aria-hidden="true"></i> {{Auth::user()->name }}</a> </li>
                            <li><a href="#" onclick="document.getElementById('logout').submit()" ><i class="fa fa-power-off" aria-hidden="true"></i></a> </li>
                        @else
                            <li><a href="{{ session('dashboard_path') }}" ><i class="fa fa-user-o" aria-hidden="true"></i> Mon compte</a> </li>
                            <li><a href="#" onclick="document.getElementById('logout').submit()" ><i class="fa fa-power-off" aria-hidden="true"></i></a> </li>
                        @endif
                    @else
                      <li><a href="/login"><i class="fa fa-lock" aria-hidden="true"></i> Se connecter</a> </li>
	  				@endif 
				</ul>
				<div class="add-listing"> <a href="/espace_pro"><i class="fa fa-plus" aria-hidden="true"></i>Espace Pro</a> </div>
              </div>
          </div>
      </div>
  </div>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <!-- Start Header Navigation -->
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i>
                      </button>
                      <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt="">
                      </a>
                  </div>
                  <!-- End Header Navigation -->
                  <div class="collapse navbar-collapse" id="navbar-menu">
                      <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                          <li class="dropdown active"> <a href="/" >Accueil</a></li>
                          <li class="dropdown active"> <a href="/professionnels" >Professionnels</a></li>
                          <li class="dropdown active"> <a href="/blog" >Blog</a></li>
                          <li class="dropdown active"> <a href="/faq" >FAQ</a></li>
                          <li class="dropdown active"> <a href="/nous" >Qui somme nous</a></li>
                          <li class="dropdown active"> <a href="/contact" >Contacts</a></li>
                      </ul>
                  </div>
              </div>
          </div>
	  </div>
  </nav>
</header>
<!-- HEADER  -->

<form action="/logout" method="post" id="logout" style="display:none">
	@csrf
</form>

				