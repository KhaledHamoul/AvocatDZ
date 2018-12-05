<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    //
    protected $fillable = [
        'professionnel_id', 
        'client_id', 
    ];

    public function client(){
        return $this->belongsTo('App\Client','client_id');
    }
}
