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

                      <h2><a href="{{route('blog-single',['slug' => $article->slug])}}" >{{$article->title}} </a></h2>

                      <div class="blog-img">
                          <img src="{{asset('store/' . $article->img)}}" alt="image">
                      </div>

                      <div class="blog-detail">
                          <ul class="blog-admin">
                                @if($article->by_admin == 0)
                                <li><i class="fa fa-user"></i>Publié par :<a href="/professionnels/{{$article->author_id}}"> {{$article->author->name}}</a>
                                </li>
                                @else
                                <li><i class="fa fa-user"></i>Publié par l'admin
                                </li>
                                @endif
                              <li><i class="fa fa-clock-o"></i> {{date('d-m-Y',strtotime($article->created_at))}}
                              </li>
                              <li><i class="fa fa-file"></i><a href="#"> {{$article->category->name}} </a>
                              </li>
                          </ul>
                          <p>{!! str_limit(html_entity_decode($article->content), 400) !!}</p>
                          <a href="{{route('blog-single',['slug' => $article->slug])}}" class="blog-btn">Lire l'article</a>
                      </div>

                  </div>
                @endforeach
                <div class="">
                {{$articles->links('partials.pagination')}}
                </div>
              </div>

              <div class="col-md-3 col-sm-3 col-xs-12">

                  <div class="right-bar bg_white">
                      <h4>Liste des <span>catégories</span></h4>
                      <ul class="right-bar-listing">
                        @foreach($categories as $category)
                          <li><a href="{{Route('blog.category',['category' => $category->id])}}">{{ $category->name }}</a>
                          </li>
                        @endforeach
                        <li><a href="/blog/">Toutes</a></li>
                      </ul>
                  </div>

                  <div class="right-bar bg_white">
                      <h4>Récemment <span>publiés</span></h4>
                      @foreach ($recent_articles as $article)
                        <div class="recent-listing-img">
                            <img src="{{ asset('store/' . $article->img) }}" alt="image">
                            <div class="recent-listing-links">
                                <a href="{{route('blog-single',['slug' => $article->slug])}}" class="recent-jobs">{{$article->title}}</a>
                                <a href="{{route('blog-single',['slug' => $article->slug])}}" class="recent-readmore">Lire</a>
                            </div>
                        </div> 
                      @endforeach                 
                  </div>

                  <!--
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
                  -->


              </div>

          </div>

      </div>
  </section>
  <!-- Listing Details Heading -->
        

  @include('Vitrine.layouts.footer')


	</body>

</html>                                                                                                                                                                                                                                          