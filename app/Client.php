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


    public function avis(){
        return $this->hasMany(Review::class,'client_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
