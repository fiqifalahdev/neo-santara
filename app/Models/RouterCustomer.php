<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouterCustomer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function routerModel()
    {
        return $this->belongsTo(RouterModel::class, 'router_model_id', 'router_model');
    }

    public function pickupPoint()
    {
        return $this->belongsTo(PickupPoint::class);
    }
}
