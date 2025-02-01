<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;
use App\Models\SubCounty;
use Illuminate\Support\Facades\DB;
use App\Models\Ward;
use App\Models\Remark;
use App\Models\Feedback;
use App\Models\Department;
use App\Models\FinancialYear;
use Log;
//
class StageController extends Controller
{
    
    public function Allstages()
    {
        $stages = Stage::with(['feedback', 'remarks', 'subcounty', 'ward'])
        ->orderBy('created_at', 'desc') // Sort by latest created
        ->take(15) // Limit to the latest 5 records
        ->get();
        return view('timeline', compact('stages'));
    }
    

public function create()
{
    $subcounties = SubCounty::all();
    $department= Department::all();
    $year= FinancialYear::all();
    // Pass the sub-counties to the view
    return view('create', compact('subcounties','department','year'));
}

public function store(Request $request)
{
    //dd($request->all());
    $request->validate([
        
        'description' => 'nullable|string',
        'status' => 'required|in:completed,in-progress,pending',
        'progress' => 'required|integer|between:0,100',
        'amount' => 'required|numeric|min:0',
        'subcounty_id' => 'required|exists:sub_counties,id',  // Ensure subcounty ID exists
        'ward_id' => 'required|exists:wards,id',  // Ensure ward ID exists
'department_id' => 'required|string|max:255',
'financial_year_id' => 'required|string|max:255',
    ]);

    Stage::create([
        'name' => $request->name,
        'description' => $request->description,
        'status' => $request->status,
        'progress' => $request->progress,
        'amount' => $request->amount,
        'subcounty_id' => $request->subcounty_id,
        'ward_id' => $request->ward_id,
        'department_id' => $request->department_id,
        'financial_year_id'=> $request->department_id
    ]);

    return redirect()->route('allstages')->with('success', 'Stage created successfully.');
}


public function getWards($subcountyId)
{
    // Fetch the wards related to the sub-county
    $wards = DB::table('wards')
                ->where('sub_county_id', $subcountyId)
                ->get();

    // Return the wards as a JSON response
    return response()->json(['wards' => $wards]);
}

public function edit($id)
{
    $stage = Stage::findOrFail($id);
    $subcounties = SubCounty::all(); // Fetch all sub-counties
    $wards = Ward::all(); // Fetch all wards

    return view('edit', compact('stage', 'subcounties', 'wards'));
}

public function update(Request $request, $id)
{


    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'status' => 'required|in:completed,in-progress,pending',
        'progress' => 'required|integer|between:0,100',
        'amount' => 'required|numeric|min:0',
        'subcounty_id' => 'required|exists:sub_counties,id',  // Ensure subcounty ID exists
        'ward_id' => 'required|exists:wards,id'  // Ensure ward ID exists
    ]);

    Stage::FindOrFail($id)->update([
        'name' => $request->name,
        'description' => $request->description,
        'status' => $request->status,
        'progress' => $request->progress,
        'amount' => $request->amount,
        'subcounty_id' => $request->subcounty_id,
        'ward_id' => $request->ward_id
    ]);

   

    return redirect()->route('allstages')->with('success', 'Stage updated successfully!');
}


public function destroy($id)
{
    $stage = Stage::findOrFail($id);
    $stage->delete();

    return redirect()->route('allstages')->with('success', 'Stage deleted successfully.');
}


public function progressstages(){
   // dd('progressstages');
    $projects = Stage::where('status', 'in-progress')->get();
    return view('progress', compact('projects'));
}

public function progressEdit($id){
    $stagedit = Stage::findOrFail($id);
    return view('editprogress', compact('stagedit'));

}
public function progressUpdate(Request $request,$id){
   // dd($request->all());


    $request->validate([
       
        'progress' => 'required|integer|between:0,100',
       
    ]);

    Stage::FindOrFail($id)->update([
        
        'progress' => $request->progress,
      
    ]);

   

    return redirect()->route('stagesinprogress')->with('success', 'Stage updated successfully!');



}

public function Pending(){
    $projects = Stage::where('status', 'pending')->get();
    return view('pending', compact('projects'));
}

public function PendEdit($id){

   // dd($id);
   $stagedit = Stage::findOrFail($id);
   return view('editpend', compact('stagedit'));

}

public function PendUpdate(Request $request,$id){
    //dd($request->all());


    $request->validate([
      
        'status' => 'required|in:completed,in-progress,pending',
        'progress' => 'required|integer|between:0,100',
      
    ]);

    Stage::FindOrFail($id)->update([
      
        'status' => $request->status,
        'progress' => $request->progress,
        
    ]);

   

    return redirect()->route('allpending')->with('success', 'Stage updated successfully!');


}

public function FeedBack(Request $request)
{
    Log::info('Feedback Request Data:', $request->all());

    $validatedData = $request->validate([
        'stage_id' => 'required|integer',
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'comment' => 'required|string',
    ]);

    // Log the validated data
    Log::info('Validated Data:', $validatedData);

    // Create the feedback
    Feedback::create($validatedData);

    return redirect()->back()->with('success', 'Feedback submitted successfully!');
}







public function Remark(Request $request)
{
   // dd($request->all());
   $validatedData = $request->validate([
    'stage_id' => 'required|integer',
    'name' => 'required|string|max:255',
    'phone' => 'required|string|max:15',
    'comment' => 'required|string',
]);

Remark::create($validatedData);

return redirect()->back()->with('success', 'Remark submitted successfully!');


}


public function AllFeed()
{
    $stages = Stage::with(['feedback', 'remarks'])->get();
    return view('allfeedback', compact('stages'));
}


public function reply(Request $request, $id)
{
    $feedback = FeedBack::findOrFail($id);

    // Save the reply (you can add a 'reply' column to the feedback table)
    $feedback->reply = $request->input('reply');
    $feedback->save();

    return redirect()->back()->with('success', 'Reply submitted successfully!');
}



public function replyr(Request $request, $id)
{
    $remark = Remark::findOrFail($id);

    // Save the reply (you can add a 'reply' column to the remarks table)
    $remark->reply = $request->input('reply');
    $remark->save();

    return redirect()->back()->with('success', 'Reply submitted successfully!');
}

public function showByFinancialYear($id)
    {
        $financialYear = FinancialYear::findOrFail($id);
        $stages = Stage::where('financial_year_id', $id)->get();

       

        return view('home.financial_years', compact('financialYear', 'stages'));
    }

}
