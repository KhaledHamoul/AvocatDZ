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
                            <strong class="card-title">Avis de visiteurs</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Image</th>
                                        <th>Titre</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}" alt=""></a>
                                            </div>
                                        </td>
                                        <td>  <span class="name">Louis Stanley</span> </td>
                                        <td>  <span class="name">15/11/2017</span> </td>
                                        <td>
                                            <span class="badge badge-complete"><i class="fa fa-file-text-o"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}" alt=""></a>
                                            </div>
                                        </td>
                                        <td>  <span class="name">Gregory Dixon</span> </td>
                                        <td>  <span class="name">15/11/2017</span> </td>
                                        <td>
                                            <span class="badge badge-complete"><i class="fa fa-file-text-o"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}" alt=""></a>
                                            </div>
                                        </td>
                                        <td>  <span class="name">Catherine Dixon</span> </td>
                                        <td>  <span class="name">15/11/2017</span> </td>
                                        <td>
                                            <span class="badge badge-complete"><i class="fa fa-file-text-o"></i></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="serial">4.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}   " alt=""></a>
                                            </div>
                                        </td>
                                        <td>  <span class="name">Mary Silva</span> </td>
                                        <td>  <span class="name">15/11/2017</span> </td>
                                        <td>
                                            <span class="badge badge-pending"><i class="fa fa-file-text-o"></i></span>
                                        </td>
                                    </tr>
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
</body>
</html>
