<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPointModel extends Model
{
    use HasFactory;

    protected $guarded = ['type'];

    public function pickupPoint()
    {
        $this->hasMany(PickupPoint::class, 'pickup_point_type', 'type');
    }
}
