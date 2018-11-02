<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvocatDomaine extends Model
{
    //
    protected $fillable = [
        'avocat_id',
        'domaine_id'
    ];
}
