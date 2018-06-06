<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\rechnung
 *
 * @mixin \Eloquent
 */
class rechnung extends Model
{
    protected $fillable = [
        'id', 'datum', 'preis', 'userId', 'ticketId',
    ];

    public function User(){
        return $this->belongsTo('User');
    }
    public function location(){
        return $this->belongsTo('location');
    }
}
