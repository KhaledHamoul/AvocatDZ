<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = [
        'nom', 
        'prenom', 
        'telephone',
        'adresse',
        'ville',
        'img_url',
        'addresse',
        'user_id',
    ];
}
