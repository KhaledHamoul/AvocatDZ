<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Professionnel;
use App\User;
use App\Profile;
use App\AvocatDomaine;
use App\Visite;
use App\VisiteInconnu;
use App\Rdv;
use App\Category;
use App\Announcement;
use App\Review;
use App\Horaire;
use Carbon\Carbon;


class ProfessionnelController extends Controller
{
    //
    public function register(Request $data){
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $hraires = Horaire::create();

        $avocat = Avocat::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'telephone' => $data['telephone'],
            'addresse' => $data['addresse'],
            'ville' => $data['ville'],
            'description' => $data['description'],
            'img_url' => $data['img_url'],
            'user_id' => $user->id,
            'profile_id' => $data['profile'],
            'lat' => 'lat',
            'lng' => 'lng',
            'img_url' => '/avocat_img/user.png',
            'horaires_id' => $horaires->id,
        ]);

        Auth::login($user);

        return redirect('/accueil_avocat');
    }

    public function login(Request $data){
        $credentials = $data->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/accueil_professionnel');
        }
        return redirect('/login');
    }

    public function index(){
        $userID = Auth::id();
        $pro = Professionnel::where('user_id',$userID)->first();
        $visites = count( Visite::where('professionnel_id',$pro->id)->get()) + count( VisiteInconnu::where('professionnel_id',$pro->id)->get());
        $avis = count( Review::where('professionnel_id',$pro->id)->get());
        $articles = count( Announcement::where('author_id',Auth::id())->get());

        $params = ['professionnel' => $pro , 'visites' => $visites , 'avis' => $avis , 'articles' => $articles ];
        return view('Professionnel.accueil',$params);
    }

    public function rdv(){
        $userID = Auth::id();
        $pro = Professionnel::where('user_id',$userID)->first();
        $rdv = Rdv::where('professionnel_id',$pro->id)->get();
        $params = ['rdv' => $rdv];
        return view('Professionnel.rdv',$params);
    }

    public function avis(){
        $userID = Auth::id();
        $pro = Professionnel::where('user_id',$userID)->first();
        $reviews = $pro->avis;
        return view('Professionnel.avis')
            ->with('reviews',$reviews);
    }

    public function visistes(){
        $userID = Auth::id();
        $pro = Professionnel::where('user_id',$userID)->first();
        //$visites = Visite::where('professionnel_id',$pro->id)->get();
        $visites = DB::table('visites')->orderBy('client_id')
                                    ->join('clients','clients.id','=','visites.client_id')
                                    ->select('client_id', DB::raw('count(*) as nbr_visites,nom,prenom,ville'))
                                    ->where('professionnel_id', $pro->id )
                                    ->groupBy('client_id','nom','prenom','ville')
                                    ->get();
        $visitesInconnues = VisiteInconnu::where('professionnel_id',$pro->id)->get();
        $params = ['visites' => $visites , 'visites_inconnues' => $visitesInconnues ];
        return view('Professionnel.visistes', $params );
    }

    public function articles(){
        return view('Professionnel.articles')
        ->with('articles',Announcement::where('author_id',Auth::id())->get());
    }

    public function compte(){
        $userID = Auth::id();
        $pro = Professionnel::where('user_id',$userID)->first();
        return view('Professionnel.compte')
        ->with('pro',$pro)
        ->with('pro_email',Auth::user()->email);
    }

    public function creerArticle(){
        return view('Professionnel.creer_article')
        ->with('categories',Category::all());
    }

    public function storeArticle(Request $request){
        $this->validate($request,[
            'titre' => 'required',
            'contenu' => 'required',
            'image' => 'required|image',
            'category' => 'required'
        ]);


        $img = $request->image;
        $img_name = Storage::putFile('posts', $img);

        Announcement::create([
            'author_id' => Auth::id(),
            'category_id' => $request->category,
            'title' => $request->titre,
            'content' => $request->contenu,
            'img' => $img_name,
            'slug' => str_slug($request->titre),
            'posted_at' => Carbon::now()
        ]);

        return view('Professionnel.articles')
        ->with('articles',Announcement::where('author_id',Auth::id())->get());
    }


    public function updatePro(Request $request,$id){
        $pro = Professionnel::find($id);
        $pro->nom = $request->nom;
        $pro->prenom = $request->prenom;
        $pro->telephone = $request->telephone;
        $pro->description = $request->description;
        $pro->addresse = $request->addresse;
        $pro->ville = $request->ville;
        $pro->lat = $request->lat;
        $pro->lng = $request->lng;
        $user = $pro->user;
        $user->email = $request->email;
        //image
        $img = $request->image;
        $img_name = Storage::putFile('users', $img);
        $pro->img_url = $img_name;
        $pro->update();
        $user->update();
        return redirect()->back()
        ->with('pro',$pro)
        ->with('pro_email',Auth::user()->email);
    }

    function horaires(){
        $pro = Professionnel::where('user_id',Auth::id())->first();
        $horaires = Horaire::find($pro->horaires_id);

        if(!isset($horaires)){
            $horaires = Horaire::create();
            $pro->horaires_id = $horaires->id;
            $pro->update();
            $horaires = Horaire::find($horaires->id);
        }
        
        
        return view('Professionnel.horaires',['horaires' => $horaires]);
    }

    function updateHoraires(Request $request){
        $pro = Professionnel::where('user_id',Auth::id())->first();
        $h = Horaire::find($pro->horaires_id);
        $data = $request->toArray();
        $tab = ['11','12','21','22','31','32','41','42','51','52','61','62','71','72'];
        for( $i= 0 ; $i < 14 ; $i++) {
            if( $data[$tab[$i]] == null) $data[$tab[$i]] = "00:00:00";
        }

        $h->samedi_d = $data["11"];
        $h->samedi_f = $data["12"];
        $h->dimanche_d = $data["21"];
        $h->dimanche_f = $data["22"];
        $h->lundi_d = $data["31"];
        $h->lundi_f = $data["32"];
        $h->mardi_d = $data["41"];
        $h->mardi_f = $data["42"];
        $h->mercredi_d = $data["51"];
        $h->mercredi_f = $data["52"];
        $h->jeudi_d = $data["61"];
        $h->jeudi_f = $data["62"];
        $h->vendredi_d = $data["71"];
        $h->vendredi_f = $data["72"];

        $h->update();
         return redirect()->back()->with('message',true);

    }
}
