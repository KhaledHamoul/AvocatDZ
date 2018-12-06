<!doctype html>
<html lang="en">

	<head>
        @include('Blog.layouts.head')
        
	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

    @include('Blog.layouts.header')
    
        <!-- Page Content -->
        <div class="container">

            <div class="row">
      
              <!-- Post Content Column -->
              <div class="col-lg-8">
      
                <!-- Title -->
                <h1 class="mt-4">{{$article->title}}</h1>
      
                <!-- Author -->
                <p class="lead">
                  by
                  <a href="#">{{$article->author->name}}</a>
                </p>
      
                <hr>
      
                <!-- Date/Time -->
                <p>Le {{date('d-m-Y',strtotime($article->posted_at))}}</p>
      
                <hr>
      
                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{asset('store/' . $article->img)}}" alt="">
      
                <hr>
      
                <!-- Post Content -->
                <div>
                    {!! html_entity_decode($article->content) !!}
                </div>
      
              </div>
      
              <!-- Sidebar Widgets Column -->
              <div class="col-md-4">
      
                <!-- Search Widget -->
                <div class="card my-4">
                  <h5 class="card-header">Search</h5>
                  <div class="card-body">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
      
                <!-- Categories Widget -->
                <div class="card my-4">
                  <h5 class="card-header">Categories</h5>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                          <li>
                            <a href="#">Web Design</a>
                          </li>
                          <li>
                            <a href="#">HTML</a>
                          </li>
                          <li>
                            <a href="#">Freebies</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                          <li>
                            <a href="#">JavaScript</a>
                          </li>
                          <li>
                            <a href="#">CSS</a>
                          </li>
                          <li>
                            <a href="#">Tutorials</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- Side Widget -->
                <div class="card my-4">
                  <h5 class="card-header">Side Widget</h5>
                  <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                  </div>
                </div>
      
              </div>
      
            </div>
            <!-- /.row -->
      
          </div>
          <!-- /.container -->
  
          <!-- Sidebar Widgets Column -->
          <div class="col-md-4">
  
            <!-- Search Widget -->
            <div class="card my-4">
              <h5 class="card-header">Search</h5>
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
  
            <!-- Categories Widget -->
            <div class="card my-4">
              <h5 class="card-header">Categories</h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                      <li>
                        <a href="#">Web Design</a>
                      </li>
                      <li>
                        <a href="#">HTML</a>
                      </li>
                      <li>
                        <a href="#">Freebies</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                      <li>
                        <a href="#">JavaScript</a>
                      </li>
                      <li>
                        <a href="#">CSS</a>
                      </li>
                      <li>
                        <a href="#">Tutorials</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Side Widget -->
            <div class="card my-4">
              <h5 class="card-header">Side Widget</h5>
              <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
              </div>
            </div>
  
          </div>
  
        </div>
        <!-- /.row -->
  
      </div>
      <!-- /.container -->

		@include('Blog.layouts.footer')


	</body>

</html>