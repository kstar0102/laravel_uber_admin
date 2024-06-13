<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone_number',
        'car_type',
        'car_color',
        'car_number',
        'rating',
        'license_verification',
        'driver_photo',
        'car_photo',
        'passport_frontend',
        'passport_backend',
    ];
}
