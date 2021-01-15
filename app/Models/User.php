<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

use App\Models\UserRoom;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
    ];

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
    public function rooms()
    {
        return $this->hasManyThrough(
            Room::class,
            UserRoom::class,
            'user_id',
            'id',
            'id',
            'room_id'
        );
    }

    public function ratings() {
        return $this->hasMany(FoodRating::class)->with('food');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
