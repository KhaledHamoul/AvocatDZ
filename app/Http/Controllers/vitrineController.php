<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vitrineController extends Controller
{
    public function index(){
        return view('Vitrine.index');
    }
}
