<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

    public function register(Request $data){
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $avocat = Admin::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'telephone' => $data['telephone'],
            'addresse' => $data['addresse'],
            'ville' => $data['ville'],
            'img_url' => $data['img_url'],
            'user_id' => $user->id,
            'img_url' => '/avocat_img/user.png'

        ]);

        Auth::login($user);

        return redirect('/Admin');
    }

    public function loginPage(){
        return view('Admin.login');
    }

    public function login(Request $data){
        $credentials = $data->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/Admin');
        }
        return redirect()->back();
    }

    public function index(){
        return view('Admin.accueil');
    }

    public function rdv(){
        return view('Admin.rdv');
    }
    public function compte(){
        return view('Admin.compte');
    }
}
