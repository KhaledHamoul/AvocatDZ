<!doctype html>
<html>
    <head>
        @include('Vitrine.layouts.head')
    </head>
    <body>
    
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
            your browser</a> to improve your experience and security.</p>
        <![endif]-->

        @include('Vitrine.layouts.header')

        <!-- Popular Listing -->
        <section id="login-register" class="p_b70 p_t70">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ul class="nav nav-tabs" role="tablist">
                            @if(session()->has('user'))
                                <li role="presentation"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Se connecter</a>
                                </li>
                                <li role="presentation"  class="active"><a href="#registerd" aria-controls="registerd" role="tab" data-toggle="tab">S'inscrire</a>
                                </li>
                            @else
                                <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Se connecter</a>
                                </li>
                                <li role="presentation"><a href="#registerd" aria-controls="registerd" role="tab" data-toggle="tab">S'inscrire</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
                @if(session()->has('user'))
                <div role="tabpanel" class="tab-pane fade" id="login">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="login-register-bg">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <div class="heading">
                                                <h2>Se connecter</h2>
                                            </div>

                                            <form action="/login_user" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                                </div>

                                                <div class="form-group">
                                                    <button>Se connecter</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <div class="social-register-bg">
                                                <h3>Se connecter avec les réseaux sociaux</h3>
                                                <ul class="social-register-icon">
                                                    <li><a href="/login/facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                                    </li>
                                                    <li><a href="/login/google"><i class="fa fa-google"></i> Google+</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade in active" id="registerd">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="login-register-bg">

                                    <div class="row">

                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <div class="heading">
                                                <h2>Créer <span>un compte</span></h2>
                                            </div>
                                            <form action="/register_client" method="post" class="registerd">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nom" value="{{ preg_split('/[\s,]+/', session('user')->name)[1]}}" placeholder="Nom" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="prenom" value="{{ preg_split('/[\s,]+/', session('user')->name)[0]}}"  placeholder="Prénom" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" value="{{session('user')->email}}" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="telephone" placeholder="Téléphone" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="adresse" placeholder="Adresse" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="ville" placeholder="ville" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                                </div>
                                                <input type="hidden"  name="provider" value="{{session('provider')}}"  required>
                                                <input type="hidden"  name="provider_id" value="{{session('user')->id}}" required>
                                                <div class="form-group">
                                                    <button>S'inscrire</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-md-5 col-sm-5 col-xs-12 ">
                                            <div class="social-register-bg">

                                                <h3>S'inscrire avec les réseaux sociaux</h3>

                                                <ul class="social-register-icon">
                                                    <li><a href="/login/facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                                    </li>
                                                    <li><a href="/login/google"><i class="fa fa-google"></i> Google+</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else 
                <div role="tabpanel" class="tab-pane fade in active" id="login">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="login-register-bg">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <div class="heading">
                                                <h2>Se connecter</h2>
                                            </div>

                                            <form action="/login_user" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                                </div>

                                                <div class="form-group">
                                                    <button>Se connecter</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <div class="social-register-bg">
                                                <h3>Se connecter avec les réseaux sociaux</h3>
                                                <ul class="social-register-icon">
                                                    <li><a href="/login/facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                                    </li>
                                                    <li><a href="/login/google"><i class="fa fa-google"></i> Google+</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="registerd">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="login-register-bg">

                                    <div class="row">

                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <div class="heading">
                                                <h2>Créer <span>un compte</span></h2>
                                            </div>
                                            <form action="/register_client" method="post" class="registerd">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nom"  placeholder="Nom" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="prenom"  placeholder="Prénom" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="telephone" placeholder="Téléphone" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="adresse" placeholder="Adresse" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="ville" placeholder="ville" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"  placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                                </div>
                                                <div class="form-group">
                                                    <button>S'inscrire</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-md-5 col-sm-5 col-xs-12 ">
                                            <div class="social-register-bg">

                                                <h3>S'inscrire avec les réseaux sociaux</h3>

                                                <ul class="social-register-icon">
                                                    <li><a href="/login/facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                                    </li>
                                                    <li><a href="/login/google"><i class="fa fa-google"></i> Google+</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endif

            </div>

        </section>
        <!-- Popular Listing -->

        @include('Vitrine.layouts.footer')
        @include('Vitrine.layouts.js')
    </body>
</html>

