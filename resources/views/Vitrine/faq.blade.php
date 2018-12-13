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
                    <h2>FAQ</h2>
                    <p><a href="/">Accueil</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> FAQ</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Inner Banner -->

<!-- Faq -->
<section id="listing-details" class="p_b70 p_t70 bg_lightgry">

    <div class="container">
    
        <div class="row">
        
            <div class="col-md-12">
                <div class="details-heading heading">
                
                <h2 class="p_b20">Ask Your <span>Question</span></h2>
                <span>Didn't find an answer?</span>
                
                <div class="panel-group m_t40" id="accordion" role="tablist" aria-multiselectable="true">

                    @foreach($faqs as $faq)
                        <div class="panel panel-default">
                            
                            <div class="panel-heading" role="tab" id="heading{{ $faq->id }}">
                                <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}" class="collapsed">
                                    Donec condimentum neque est, quis finibus velit laoreet vel. ?
                                </a>
                                </h4>
                            </div>
                            
                            <div id="collapse{{ $faq->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $faq->id }}" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    
                                    <div class="listing-special-detail">
                                                
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec cursus orci, id pulvinar arcu. Proin pellentesque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer molestie viverra neque sit amet posuere. Nullam eget ultricies mi. Proin pulvinar quam porttitor consequat pulvinar. Etiam non neque et quam euismod cursus. Praesent eu sem interdum, pharetra metus sed, sollicitudin sem. Curabitur tincidunt dolor quis dolor iaculis, ut maximus ante fermentum </p>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                            </div>
                    @endforeach
                                        
                </div>
                
            </div>
            </div>
            
        </div>
        
        
    </div>

</section>
<!-- Faq -->


@include('Vitrine.layouts.footer')
@include('Vitrine.layouts.js')

</body>
</html>