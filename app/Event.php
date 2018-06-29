<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Event
 *
 * @property int $id
 * @property string $eventname
 * @property string $beschreibung
 * @property int $mindestalter
 * @property string $datum
 * @property string $beginn
 * @property string $ort
 * @property string $strasse
 * @property int $hausnummer
 * @property string $land
 * @property int $plz
 * @property float $preis
 * @property int $plaetze
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Artist[] $artists
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Ticket[] $tickets
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereBeginn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereBeschreibung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereDatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereEventname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereHausnummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereLand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereMindestalter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereOrt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePlaetze($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePlz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePreis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereStrasse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Event extends Model
{
    protected $fillable = [
        'id', 'datum', 'beginn', 'locationId',
    ];

    public function artists(){
        return $this->belongsToMany('App\Artist');
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
