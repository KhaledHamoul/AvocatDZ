<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;


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
}
