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
                        <h2>{{$article->title}}</h2>
                        <p><a href="/">Accueil</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="/blog">Blog </a><i class="fa fa-angle-double-right" aria-hidden="true"></i> Article</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Inner Banner -->

    <!-- Article -->
    <section id="blog" class="p_b70 p_t70 bg_lightgry" >
        <div class="container">

            <div class="row">

                <div class="col-6" style=" margin:auto; width: 80% ">

                    <div class="blog heading">

                        <h2>{{$article->title}}</h2>

                        <div class="blog-img">
                            <img src="{{asset('store/' . $article->img)}}" alt="image">
                        </div>

                        <div class="blog-detail">
                            <ul class="blog-admin">
                                <li><i class="fa fa-user"></i>Publié par :<a href="/professionnels/{{$pro_id}}"> {{$article->author->name}}</a>
                                </li>
                                <li><i class="fa fa-clock-o"></i><a href="#"> {{date('d-m-Y',strtotime($article->posted_at))}}</a>
                                </li>
                            </ul>
                            <p>  {!! html_entity_decode($article->content) !!} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Article -->
  
		@include('Vitrine.layouts.footer')

	</body>
</html>