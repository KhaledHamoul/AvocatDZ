<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Client;


class ApiController extends Controller
{
    //
    public function getProfiles(){
        $profiles = Profile::all()->toJson();
        return $profiles;
    }

    public function getCompetences($id){
        $competences = Profile::find($id)->competences;
        return $competences->toJson();
    }

    public function getClient($id){
        $client = Client::find($id);
        return $client->toJson();
    }
}
