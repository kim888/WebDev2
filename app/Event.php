<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'id', 'datum', 'beginn', 'locationId',
    ];

    public function Artist(){
        return $this->belongsToMany('artists');
    }
    public function location(){
        return $this-> belongsTo('location');
    }
    public function ticket(){
        return $this->hasMany('ticket');
    }
}
