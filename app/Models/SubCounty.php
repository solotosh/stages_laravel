<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }


    public function stages()
    {
        return $this->hasMany(Stage::class, 'subcounty_id');
    }


}
