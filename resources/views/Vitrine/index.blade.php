<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Vitrine.layouts.head')
    </head>
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

<!-- Directory Category -->
<section id="directory-category" class="p_b70 p_t70">
  <div class="container">
      <div class="row">
          <div class="col-md-12 directory-category-heading">
              <h2>Directory <span>Category</span></h2>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="directory-category-box text-center"> <span><i class="fa fa-glass" aria-hidden="true"></i></span>
                  <a href="restaurant.html">
                      <h3>Resturent</h3>
                  </a>
                  <p>152,546</p>
              </div>
              <div class="directory-category-box text-center"> <span><i class="fa fa-home" aria-hidden="true"></i></span>
                  <a href="real-estate.html">
                      <h3>Real Estate</h3>
                  </a>
                  <p>35,366</p>
              </div>
              <div class="directory-category-box text-center"> <span><i class="fa fa-futbol-o" aria-hidden="true"></i></span>
                  <a href="sport.html">
                      <h3>Sport</h3>
                  </a>
                  <p>2,546</p>
              </div>
              <div class="directory-category-box text-center"> <span><i class="fa fa-female" aria-hidden="true"></i></span>
                  <a href="beauty-spa.html">
                      <h3>Beauty & Spa</h3>
                  </a>
                  <p>1,546</p>
              </div>
              <div class="directory-category-box text-center"> <span><i class="fa fa-car" aria-hidden="true"></i></span>
                  <a href="vehicles.html">
                      <h3>Vehicles</h3>
                  </a>
                  <p>2, 34, 546</p>
              </div>
              <div class="directory-category-box text-center"> <span><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>
                  <a href="shoping.html">
                      <h3>Shoping</h3>
                  </a>
                  <p>2,546</p>
              </div>
              <div class="directory-category-box text-center"> <span><i class="fa fa-cogs" aria-hidden="true"></i></span>
                  <a href="industry.html">
                      <h3>Industry</h3>
                  </a>
                  <p>3,506</p>
              </div>
              <div class="directory-category-box text-center"> <span><i class="fa fa-heart" aria-hidden="true"></i></span>
                  <a href="dating.html">
                      <h3>Dating</h3>
                  </a>
                  <p>12,546</p>
              </div>
              <div class="directory-category-box text-center"> <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                  <a href="job.html">
                      <h3>Jobs</h3>
                  </a>
                  <p>22,546</p>
              </div>
              <div class="directory-category-box text-center"> <span><i class="fa fa-globe" aria-hidden="true"></i></span>
                  <a href="job.html">
                      <h3>Other Services</h3>
                  </a>
                  <p>24,567</p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Directory Category -->

<!-- Popular Listing -->
<section id="popular-listing" class="p_b70 p_t70">
  <div class="container">
      <div class="row">
          <div class="col-md-12 heading">
              <h2>Popular <span>Listings</span></h2>
          </div>
      </div>
      <div class="row">
          <div class="col-md-9 col-sm-9 col-xs-12">
          
              <div class="sort-by">
                  <div class="sort-category"> <span>Sort by</span>
                      <div class="single-query form-group">
                          <div class="intro">
                              <select>
                                  <option class="active">Most Popular</option>
                                  <option>Most Recent</option>
                                  <option>The Latest</option>
                                  <option>The Best Rating</option>
                              </select>
                          </div>
                      </div>
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

              <!-- Tab panes -->
              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="profile">
                      <div class="row">
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-1.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="restaurant.html">Restaurant</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-2.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="real-estate.html">Real Estate</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-3.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="sport.html">Sport</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-4.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="beauty-spa.html">Beauty & Spa</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-5.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="shoping.html">Shoping</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-6.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="dating.html">Dating</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="home">
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-3-1.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="restaurant.html">Restaurant</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-3-2.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="sport.html">Sport</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-3-3.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="shoping.html">Shoping</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="popular-listing-box">
                                  <div class="popular-listing-img">
                                      <figure class="effect-ming"> <img src="images/popular-3-4.jpg" alt="image">
                                          <figcaption>
                                              <ul>
                                                  <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                  <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                              </ul>
                                          </figcaption>
                                      </figure>
                                  </div>
                                  <div class="popular-listing-detail">
                                      <h3><a href="real-estate.html">Real Estate</a></h3>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                  </div>
                                  <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="messages">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="popular-listing-box">
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-12">
                                          <div class="popular-listing-img">
                                              <figure class="effect-ming"> <img src="images/popular-3-1.jpg" alt="image">
                                                  <figcaption>
                                                      <ul>
                                                          <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                          <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                          <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                      </ul>
                                                  </figcaption>
                                              </figure>
                                          </div>
                                      </div>
                                      <div class="col-md-7 col-sm-7 col-xs-12">
                                          <div class="popular-listing-detail">
                                              <h3><a href="restaurant.html">Restaurant</a></h3>
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                          </div>
                                          <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="popular-listing-box">
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-12">
                                          <div class="popular-listing-img">
                                              <figure class="effect-ming"> <img src="images/popular-3-2.jpg" alt="image">
                                                  <figcaption>
                                                      <ul>
                                                          <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                          <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                          <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                      </ul>
                                                  </figcaption>
                                              </figure>
                                          </div>
                                      </div>
                                      <div class="col-md-7 col-sm-7 col-xs-12">
                                          <div class="popular-listing-detail">
                                              <h3><a href="sport.html">Sport</a></h3>
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                          </div>
                                          <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="popular-listing-box">
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-12">
                                          <div class="popular-listing-img">
                                              <figure class="effect-ming"> <img src="images/popular-3-3.jpg" alt="image">
                                                  <figcaption>
                                                      <ul>
                                                          <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                          <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                          <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                      </ul>
                                                  </figcaption>
                                              </figure>
                                          </div>
                                      </div>
                                      <div class="col-md-7 col-sm-7 col-xs-12">
                                          <div class="popular-listing-detail">
                                              <h3><a href="shoping.html">Shoping</a></h3>
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                          </div>
                                          <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="popular-listing-box">
                                  <div class="row">
                                      <div class="col-md-5 col-sm-5 col-xs-12">
                                          <div class="popular-listing-img">
                                              <figure class="effect-ming"> <img src="images/popular-3-4.jpg" alt="image">
                                                  <figcaption>
                                                      <ul>
                                                          <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                          <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                          <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                      </ul>
                                                  </figcaption>
                                              </figure>
                                          </div>
                                      </div>
                                      <div class="col-md-7 col-sm-7 col-xs-12">
                                          <div class="popular-listing-detail">
                                              <h3><a href="real-estate.html">Real Estate</a></h3>
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                          </div>
                                          <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="right-bar">
                  <h4>Signup <span>Now</span></h4>
                  <form class="form-right">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Name" name="name">
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="E-mail" name="email">
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" placeholder="Password" name="password">
                      </div>
                      <div class="form-group">
                          <label>
                              <input type="checkbox" name="name"> I am agree with term and conditions</label>
                      </div>
                      <div class="form-group">
                          <button>Sign up Now</button>
                      </div>
                  </form>
              </div>
              <div class="right-bar">
                  <h4>Recent add <span>Listing</span></h4>
                  <div id="recent-listing" class="owl-carousel owl-theme">
                      <div class="item">
                          <div class="recent-listing-img">
                              <img src="images/recent-1.jpg" alt="image">
                              <div class="recent-listing-links">
                                  <a href="job.html" class="recent-jobs">Jobs</a>
                                  <a href="listing-details.html" class="recent-readmore">Read More</a>
                              </div>
                          </div>
                          <div class="recent-listing-img">
                              <img src="images/recent-2.jpg" alt="image">
                              <div class="recent-listing-links">
                                  <a href="real-estate.html" class="recent-jobs">Real Estate</a>
                                  <a href="listing-details.html" class="recent-readmore">Read More</a>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="recent-listing-img">
                              <img src="images/recent-1.jpg" alt="image">
                              <div class="recent-listing-links">
                                  <a href="job.html" class="recent-jobs">Jobs</a>
                                  <a href="listing-details.html" class="recent-readmore">Read More</a>
                              </div>
                          </div>
                          <div class="recent-listing-img">
                              <img src="images/recent-2.jpg" alt="image">
                              <div class="recent-listing-links">
                                  <a href="real-estate.html" class="recent-jobs">Real Estate</a>
                                  <a href="listing-details.html" class="recent-readmore">Read More</a>
                              </div>
                          </div>
                      </div>
                      <div class="item">
                          <div class="recent-listing-img">
                              <img src="images/recent-1.jpg" alt="image">
                              <div class="recent-listing-links">
                                  <a href="job.html" class="recent-jobs">Jobs</a>
                                  <a href="listing-details.html" class="recent-readmore">Read More</a>
                              </div>
                          </div>
                          <div class="recent-listing-img">
                              <img src="images/recent-2.jpg" alt="image">
                              <div class="recent-listing-links">
                                  <a href="real-estate.html" class="recent-jobs">Real Estate</a>
                                  <a href="listing-details.html" class="recent-readmore">Read More</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Popular Listing -->

<!-- Call-to-action -->
<section id="call-to-action" class="parallax-window" data-parallax="scroll" data-image-src="images/call-to-action-bg.jpg">
  <div class="container">
      <div class="row">
          <div class="col-md-12 text-center">
              <div class="call-to-action">
                  <h2>AMAZING find do directory html Template</h2>
                  <p>Find all things you need on Find Do. We give you a simple way.</p>
                  <div class="call-to-action-btn">
                      <a href="about.html">Read More</a>
                      <a href="#">Purchase</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Call-to-action -->

<!-- Best Things -->
<section id="best-things">
  <div class="container">

      <div class="row">
          <div class="col-md-12 heading">
              <h2>Best things with <span>FIND DO</span> in the City</h2>
          </div>
      </div>

      <div class="row">

          <div class="col-md-7 col-sm-7 col-xs-12">
              <div class="best-things-details">
                  <figure class="effect-ming"> <img src="images/best-thing-1.jpg" alt="image">
                      <figcaption>
                          <ul>
                              <li>
                                  <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                              </li>
                          </ul>
                      </figcaption>
                  </figure>

                  <div class="best-things-rating">
                      <div class="best-things-address">
                          <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> United State</h3>
                          <ul class="best-things-listing">
                              <li><a href="#">15 Cities,</a>
                              </li>
                              <li><a href="#">130 listings,</a>
                              </li>
                              <li><a href="#">View 6753</a>
                              </li>
                          </ul>
                      </div>
                      <div class="best-things-stars">
                          <span>4.5 <img src="images/stars-2.png" alt="img"></span>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-5 col-sm-5 col-xs-12">
              <div class="best-things-details">
                  <figure class="effect-ming"> <img src="images/best-thing-2.jpg" alt="image">
                      <figcaption>
                          <ul>
                              <li>
                                  <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                              </li>
                          </ul>
                      </figcaption>
                  </figure>

                  <div class="best-things-rating">
                      <div class="best-things-address">
                          <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> China</h3>
                          <ul class="best-things-listing">
                              <li><a href="#">15 Cities,</a>
                              </li>
                              <li><a href="#">130 listings,</a>
                              </li>
                              <li><a href="#">View 6753</a>
                              </li>
                          </ul>
                      </div>
                      <div class="best-things-stars">
                          <span>4.5 <img src="images/stars-2.png" alt="img"></span>
                      </div>
                  </div>
              </div>
          </div>

      </div>

      <div class="row">

          <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="best-things-details">
                  <figure class="effect-ming"> <img src="images/best-thing-3.jpg" alt="image">
                      <figcaption>
                          <ul>
                              <li>
                                  <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                              </li>
                          </ul>
                      </figcaption>
                  </figure>

                  <div class="best-things-rating">
                      <div class="best-things-address">
                          <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Germany</h3>
                          <ul class="best-things-listing">
                              <li><a href="#">15 Cities,</a>
                              </li>
                              <li><a href="#">130 listings,</a>
                              </li>
                              <li><a href="#">View 6753</a>
                              </li>
                          </ul>
                      </div>
                      <div class="best-things-stars">
                          <span>4.5 <img src="images/stars-2.png" alt="img"></span>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="best-things-details">
                  <figure class="effect-ming"> <img src="images/best-thing-4.jpg" alt="image">
                      <figcaption>
                          <ul>
                              <li>
                                  <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                              </li>
                          </ul>
                      </figcaption>
                  </figure>

                  <div class="best-things-rating">
                      <div class="best-things-address">
                          <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Australia</h3>
                          <ul class="best-things-listing">
                              <li><a href="#">15 Cities,</a>
                              </li>
                              <li><a href="#">130 listings,</a>
                              </li>
                              <li><a href="#">View 6753</a>
                              </li>
                          </ul>
                      </div>
                      <div class="best-things-stars">
                          <span>4.5 <img src="images/stars-2.png" alt="img"></span>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="best-things-details">
                  <figure class="effect-ming"> <img src="images/best-thing-5.jpg" alt="image">
                      <figcaption>
                          <ul>
                              <li>
                                  <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                              </li>
                          </ul>
                      </figcaption>
                  </figure>

                  <div class="best-things-rating">
                      <div class="best-things-address">
                          <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> France</h3>
                          <ul class="best-things-listing">
                              <li><a href="#">15 Cities,</a>
                              </li>
                              <li><a href="#">130 listings,</a>
                              </li>
                              <li><a href="#">View 6753</a>
                              </li>
                          </ul>
                      </div>
                      <div class="best-things-stars">
                          <span>4.5 <img src="images/stars-2.png" alt="img"></span>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>
</section>
<!-- Best Things -->

<!-- Counter Section -->
<div id="counter-section">
  <div class="container">

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
<!-- Counter Section -->

<!-- Latest News -->
<section id="latest-news">
  <div class="container">

      <div class="row">
          <div class="col-md-12 heading">
              <h2>Latest <span>News</span></h2>
          </div>
      </div>

      <div class="row">

          <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="latest-news-1">
                  <span class="latest-date">
                  Sep<br>23
              </span>
                  <img src="images/latest-news-1.jpg" alt="image">
                  <div class="latest-details">
                      <h3><a href="blog-detail.html">Need for growth and reliabilty</a></h3>
                      <ul>
                          <li><a href="#">by admin</a>
                          </li>
                          <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 73</a>
                          </li>
                          <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 750</a>
                          </li>
                          <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12">

              <div class="latest-news-2 clearfix">
                  <div class="latest-news-2-img">
                      <span class="latest-date">
                  Sep<br>23
              </span>
                      <img src="images/latest-news-2.jpg" alt="image">
                  </div>
                  <div class="latest-news-2-details">
                      <h3><a href="blog-detail.html">Need for growth and reliabilty</a></h3>
                      <p>No sea takimata sanctus est lorem ipsklum dolor sit amet ipsum dolor sit amet.</p>
                      <ul>
                          <li><a href="#">by admin</a>
                          </li>
                          <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 73</a>
                          </li>
                          <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 750</a>
                          </li>
                          <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                          </li>
                      </ul>
                  </div>
              </div>

              <div class="latest-news-2 m_t20 clearfix">
                  <div class="latest-news-2-img">
                      <span class="latest-date">
                  Sep<br>23
              </span>
                      <img src="images/latest-news-3.jpg" alt="image">
                  </div>
                  <div class="latest-news-2-details">
                      <h3><a href="blog-detail.html">Need for growth and reliabilty</a></h3>
                      <p>No sea takimata sanctus est lorem ipsklum dolor sit amet ipsum dolor sit amet.</p>
                      <ul>
                          <li><a href="#">by admin</a>
                          </li>
                          <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 73</a>
                          </li>
                          <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 750</a>
                          </li>
                          <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                          </li>
                      </ul>
                  </div>
              </div>

          </div>

      </div>

  </div>
</section>
<!-- Latest News -->


@include('Vitrine.layouts.footer')
@include('Vitrine.layouts.js')
<!--Vue JS-->
<script src="{{ asset('js/vue-config.js') }}"></script>

</body>
</html>