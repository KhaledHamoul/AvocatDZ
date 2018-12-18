<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    @include('professionnel.layouts.head')
    <link rel="stylesheet" href="{{asset('css/switch.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/leaflet.css')}}"/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="{{asset('js/leaflet.js')}}"></script>
    
</head>

<body>
    @include('professionnel.layouts.leftPanel')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        @include('professionnel.layouts.header')
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 m-auto">
                    <form action="/update_horaires" method="post">
                        {{ csrf_field() }}
                        <div class="profile-login-bg">
                            <h4><span><i class="far fa-clock"></i></span> Mes <span>horaires</span></h4>

                            <div class="row p_b30 my-4">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Samedi (ouverture)</label>
                                        <input class="form-control" id="name" name="11" value="{{ $horaires->samedi_d }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Samedi (fermeture)</label>
                                        <input class="form-control" id="name" name="12" value="{{ $horaires->samedi_f }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Dimanche (ouverture)</label>
                                        <input class="form-control" id="name" name="21" value="{{ $horaires->dimanche_d }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Dimanche (fermeture)</label>
                                        <input class="form-control" id="name" name="22" value="{{ $horaires->dimanche_f }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Lundi (ouverture)</label>
                                        <input class="form-control" id="name" name="31" value="{{ $horaires->lundi_d }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Lundi (fermeture)</label>
                                        <input class="form-control" id="name" name="32" value="{{ $horaires->lundi_f }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Mardi (ouverture)</label>
                                        <input class="form-control" id="name" name="41" value="{{ $horaires->mardi_d }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Mardi (fermeture)</label>
                                        <input class="form-control" id="name" name="42" value="{{ $horaires->mardi_f }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Mercredi (ouverture)</label>
                                        <input class="form-control" id="name" name="51" value="{{ $horaires->mercredi_d }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Mercredi (fermeture)</label>
                                        <input class="form-control" id="name" name="52" value="{{ $horaires->mercredi_f }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Jeudi (ouverture)</label>
                                        <input class="form-control" id="name" name="61" value="{{ $horaires->jeudi_d }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Jeudi ((fermeture))</label>
                                        <input class="form-control" id="name" name="62" value="{{ $horaires->jeudi_f }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Vendredi (ouverture)</label>
                                        <input class="form-control" id="name" name="71" value="{{ $horaires->vendredi_d }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Vendredi (fermeture)</label>
                                        <input class="form-control" id="name" name="72" value="{{ $horaires->vendredi_f }}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-large btn-info" id="submit">Save Changes</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
     @include('professionnel.layouts.footer')
     @if(session('message'))
    <script>
        alert('Modification effuctuée avec succès !');
    </script>
@endif
   
</body>
</html>
