<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationNumber extends Model
{
    use HasFactory;

    protected $fillable = ['registration_number', 'car_id'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
