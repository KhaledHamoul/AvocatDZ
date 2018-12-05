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
                            <strong class="card-title">Demandes de rendez-vous</strong>
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $rdv as $item )
                                        <tr>
                                            <td> {{ $item->id }} </td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('Vitrine_assets/images/client/testimonial2.jpg') }}" alt=""></a>
                                                </div>
                                            </td>
                                            <td>  <span class="name">{{ $item->client->nom }}</span> </td>
                                            <td> <span class="product">{{ $item->client->prenom }}</span> </td>
                                            <td> <span class="product">{{ $item->client->ville }}</span> </td>                                            
                                            <td>
                                                <info-client client-id="{{ $item->client->id }}"></info-client>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
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
