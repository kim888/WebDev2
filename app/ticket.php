<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ticket
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $bezahlt
 * @property string $kaufdatum
 * @property int|null $user_id
 * @property int|null $event_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereBezahlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereKaufdatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereUserId($value)
 */
class Ticket extends Model
{
    protected $fillable = [
        'id', 'datum', 'preis', 'userId', 'ticketId',
    ];

    public function user(){
        return $this -> belongsTo(User::class);
    }
    public function event(){
        return $this-> belongsTo(Event::class);
    }
}
