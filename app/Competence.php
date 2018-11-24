<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    //

    public function getAvocats()
    {
        return $this->belongsToMany('App\Avocat','avocat_competences','competence_id','avocat_id');
    }
}
