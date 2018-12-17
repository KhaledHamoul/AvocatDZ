<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Vitrine.layouts.head')
    </head>
    <style>
    .recent-articles {
        background-color: #f6f6f6;
    }
    </style>
<body>

@include('Vitrine.layouts.header')

<!-- Banner -->
<section id="banner">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="banner-search">
                  <h1>Knoune</h1>
                  <p>La première platforme de justice en Algérie</p>
                  @include('Vitrine.layouts.find_lawyer')
              </div>
          </div>
      </div>
      <div class="search-propertie-filters collapse">
          <div class="container-2">
              <div class="row">
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="search-form-group white">
                          <input type="checkbox" name="check-box" />
                          <span>Wifi</span> </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="search-form-group white">
                          <input type="checkbox" name="check-box" />
                          <span>Park</span> </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="search-form-group white">
                          <input type="checkbox" name="check-box" />
                          <span>Schools</span> </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="search-form-group white">
                          <input type="checkbox" name="check-box" />
                          <span>Grounds</span> </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="search-form-group white">
                          <input type="checkbox" name="check-box" />
                          <span>Masque</span> </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="search-form-group white">
                          <input type="checkbox" name="check-box" />
                          <span>Hospitals</span> </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="search-form-group white">
                          <input type="checkbox" name="check-box" />
                          <span>Transport</span> </div>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <div class="search-form-group white">
                          <input type="checkbox" name="check-box" />
                          <span>Security</span> </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="banner-icons">
      <ul>
          <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
          <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
          <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
          <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
          <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
      </ul>
  </div>
</section>
<!-- Banner -->

<!-- How to find -->
<div id="how-to-find" class="p_b70 p_t70">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading">
                <h2>Services <span>Knoune</span></h2>
                <p>Nos services sont déstinés aux particuliers et aux professionnels.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <div class="how-to-find-box">
                    <img src="{{ asset('vetrine_assets/images/how-to-find1.png') }}" alt="image">
                    <h3>Annuaire de professionnels</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tempus mollis dui vitae finibus. Ut volutpat condimentum metus, ac pulvinar tellus.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <div class="how-to-find-box">
                    <img src="{{ asset('vetrine_assets/images/how-to-find2.png') }}" alt="image">
                    <h3>Rendez-vous en ligne</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tempus mollis dui vitae finibus. Ut volutpat condimentum metus, ac pulvinar tellus.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <div class="how-to-find-box">
                    <img src="{{ asset('vetrine_assets/images/how-to-find3.png') }}" alt="image">
                    <h3>Explore your Day</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tempus mollis dui vitae finibus. Ut volutpat condimentum metus, ac pulvinar tellus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- How to find -->

<section id="call-to-action" class="parallax-window" data-parallax="scroll" data-image-src="vetrine_assets/images/call-to-action-bg.jpg">
  <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-left:16.66%">
               <iframe width="100%" height="480" src="https://www.youtube.com/embed/spr5smxuO5E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
  </div>
</section>




<!-- Call to action -->
<div id="call-to-action2">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-9 col-xs-12 call-to-action-text">
                <p>Vous êtes un professionnel ? <br>Demandez l'accès à votre compte dès maintenant pour bénificier de nos offres.</p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-12 call-to-action-bttn">
                <a href="/espace_pro">Espace Pro</a>
            </div>
        </div>
    </div>
</div>
<!-- Call to action -->

<!-- Popular Listing -->
<section id="popular-listing" class="p_b70 p_t70 recent-articles">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>Derniers <span>articles</span></h2>
            </div>
        </div>
        <div class="row">
            @foreach($derniers_articles as $article)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="blog heading">
                        <h2>{{ $article->title }}</h2>
                        <div class="blog-img">
                            <img src="{{asset('store/' . $article->img)}}" alt="image">
                        </div>
                        <div class="blog-detail">
                            <ul class="blog-admin">
                                <li><i class="fa fa-user"></i>Publié par : {{$article->author->name}}
                                </li>
                                <li><i class="fa fa-clock-o"></i><a href="#"> {{date('d-m-Y',strtotime($article->posted_at))}}</a>
                                </li>
                                <li><i class="fa fa-file"></i><a href="#"> Droit de la famille </a>
                                </li>
                            </ul>
                            <p></p><p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: 'Open Sans', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum lorem eu tellus vehicula feugiat. Etiam odio nisl, rhoncus et purus sed, lacinia faucibus est. Quisque cursus ipsum ante, vitae sollicitudin magna pretium et. Phasellus venenatis justo quis mi bibendum eleifend....</p>
                            <a href="http://localhost:8000/blog/article/article-divorces-en-algerie" class="blog-btn">Lire l'article</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Popular Listing -->

<!-- Call-to-action -->
<section id="call-to-action" class="parallax-window" data-parallax="scroll" data-image-src="images/call-to-action-bg.jpg">
  <div class="container">
      <div class="row">
      <div class="row number-counters text-center">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- first count item -->
            <div class="counters-item">
                <i class="fa fa-file" aria-hidden="true"></i>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <strong data-to="520">0</strong>
                <p>Listing</p>
                <div class="border-inner"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- first count item -->
            <div class="counters-item">
                <i class="fa fa-users" aria-hidden="true"></i>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <strong data-to="5620">0</strong>
                <p>User</p>
                <div class="border-inner"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- first count item -->
            <div class="counters-item">
                <i class="fa fa-th" aria-hidden="true"></i>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <strong data-to="1520">0</strong>
                <p>Categories</p>
                <div class="border-inner"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- first count item -->
            <div class="counters-item">
                <i class="fa fa-th-list" aria-hidden="true"></i>
                <!-- Set Your Number here. i,e. data-to="56" -->
                <strong data-to="5020">0</strong>
                <p>Listing Types</p>
                <div class="border-inner"></div>
            </div>
        </div>
    </div>
    </div>
  </div>
</section>
<!-- Call-to-action -->

<!-- Counter Section -->
<div id="counter-section">
  <div class="container">
  </div>
</div>
<!-- Counter Section -->


@include('Vitrine.layouts.footer')
@include('Vitrine.layouts.js')
<!--Vue JS-->
<script src="{{ asset('js/vue-config.js') }}"></script>

</body>
</html>