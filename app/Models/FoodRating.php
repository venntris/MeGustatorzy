<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodRating extends Model
{
    use HasFactory;
    protected $table = 'food_ratings';
    protected $fillable = [
        'user_id',
        'room_id',
        'food_id',
        'rate'
    ];

    public $timestamps = false;

    public function food() {
        return $this->belongsTo(Food::class);
    }
}
