<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    @include('professionnel.layouts.head')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=junub4rzc1w04261x15tnnpbmtrk5g5ig2k1mdluk6a5l3dk"></script> 
    <script>
        tinymce.init({
          selector: '#tiny',
        });
    </script>
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
                            <strong class="card-title">Creer Article</strong>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="/store_article_professionnel" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <fieldset>
                                    
                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="titre">Titre</label>  
                                      <div class="col-md-12">
                                      <input id="titre" name="titre" type="text" placeholder="Titre" class="form-control input-md" required="">
                                        
                                      </div>
                                    </div>
                                    
                                    <!-- Textarea -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="contenu">Contenu</label>
                                      <div class="col-md-12">                     
                                        <textarea class="form-control" id="tiny" name="contenu"></textarea>
                                      </div>
                                    </div>
                                    
                                    <!-- Tiny Mce -->

                                    <!-- File Button --> 
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="image">Image</label>
                                      <div class="col-md-12">
                                        <input type="file" name="image" class="input-file">
                                      </div>
                                    </div>
                                    
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="category">Category</label>
                                      <div class="col-md-12">
                                        <select id="category" name="category" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-md-12 text-center" style="margin-top:100px;">
                                            <input type="submit" class="btn btn-info" value="Ajouter" id="ajouter_article" name="submit"
                                            style="padding: 10px 2%; border-radius:4px;">
                                      </div>
                                    </div>
                                    
                                    </fieldset>
                                    </form>
                                    
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
     <script>
         // Prevent Bootstrap dialog from blocking focusin
        $(document).on('focusin', function(e) {
        if ($(e.target).closest(".mce-window").length) {
            e.stopImmediatePropagation();
        }
        });

     </script>
</body>
</html>
