<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;
use App\Models\SubCounty;
use Illuminate\Support\Facades\DB;
use App\Models\Ward;
use App\Models\Remark;
use App\Models\FeedBack;
use App\Models\Department;
use App\Models\FinancialYear;
class HomeController extends Controller
{// app/Http/Controllers/YourController.php

public function index()
{
    $financialYears = FinancialYear::all();
    // Fetch stages with relationships
    $stages = Stage::with(['subcounty', 'ward', 'financialYear', 'department'])
        ->where('status', 'completed')
        ->latest()
        ->get();

    $totalStages = Stage::count();
    $totalAmount = Stage::sum('amount');
    $completedStages = Stage::where('status', 'completed')->count();
    $completedAmount = Stage::where('status', 'completed')->sum('amount');
    $inProgressStages = Stage::where('status', 'in-progress')->count();
    $inProgressAmount = Stage::where('status', 'in-progress')->sum('amount');
    $pendingStages = Stage::where('status', 'pending')->count();
    $pendingAmount = Stage::where('status', 'pending')->sum('amount');

    return view('home.master', compact(
        'stages',
        'totalStages',
        'totalAmount',
        'completedStages',
        'completedAmount',
        'inProgressStages',
        'inProgressAmount',
        'pendingStages',
        'pendingAmount',
        'financialYears'
    ));
}







public function financialYears()
{
    // Fetch all financial years
    $financialYears = FinancialYear::all();
    return view('home.financial_years', compact('financialYears'));
}

public function showFinancialYear($id)
{
    // Fetch the financial year by ID
    $financialYear = FinancialYear::findOrFail($id);
    // Fetch stages associated with this financial year
    $stages = Stage::with(['subcounty', 'ward', 'financialYear', 'department'])
        ->where('financial_year_id', $id)
        ->latest()
        ->get();
    
    // Calculate totals for this financial year
    $totalStages = $stages->count();
    $totalAmount = $stages->sum('amount');
    $completedStages = $stages->where('status', 'completed')->count();
    $completedAmount = $stages->where('status', 'completed')->sum('amount');
    $inProgressStages = $stages->where('status', 'in-progress')->count();
    $inProgressAmount = $stages->where('status', 'in-progress')->sum('amount');
    $pendingStages = $stages->where('status', 'pending')->count();
    $pendingAmount = $stages->where('status', 'pending')->sum('amount');
    
    return view('home.financial_years', compact(
        'financialYear',
        'stages',
        'totalStages',
        'totalAmount',
        'completedStages',
        'completedAmount',
        'inProgressStages',
        'inProgressAmount',
        'pendingStages',
        'pendingAmount'
    ));
}










    public function mainhome()
    {
        // Calculate total stages
        $totalStages = Stage::count();
        
        // Calculate total amounts
        $totalAmount = Stage::sum('amount');
        
        // Calculate totals for completed stages
        $completedStages = Stage::where('status', 'completed')->count();
        $completedAmount = Stage::where('status', 'completed')->sum('amount');
        
        // Calculate totals for in-progress stages
        $inProgressStages = Stage::where('status', 'in-progress')->count();
        $inProgressAmount = Stage::where('status', 'in-progress')->sum('amount');
        
        // Calculate totals for pending stages
        $pendingStages = Stage::where('status', 'pending')->count();
        $pendingAmount = Stage::where('status', 'pending')->sum('amount');
        
        // Fetch all stages with ward and subcounty data
        $stages = Stage::with(['ward', 'subcounty'])->get();
    //dd($stages);

        return view('home.home', compact(
            'totalStages',
            'totalAmount',
            'completedStages',
            'completedAmount',
            'inProgressStages',
            'inProgressAmount',
            'pendingStages',
            'pendingAmount',
            'stages'
        ));
    }

    public function completedStages()
    {
        //$stages = Stage::where('status', 'completed')->latest()->get();
        $stages = Stage::with(['subcounty', 'ward','financialYear'])->where('status', 'completed')->latest()->get();
        //dd($stages->toArray());

        //dd($stages);
        return view('home.completed', compact('stages'));

      
    }

    public function inProgressStages()
    {
        $stages = Stage::where('status', 'in-progress')->latest()->get();
        return view('home.inprogress', compact('stages'));
    }

    public function pendingStages()
    {
        $stages = Stage::where('status', 'pending')->latest()->get();
        return view('home.pending', compact('stages'));
    }

    public function Adminfeedback()
    {
        // Fetch all feedback with their replies and related project details
        $feedback = FeedBack::with([
            'stage.ward',
            'stage.subcounty',
            'stage.financialYear',
            'stage.department'
        ])->get();
    
        // Fetch all remarks with their replies and related project details
        $remarks = Remark::with([
            'stage.ward',
            'stage.subcounty',
            'stage.financialYear',
            'stage.department'
        ])->get();
    
        // Pass the data to the view
        return view('home.adminfeed', [
            'feedback' => $feedback,
            'remarks' => $remarks,
        ]);
    }

public function Faq(){
    //dd('Faq');

    return view('home.faq');

}



//

public function ContactUs(){
    //dd('Faq');

    return view('home.contact');

}





}
