<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Professionnel;
use App\User;
use App\Profile;
use App\AvocatDomaine;
use App\Visite;
use App\VisiteInconnu;
use App\Rdv;
use App\Category;
use App\Announcement;
use Carbon\Carbon;


class ProfessionnelController extends Controller
{
    //
    public function register(Request $data){
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

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
            'img_url' => '/avocat_img/user.png'

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
        
        $params = ['professionnel' => $pro , 'visites' => $visites];
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
        return view('Professionnel.avis');
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
        return view('Professionnel.compte');
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
        $image_identical_name = time() . $img->getClientOriginalName();
        $img->move('store/', $image_identical_name);

        Announcement::create([
            'author_id' => Auth::id(),
            'category_id' => $request->category,
            'title' => $request->titre,
            'content' => $request->contenu,
            'img' => $image_identical_name,
            'slug' => str_slug($request->titre),
            'posted_at' => Carbon::now()
        ]);

        return view('Professionnel.articles')
        ->with('articles',Announcement::where('author_id',Auth::id())->get());
    }
}
