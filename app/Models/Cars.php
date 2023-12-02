<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = [
    'brand', 
    'model',
    'year_manufacture',
    'serial_number',
    'mileage',
    'fuel_type',
    'user_id',
];

    public function assignedVehicules()
    {
        return $this->hasMany(AssignedVehicules::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function carImages()
    {
        return $this->hasMany(CarsImages::class);
    }
}
