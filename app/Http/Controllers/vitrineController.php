<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avocat;
use App\Domaine;

class vitrineController extends Controller
{
    public function index(){
        return view('Vitrine.index');
    }

    public function getAvocatsList(){
        $avocats = Avocat::all();
        return view('Vitrine.avocats',['avocats' => $avocats]);
    }

    public function register(){
        $domaines = Domaine::all();
        return view('auth.register',['domaines' => $domaines]);
    }
}


