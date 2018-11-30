<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professionnel extends Model
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
        return $this->belongsToMany('App\Competence','professionnels_competences','professionnel_id','competence_id');
    }
}
