<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avocat;
use App\Domaine;

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
}


