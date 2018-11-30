<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    //
    protected $fillable = [
        'profile_id',
    ];

    public function getProfessionnels()
    {
        return $this->belongsToMany('App\Professionnel','professionnels_competences','competence_id','professionnel_id');
    }
    public function profileId(){
        return $this->belongsTo('App\Profile','profile_id');
    }
}
