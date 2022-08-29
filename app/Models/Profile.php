<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\PackageManifest;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pppAccount()
    {
        return $this->hasMany(PppAccount::class, "profile_id", 'id');
    }
}
