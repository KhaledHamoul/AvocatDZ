<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('professionnel.layouts.head')
</head>

<body>
    @include('professionnel.layouts.leftPanel')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        @include('professionnel.layouts.header')
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Ma note</i></strong>
                        </div>
                        <div class="card-body">
                            <input type="text" id="review_average" value="{{$review_average}}" style="display:none;">
                            <h2 id="review_average_display"></h2>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Avis de visiteurs</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Avatar</th>
                                        <th>Nom Prénom</th>
                                        <th>Note</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0 ?>
                                    @foreach ($reviews as $review)
                                    <tr>
                                        <td class="serial">{{$i++}}.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{asset('store/' . $review->client->user->avatar)}}" alt=""></a>
                                            </div>
                                        </td>
                                        <td>  <span class="name">{{$review->client->user->name}}</span> </td>
                                        <td><span class="tel">{{$review->rate}}</span></td>
                                        <td>
                                            <span class="badge badge-complete"><i class="fa fa-eye"></i></span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div>  
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
     @include('professionnel.layouts.footer')
     <script src="{{asset('js/countup.js')}}"></script>
     <script>
        /* count up */
        var options = {
          useEasing: true,
          useGrouping: true,
          separator: ',',
          decimal: '.',
        };
        var review_average = document.getElementById('review_average').value;
        var mark = new CountUp('review_average_display', 0,review_average, 2, 2, options);
        if (!mark.error) {
        mark.start();
        } else {
          console.error(mark.error);
        }
     </script>
</body>
</html>
