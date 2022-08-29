<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function routerCustomer()
    {
        return $this->belongsTo(RouterCustomer::class);
    }

    public function PppAccount()
    {
        $this->belongsTo(PppAccount::class);
    }
}
