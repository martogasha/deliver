<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin',
        'destination',
        'distance',
        'price',
        'type',
        'user_id',
        'carrier_id',
        'date',
        'time',
        'status',
        'amPm',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function carrier(){
        return $this->belongsTo(User::class);
    }
}
