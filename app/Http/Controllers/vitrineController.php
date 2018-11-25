<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Avocat;
use App\Competence;
use App\Profile;
use App\Client;
use App\Visite;
use App\VisiteInconnu;

class vitrineController extends Controller
{
    public function test(){
        
        return public_path();
    }
    public function index(){
        return view('Vitrine.index');
    }

    public function getAvocatsList(){
        $avocats = Avocat::all();
        return view('Vitrine.avocats',['avocats' => $avocats ]);
    }
    
    public function getAvocatsListFilter(Request $data){
        
        if ( isset($data['profile'])) {
            $avocats_profile = Avocat::where('profile_id',$data['profile'])->get();
            if ( isset($data['competence'])) {
                $avocats_competence = (Competence::find($data['competence']))->getAvocats()->get();
                if ( isset($data['ville'])) {
                    $avocats_ville = Avocat::where('ville',$data['ville'])->get();
                    $avocats = $avocats_profile->intersect($avocats_competence->intersect($avocats_ville) );
                    return view('Vitrine.avocats',['avocats' => $avocats]);
                }
                else {
                    $avocats = $avocats_profile->intersect($avocats_competence );
                    return view('Vitrine.avocats',['avocats' => $avocats]);
                }
            }
            else if ( isset($data['ville'])) {
                $avocats_ville = Avocat::where('ville',$data['ville'])->get();
                $avocats = $avocats_profile->intersect($avocats_ville);
                return view('Vitrine.avocats',['avocats' => $avocats]);
            }
            else return view('Vitrine.avocats',['avocats' => $avocats_profile]);
        }
        else if ( isset($data['ville'])) {
            $avocats_ville = Avocat::where('ville',$data['ville'])->get();
            return view('Vitrine.avocats',['avocats' => $avocats_ville]);
        } 
        else {
            $avocats = Avocat::all();
            return view('Vitrine.avocats',['avocats' => $avocats]);
        }
        
    }

    public function register(){
        $profiles = Profile::all();
        return view('Auth.register',['profiles' => $profiles]);
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


