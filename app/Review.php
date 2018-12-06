<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'professionnel_id', 'client_id','visite_id','avis','rate'
    ];
    


    /**
     * Return the post's author
     */
    public function professionnel()
    {
        return $this->belongsTo(Professionnel::class,'professionnel_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
    }

    public function visite()
    {
        return $this->belongsTo(Visite::class,'visite_id');
    }
}
