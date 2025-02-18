<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialYear extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function stages()
    {
        return $this->hasMany(Stage::class);
    }

}
