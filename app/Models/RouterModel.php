<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouterModel extends Model
{
    use HasFactory;

    protected $guarded = ["routerModel"];

    public function routerCustomer()
    {
        return $this->hasMany(RouterCustomer::class, "router_customer_id", 'id');
    }
}
