<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMembers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignedVehicles()
    {
        return $this->hasMany(AssignedVehicle::class);
    }
}
