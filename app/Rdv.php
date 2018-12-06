<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    //
    protected $fillable = [
        'reponse', 
        'professionnel_id',
        'client_id',
        'message' 
    ];

    public function client(){
        return $this->belongsTo('App\Client', 'client_id');
    }
}
