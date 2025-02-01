<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $guarded=[];    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    public function remarks()
    {
        return $this->hasMany(Remark::class);
    }

    public function subcounty()
    {
        return $this->belongsTo(SubCounty::class, 'subcounty_id'); // Correct the foreign key
    }
    
    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id'); // Correct the foreign key
    }
    


    public function financialYear()
    {
        return $this->belongsTo(FinancialYear::class, 'financial_year_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }


}
