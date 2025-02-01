<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $table = 'wards';


    public function subcounty()
    {
        return $this->belongsTo(SubCounty::class, 'sub_county_id');
    }
    public function stages()
    {
        return $this->hasMany(Stage::class, 'ward_id');
    }
}
