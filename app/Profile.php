<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    
    public function competences()
    {
        return $this->hasMany('App\Competence');
    }
}
