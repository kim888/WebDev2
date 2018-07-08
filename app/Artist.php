<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Artist
 *
 * @property int $id
 * @property string $bandname
 * @property string $genre
 * @property int $locationId
 * @property string $tourdatum
 * @property string $picture
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artist whereBandname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artist whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artist whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artist wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artist whereTourdatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Artist whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 */
class Artist extends Model
{
    protected $fillable = array('id', 'bandname', 'genre', 'locationId', 'tourdatum','picture');

    //many to many relationship between artists and events
    public function events(){
        return $this->belongsToMany('App\Event');
    }

}
