<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olt extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pickupPoint()
    {
        $this->hasMany(PickupPoint::class);
    }

    public function oltType()
    {
        $this->belongsTo(OltModel::class, 'olt_type', 'type');
    }
}
