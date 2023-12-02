<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsImages extends Model
{
    use HasFactory;
    protected $fillable = ['photo','car_id'];

    public function car()
    {
        return $this->belongsTo(Cars::class);
    }
}
