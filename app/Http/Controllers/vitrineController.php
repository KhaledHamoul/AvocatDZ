<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Avocat;
use App\Domaine;
use App\Client;
use App\Visite;
use App\VisiteInconnu;

class vitrineController extends Controller
{
    public function index(){
        $domaines = Domaine::all();
        return view('Vitrine.index',['domaines' => $domaines]);
    }

    public function getAvocatsList(){
        $avocats = Avocat::all();
        $domaines = Domaine::all();
        return view('Vitrine.avocats',['avocats' => $avocats , 'domaines' => $domaines]);
    }
    public function getAvocatsListFilter(Request $data){
        
        if (( isset($data['ville']))&&( isset($data['domaine']))) $avocats = (Domaine::find($data['domaine']))->getAvocats()->where('ville',$data['ville'])->get();
        else if ( isset($data['ville'])) $avocats = Avocat::where('ville',$data['ville'])->get();
        else if ( isset($data['domaine'])) $avocats = (Domaine::find($data['domaine']))->getAvocats()->get();
        else $avocats = Avocat::all();

        $domaines = Domaine::all();
        return view('Vitrine.avocats',['avocats' => $avocats , 'domaines' => $domaines]);
    }

    public function register(){
        $domaines = Domaine::all();
        return view('auth.register',['domaines' => $domaines]);
    }

    public function getAvocatInfo( $id ){
        $avocat = Avocat::find($id);
        $rdv_show = false;
        $client = Client::where('user_id',Auth::id())->get();

        if( $client->count() > 0 ){
            $rdv_show = true;
            Visite::create([
                'avocat_id' => $id,
                'client_id' => $client[0]->id,
            ]);
        } 
        else {
            VisiteInconnu::create([
                'avocat_id' => $id,
            ]);
        }
        return view('Vitrine.avocat_info',['avocat' => $avocat , 'rdv_show' => $rdv_show]);
    }
}


