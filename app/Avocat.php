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
        'ville',
        'description',
        'img_url',
        'addresse',
        'user_id',
        'profile_id',
        'lat',
        'lng'
    ];

    public function getCompetences()
    {
        return $this->belongsToMany('App\Competence','avocat_competences','avocat_id','competence_id');
    }
}
