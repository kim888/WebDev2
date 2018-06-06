<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\konzert
 *
 * @mixin \Eloquent
 */
class konzert extends Model
{
    protected $fillable = [
        'id', 'name', 'beschreibung', 'eventdatum', 'updatedatum', 'locationId' ,'kuenstler', 'eventId'
    ];
}
