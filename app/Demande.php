<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Demande extends Model
{
    protected $fillable = [
        'nom', 
        'prenom', 
        'email',
        'telephone',
        'remarque',
        'carte_identite',
        'recu',
    ];
}
