<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Avocat;
use App\User;
use App\Domaine;
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
            'description' => $data['description'],
            'img_url' => $data['img_url'],
            'addresse' => $data['addresse'],
            'user_id' => $user->id,
            'lat' => 'lat',
            'lng' => 'lng',
            'img_url' => '/avocat_img/user.png'

        ]);

        
        foreach($data['domaine'] as $domaine){
            AvocatDomaine::create([
                'avocat_id' => (int) $avocat->id,
                'domaine_id' => (int) $domaine,
            ]);
        }

        return redirect('/');
    }
}