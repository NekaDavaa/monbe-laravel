<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Window extends Model
{
    use HasFactory;
    protected $fillable = ['window_name'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
