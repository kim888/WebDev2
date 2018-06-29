<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
	class Event extends \Eloquent {}
}

namespace App{
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
	class Ticket extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $vorname
 * @property string $nachname
 * @property string $geburtsdatum
 * @property int $telefonnummer
 * @property string $ort
 * @property string $strasse
 * @property int $hausnummer
 * @property string $land
 * @property int $postleitzahl
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereGeburtsdatum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereHausnummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNachname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOrt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePostleitzahl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStrasse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTelefonnummer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereVorname($value)
 * @mixin \Eloquent
 * @property int $confirmed
 * @property string|null $confirmation_code
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereConfirmationCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereConfirmed($value)
 */
	class User extends \Eloquent {}
}

namespace App{
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
	class Artist extends \Eloquent {}
}

