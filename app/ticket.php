<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ticket
 *
 * @mixin \Eloquent
 */
class ticket extends Model
{
    protected $fillable = [
        'id', 'datum', 'preis', 'userId', 'ticketId',
    ];

    public function user(){
        return $this -> $this->belongsTo('User');
    }
    public function event(){
        return $this-> belongsTo('events');
    }
}
