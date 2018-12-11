<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Vitrine.layouts.head')
    </head>
<body>

@include('Vitrine.layouts.header')

<!-- Inner Banner -->
<section id="inner-banner-2">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <div class="inner_banner_2_detail">
                    <h2>Contactez nous</h2>
                    <p><a href="/">Accueil</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Inner Banner -->

<!-- Contact Us -->
<section id="contact-us" class="p_b70 p_t70">

    <div class="container">

        <div class="row">

            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

                <div class="contact-bg">

                    <div class="heading">
                        <h2>Soyez libre de  <span>Nous contacter</span></h2>
                    </div>

                    <form class="contact-form">

                        <div class="row">

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nom & Prénom">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Télephone">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="name" class="form-control" placeholder="Votre question ..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                           

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button>Envoyer</button>
                                </div>
                            </div>

                        </div>

                    </form>


                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="address-box">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>
                            </p>
                            <h4>Téléphone</h4>
                            <p>+(10) 123 456 7896</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="address-box">
                            <p><i class="fa fa-envelope" aria-hidden="true"></i>
                            </p>
                            <h4>E-Mail</h4>
                            <p><a href="#">support@knoune.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="address-box">
                            <p><i class="fa fa-globe" aria-hidden="true"></i>
                            </p>
                            <h4>Site web</h4>
                            <p><a href="#">www.knoune.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="address-box">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                            </p>
                            <h4>Adresse</h4>
                            <p>Rue Amirouche,
                                <br>Alger, Algérie.</p>
                        </div>
                    </div>

                </div>

                <div class="row p_t70">

                    <div class="col-md-12">

                        <div class="right-bar bg_white">
                            <div class="heading">
                                <h2>Siège <span>Knoune</span></h2>
                            </div>
                            <div id="cd-google-map">
                                <div id="google-container"></div>
                                <div id="cd-zoom-in"></div>
                                <div id="cd-zoom-out"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Contact Us -->


@include('Vitrine.layouts.footer')
@include('Vitrine.layouts.js')

</body>
</html>