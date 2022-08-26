<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PppAccount extends Model
{
    use HasFactory;

    protected $guarded = ['username'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
