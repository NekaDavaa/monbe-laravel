<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['car_name'];
    public function registrationNumber()
    {
        return $this->hasOne(RegistrationNumber::class);
    }
    public function drivers(){
        return $this->hasMany(Driver::class);
    }
}
