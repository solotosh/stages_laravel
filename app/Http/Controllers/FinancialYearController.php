<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancialYear;
use App\Models\Stage;
use App\Models\SubCounty;
use Illuminate\Support\Facades\DB;
use App\Models\Ward;
use App\Models\Remark;
use App\Models\Feedback;
use App\Models\Department;

class FinancialYearController extends Controller
{
    
    public function show($fy, $id)
    {
        // Optionally, you can validate if the financial year matches the ID
        $financialYear = FinancialYear::findOrFail($id);

dd($financialYear);
        return view('financial_years', compact('financialYear'));
    }








}
