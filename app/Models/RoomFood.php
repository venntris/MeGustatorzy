<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFood extends Model
{
    use HasFactory;
    protected $table = 'room_food';
    protected $fillable = [
        'food_id',
        'room_id'
    ];
    public $timestamps = false;
}
