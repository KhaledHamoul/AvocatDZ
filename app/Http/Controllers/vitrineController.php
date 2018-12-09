<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Professionnel;
use App\Competence;
use App\Profile;
use App\Client;
use App\Visite;
use App\VisiteInconnu;
use App\Rdv;
use App\Announcement;
use App\Review;

class vitrineController extends Controller
{
    public function test(){
        
        return public_path();
    }
    public function index(){
        $articles = Announcement::orderBy('id','desc')->take(3)->get();
        return view('Vitrine.index')
        ->with('derniers_articles',$articles);
    }

    public function getProfessionnelsList(){
        $pros = Professionnel::all();
        return view('Vitrine.professionnels',['professionnels' => $pros ]);
    }
    
    public function getProfessionnelsListFilter(Request $data){
        
        if ( isset($data['profile'])) {
            $pro_profile = Professionnel::where('profile_id',$data['profile'])->get();
            if ( isset($data['competence'])) {
                $pros_competence = (Competence::find($data['competence']))->getProfessionnels()->get();
                if ( isset($data['ville'])) {
                    $pros_ville = Professionnel::where('ville',$data['ville'])->get();
                    $pros = $pro_profile->intersect($pros_competence->intersect($pros_ville) );
                    return view('Vitrine.professionnels',['professionnels' => $pros]);
                }
                else {
                    $pros = $pro_profile->intersect($pros_competence );
                    return view('Vitrine.professionnels',['professionnels' => $pros]);
                }
            }
            else if ( isset($data['ville'])) {
                $pros_ville = Professionnel::where('ville',$data['ville'])->get();
                $pros = $pro_profile->intersect($pros_ville);
                return view('Vitrine.professionnels',['professionnels' => $pros]);
            }
            else return view('Vitrine.professionnels',['professionnels' => $pro_profile]);
        }
        else if ( isset($data['ville'])) {
            $pros_ville = Professionnel::where('ville',$data['ville'])->get();
            return view('Vitrine.professionnels',['professionnels' => $pros_ville]);
        } 
        else {
            $pros = Professionnel::all();
            return view('Vitrine.professionnels',['professionnels' => $pros]);
        }
        
    }

    public function register(){
        $profiles = Profile::all();
        return view('Auth.register',['profiles' => $profiles]);
    }

    public function getProfessionnelInfo( $id ){
        $pros = Professionnel::find($id);
        $rdv_show = false;
        $curr_visite = null;
        $review = null;
        $has_review = false;
        $hidden = false;
        if (Auth::check()) {
            $client = Client::where('user_id',Auth::id())->get();
            if( $client->count() > 0 ){
                $rdv_show = true;
                $curr_visite = Visite::create([
                    'professionnel_id' => $id,
                    'client_id' => $client[0]->id,
                ]);
            }
            $review = Review::where('client_id',$client[0]->id)->where('professionnel_id',$id)->first();
            if($review != null){
                $has_review = true;
                $hidden = $review->hidden;
            }
        }
        else {
            VisiteInconnu::create([
                'professionnel_id' => $id,
            ]);
        }
        return view('Vitrine.professionnel_info',[
            'professionnel' => $pros,
            'rdv_show' => $rdv_show,
            'curr_visite' => $curr_visite,
            'has_review' => $has_review,
            'hidden' => $hidden,
            'review'=> $review
            ]);
    }

    public function rendezvous(Request $data){
        $client = Client::where( 'user_id' , Auth::user()->id )->first();
        Rdv::create(['reponse' => 0, 'professionnel_id' => $data['pro_id'] ,'client_id' => $client->id  ,'message' => $data['Message']]);
        return redirect()->back();
    }
}


