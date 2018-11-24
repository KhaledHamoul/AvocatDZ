<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Avocat;
use App\User;
use App\Profile;
use App\AvocatDomaine;


class AvocatController extends Controller
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
            return redirect()->intended('/accueil_avocat');
        }
        return redirect('/login');
    }

    public function index(){
        return view('Avocat.accueil');
    }

    public function rdv(){
        return view('Avocat.rdv');
    }

    public function avis(){
        return view('Avocat.avis');
    }

    public function visistes(){
        return view('Avocat.visistes');
    }

    public function articles(){
        return view('Avocat.articles');
    }

    public function compte(){
        return view('Avocat.compte');
    }


}