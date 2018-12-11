<!doctype html>
<html lang="en">

	<head>
		@include('Vitrine.layouts.head')
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
                      <h2>Blog</h2>
                      <p><a href="/">Accueil</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Blog</p>
                  </div>
              </div>

          </div>
      </div>
  </section>
  <!-- Inner Banner -->

  <!-- Blog -->
  <section id="blog" class="p_b70 p_t70 bg_lightgry">
      <div class="container">

          <div class="row">
              <div class="col-md-9 col-sm-9 col-xs-12">
                @foreach ($articles as $article)
                  <div class="blog heading">

                      <h2>{{$article->title}}</h2>

                      <div class="blog-img">
                          <img src="{{asset('store/' . $article->img)}}" alt="image">
                      </div>

                      <div class="blog-detail">
                          <ul class="blog-admin">
                              <li><i class="fa fa-user"></i>Publié par :<a href="#"> {{$article->author->name}}</a>
                              </li>
                              <li><i class="fa fa-clock-o"></i><a href="#"> {{date('d-m-Y',strtotime($article->posted_at))}}</a>
                              </li>
                          </ul>
                          <p>{!! str_limit(html_entity_decode($article->content), 400) !!}</p>
                          <a href="{{route('blog-single',['slug' => $article->slug])}}" class="blog-btn">Lire l'article</a>
                      </div>

                  </div>
                @endforeach

              </div>

              <div class="col-md-3 col-sm-3 col-xs-12">

                  <div class="right-bar bg_white">
                      <h4>Liste des <span>catégories</span></h4>
                      <ul class="right-bar-listing">
                        @foreach($categories as $category)
                          <li><a href="#">{{ $category->name }}</a>
                          </li>
                        @endforeach
                      </ul>
                  </div>

                  <div class="right-bar bg_white">
                      <h4>Récemment <span>publiés</span></h4>
                      <div class="recent-listing-img">
                          <img src="{{ asset('vetrine_assets/images/recent-1.jpg') }}" alt="image">
                          <div class="recent-listing-links">
                              <a href="#" class="recent-jobs">Titre 1</a>
                              <a href="#" class="recent-readmore">Lire</a>
                          </div>
                      </div>
                      <div class="recent-listing-img">
                          <img src="{{ asset('vetrine_assets/images/recent-2.jpg') }}" alt="image">
                          <div class="recent-listing-links">
                              <a href="#" class="recent-jobs">Titre 2</a>
                              <a href="#" class="recent-readmore">Lire</a>
                          </div>
                      </div>                     
                  </div>

                  <div class="right-bar bg_white">
                      <h4>Les plus <span>actifs</span></h4>

                      <div class="places-list">
                          <h5><a href="#">Nom & Prénom</a></h5>
                          <h6 class="media-heading"><i class="fa fa-user" aria-hidden="true"></i>&nbsp Profile</h6>
                          <div class="media">
                              
                                  <a href="#">
                                      <img class="media-object" src="{{ asset('vetrine_assets/images/footer-latest-1.jpg') }}" alt="image">
                                  </a>
                              
                          </div>
                      </div>

                  </div>


              </div>

          </div>

      </div>
  </section>
  <!-- Listing Details Heading -->
        

  @include('Vitrine.layouts.footer')


	</body>

</html>