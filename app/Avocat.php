<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avocat extends Model
{
    //
    protected $fillable = [
        'nom', 
        'prenom', 
        'telephone',
        'adresse',
        'description',
        'img_url',
        'addresse',
        'user_id',
        'lat',
        'lng'
    ];

    public function getDomaines()
    {
        return $this->belongsToMany('App\Domaine','avocat_domaines','avocat_id','domaine_id');
    }
}
