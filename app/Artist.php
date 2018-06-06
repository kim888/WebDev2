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
 */
class Artist extends Model
{
    protected $fillable = array('id', 'bandname', 'genre', 'locationId', 'tourdatum','picture');

    public function event(){
        return $this->hasMany('events');
    }

}
