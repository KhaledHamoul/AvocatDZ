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
                 <!-- Widgets  -->
                 <div class="row d-flex justify-content-center">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{ count($visites) }}</span></div>
                                            <div class="stat-heading">Visites clients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="far fa-eye"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{ count($visites_inconnues) }}</span></div>
                                            <div class="stat-heading">Visistes des inconnus</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Visites des clients</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <div id="vue-components">   
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th class="avatar">Avatar</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Téléphone</th>
                                            <th>Nombre de visites</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $visites as $item )
                                            <tr>
                                                <td> {{ $item->client_id }} </td>
                                                <td class="avatar">
                                                    <div class="round-img">
                                                        <a href="#"><img class="rounded-circle" src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>  <span class="name">{{ $item->nom }}</span> </td>
                                                <td> <span class="product">{{ $item->prenom }}</span> </td>
                                                <td> <span class="product">{{ $item->ville }}</span> </td>                                            
                                                <td> <span class="product">{{ $item->nbr_visites }}</span> </td>
                                                <td>
                                                    <info-client client-id="{{ $item->client_id }}"></info-client>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div> <!-- /.table-stats -->
                        </div>
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
