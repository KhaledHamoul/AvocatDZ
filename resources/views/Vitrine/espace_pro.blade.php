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
                    <h2>Espace des professionnels</h2>
                    <p><a href="/">Accueil</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Espace pro</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Inner Banner -->

<!-- Contact Us -->
<section id="about-us" class="p_b70 p_t70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="heading">
                    <h2>Demandez les accès de votre  <span>compte</span></h2>
                </div>
                <form class="contact-form" method="post" action="/demande_acces" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" name="telephone" class="form-control" placeholder="Télephone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cardID">Carte d'indentité *</label>
                                <input id="cardID" name="cardID" type="file" accept="image/*" class="form-control" placeholder="Votre question ..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cardID">Reçu CCP/Banque (optionnel)</label>
                                <input id="cardID" name="recu" type="file" accept="image/*" class="form-control" placeholder="Votre question ...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="remarque" class="form-control" placeholder="Remarque"></textarea>
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
        </div>
    </div>
</section>
<!-- Contact Us -->


@include('Vitrine.layouts.footer')
@include('Vitrine.layouts.js')

@if(session('message'))
    <script>
        alert('Votre demande a été envoyée avec succès !');
    </script>
@endif

</body>
</html>