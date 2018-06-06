<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\location
 *
 * @mixin \Eloquent
 */
class location extends Model
{
    protected $fillable = [
        'id', 'ort', 'strasse', 'nummer', 'land', 'plz'
    ];
    public function User(){
        return $this-> belongsTo('User');
    }
    public function rechnung(){
        return $this-> belongsTo('rechnung');
    }
    public function event(){
        return $this-> hasMany('events');
    }
}
