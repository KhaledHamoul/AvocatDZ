<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('professionnel.layouts.head')
    <link rel="stylesheet" href="{{asset('css/switch.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/leaflet.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/autocomplete.css')}}"/>
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
                    <form action="{{route('professionnel.modify',['id' => $pro->id])}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="profile-login-bg">
                            <h4><span><i class="fa fa-user"></i></span> Personal <span>Info</span></h4>

                            <div class="row p_b30 my-4">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input class="form-control" id="name" name="nom" value="{{$pro->nom}}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Prenom</label>
                                            <input class="form-control" id="name" name="prenom" value="{{$pro->prenom}}" type="text">
                                        </div>
                                        <!--/.form-group-->
                                </div>
                                <!--/.col-md-3-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" id="email" name="email" value="{{$pro_email}}" type="email">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <!--/.col-md-3-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="telephone">Telehone</label>
                                        <input class="form-control" id="telephone" name="telephone" value="{{$pro->telephone}}" type="text">
                                    </div>
                                    <!--/.form-group-->
                                </div>
                                <!--/.col-md-3-->
                        </div>

                            <h4><span><i class="fa fa-map-marker"></i></span> Address</h4>
                            <div class="my-4">
                                <!--/.form-group-->
                                <div class="form-group">
                                    <label for="ville">Ville</label>
                                    <input class="form-control" id="ville" name="ville" value="{{$pro->ville}}" type="text">
                                </div>
                                <!--/.form-group-->
                                <!--/.col-md-3-->
                                <div class="form-group p_b30">
                                    <label for="addresse">Adresse</label>
                                    <input class="form-control" id="addresse" name="addresse" type="text" value="{{$pro->addresse}}">
                                </div>
                                <!--/.form-group-->
                            </div>
                                

                            <h4><span><i class="fa fa-map-marker"></i></span> A propos de Moi</span></h4>
                            <div>
                                <div class="form-group mt-3">
                                    <div class="form-group">
                                        <textarea class="form-control" id="about-me" rows="3" name="description" required="">{{$pro->description}}</textarea>
                                    </div>
                                    <!--/.form-group-->
                                </div>
                            </div>

                            <h4><span><i class="fa fa-map-marker"></i></span> Mes compétences</span></h4>
                            <div>
                                <div class="form-group mt-3">
                                    <div class="form-group">
                                            <textarea id="textarea" class="example" rows="1"></textarea>                                    </div>
                                    <!--/.form-group-->
                                </div>
                            </div>

                            <h4><span><i class="fa fa-map-marker"></i></span> Mon Avatar</span></h4>
                            <div>
                                    <div class="form-group mt-3">
                                        <div class="form-group">
                                                <input type="file" name="image" class="input-file">
                                            </div>
                                        <!--/.form-group-->
                                    </div>
                            </div>

                            <h4><span><i class="fa fa-map-marker"></i></span> Ma Position</span></h4>
                            <div>
                                    <div class="form-group mt-3">
                                        <label for="about-me">Modifier Map: &nbsp;&nbsp;</label> 
                                        <span class="switch">
                                                <input type="checkbox" class="switch-sm" id="change-toggle" checked>
                                                <label for="change-toggle"></label>
                                        </span>
                                    </div>
                            </div>
                            <div class="form-group">
                                    <input type="text" id="lat" value="{{$pro->lat}}" name="lat" style="display:none;">
                                    <input type="text" id="lng" value="{{$pro->lng}}" name="lng" style="display:none;">
                            </div>
                            
                            <div class="my-5 px-5" style="height:400px;">
                                <div id="mapid" style="height:400px"></div>
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
     <script src="{{asset('js/autocomplete.js')}}"></script>
     <script>
        var on_modify = true;
        var init_lat = parseFloat($('#lat').val());
        var init_len = parseFloat($('#lng').val());
        var mymap = L.map('mapid').setView([init_lat, init_len], 13);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1Ijoic2xhbGFoZWRkaW5lYmsiLCJhIjoiY2pwY3psc2kwMHEzNjNrcDhxaWN0NTBvaCJ9.mYLY2jJbLGhMhuX7OBEdNw'
        }).addTo(mymap);
        // Change the default cursor
        document.getElementById('mapid').style.cursor = 'pointer';
        var marker = L.marker([init_lat, init_len],{
            draggable : true
        }).addTo(mymap);
        $('#change-toggle').on('click',function(e){
            if(on_modify){
                marker.dragging.disable();
                on_modify = false;
            }else{
                marker.dragging.enable();
                on_modify = true;
            }
        })
        mymap.on('click',function(e){
            if(on_modify){
                marker.setLatLng(e.latlng);
                $('#lat').val(e.latlng.lat);
                $('#lng').val(e.latlng.lng);
            }
        });
        marker.on('moveend',function(e){
            $('#lat').val(marker.getLatLng().lat);
            $('#lng').val(marker.getLatLng().lng);
        });

        $('#textarea')
        .textext({
            plugins : 'autocomplete tags filter'
        })
        .bind('getSuggestions', function(e, data)
        {
            var list = [
                    'Basic',
                    'Closure',
                    'Cobol',
                    'Delphi',
                    'Erlang',
                    'Fortran',
                    'Go',
                    'Groovy',
                    'Haskel',
                    'Java',
                    'JavaScript',
                    'OCAML',
                    'PHP',
                    'Perl',
                    'Python',
                    'Ruby',
                    'Scala'
                ],
                textext = $(e.target).textext()[0],
                query = (data ? data.query : '') || ''
                ;

            $(this).trigger(
                'setSuggestions',
                { result : textext.itemManager().filter(list, query) }
            );
        })
        ;
    </script>
</body>
</html>
