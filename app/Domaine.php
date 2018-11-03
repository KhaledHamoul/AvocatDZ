<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    //
    public function getAvocats()
    {
        return $this->belongsToMany('App\Avocat','avocat_domaines','domaine_id','avocat_id');
    }
}
