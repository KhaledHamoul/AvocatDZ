<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Client;
use App\User;

class ClientController extends Controller
{
    //
    public function register(Request $data){
        $user = User::create([
            'name'     => $data['nom'] . ' ' . $data['prenom'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'provider' => $data['provider'],
            'provider_id' => $data['provider_id'],
        ]);

        Client::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'telephone' => $data['telephone'],
            'adresse' => $data['adresse'],
            'ville' => $data['ville'],
            'user_id' => $user->id,

        ]);

        session(['dashboard_path' => '/']);
        Auth::login($user);
        return redirect('/');
    }

    public function login(Request $data){
        $credentials = $data->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
        return redirect('/login');
    }

    public function index(){
        return view('Client.accueil');
    }

    public function rdv(){
        return view('Client.rdv');
    }
    public function compte(){
        return view('Client.compte');
    }
}
