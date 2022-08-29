<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OltModel extends Model
{
    use HasFactory;

    protected $guarded = ['type'];

    public function olt()
    {
        $this->hasMany(Olt::class, 'olt_type', 'type');
    }
}
