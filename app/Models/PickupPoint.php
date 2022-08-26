<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPoint extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function routerCustomer()
    {
        $this->hasMany(RouterCustomer::class);
    }

    public function pickupPointModel()
    {
        $this->belongsTo(PickupPointModel::class, 'pickup_point_type', 'type');
    }

    public function olt()
    {
        $this->belongsTo(Olt::class);
    }
}
