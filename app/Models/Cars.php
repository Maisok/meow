<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [
        'mark',
        'model',
        'year',
        'vin',
        'color',
        'mileage',
        'price',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'model_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
