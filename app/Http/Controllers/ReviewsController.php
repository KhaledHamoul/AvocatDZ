<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visite;
use App\Review;
use App\Client;
use App\Professionnel;
class ReviewsController extends Controller
{
    public function storeReview(Request $request,$visite){
        $curr_visite = Visite::find($visite);
        Review::create([
            'professionnel_id' => $curr_visite->professionnel_id,
            'client_id' => $curr_visite->client_id,
            'visite_id' => $curr_visite->id,
            'avis' => $request->avis,
            'rate' => $request->rate
        ]);
        return view('Vitrine.professionnel_info')
                ->with('has_review',true)
                ->with('professionnel',Professionnel::find($curr_visite->professionnel_id))
                ->with('client',Client::find($curr_visite->client_id))
                ->with('rdv_show',true)
                ->with('curr_visite',$curr_visite)
                ->with('review',$review);
    }


    public function updateReview(Request $request,$visite){
        $curr_visite = Visite::find($visite);
        $client = Client::find($curr_visite->client_id);
        $review = $client->avis;
        $review->avis = $request->avis;
        $review->rate = $request->rate;
        $review->visite_id = $curr_visite->id;
        $review->update();
        return view('Vitrine.professionnel_info')
                ->with('has_review',true)
                ->with('professionnel',Professionnel::find($curr_visite->professionnel_id))
                ->with('client',client)
                ->with('rdv_show',true)
                ->with('curr_visite',$curr_visite)
                ->with('review',$review);
    }
}
