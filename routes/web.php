<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StageController;

use App\Http\Controllers\PdfDecryptController;
use App\Http\Controllers\FinancialYearController;





Route::get('/upload', [PdfDecryptController::class, 'showForm'])->name('upload.form');
Route::post('/decrypt', [PdfDecryptController::class, 'decrypt'])->name('decrypt');
Route::post('/recover-password', [PdfDecryptController::class, 'recoverPassword'])->name('recover.password');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'mainhome'])->name('mainhome');
Route::get('admin/feedback', [HomeController::class, 'Adminfeedback'])->name('adminfeedback');
Route::get('faq', [HomeController::class, 'Faq'])->name('faq');
Route::get('contact/us', [HomeController::class, 'ContactUs'])->name('contactus');

Route::get('/search-projects', [HomeController::class, 'searchStages'])->name('search.stages');





Route::get('/stages/{id}', [StageController::class, 'showByFinancialYear'])->name('stages.by.financial.year');





// FinancialYearController

Route::get('/stages/completed', [HomeController::class, 'completedStages'])->name('stagescompleted');
Route::get('/stages/in-progress', [HomeController::class, 'inProgressStages'])->name('stagesin-progress');
Route::get('/stages/pending', [HomeController::class, 'pendingStages'])->name('stagespending');

Route::get('/financial-years', [HomeController::class, 'financialYears'])->name('financial_years.index');

// Route to show details of a specific financial year
Route::get('/financial-years/{id}', [HomeController::class, 'showFinancialYear'])->name('financial_years.show');






Route::get('/all/stages', [StageController::class, 'Allstages'])->name('allstages');
Route::get('/add/stage', [StageController::class, 'create'])->name('addstage');
Route::post('/post/stage', [StageController::class, 'store'])->name('storestage');
Route::get('/get-wards/{subcountyId}', [StageController::class, 'getWards']);
Route::get('/stages/edit/{id}', [StageController::class, 'edit'])->name('edit');
Route::post('/stages/update/{id}', [StageController::class, 'update'])->name('stages.update');
Route::delete('/stages/{id}', [StageController::class, 'destroy'])->name('destroy');
Route::get('/progress/stages', [StageController::class, 'progressstages'])->name('stagesinprogress');
Route::get('/progress/edit/{id}', [StageController::class, 'progressEdit'])->name('progressedit');
Route::post('/progress/update/{id}', [StageController::class, 'progressUpdate'])->name('progressupdate');
Route::get('/progress/pending', [StageController::class, 'Pending'])->name('allpending');
Route::get('/pend/edit/{id}', [StageController::class, 'PendEdit'])->name('pendedit');
Route::post('/pend/update/{id}', [StageController::class, 'PendUpdate'])->name('pendingupdate');


Route::post('/feed/back', [StageController::class, 'FeedBack'])->name('feedbackstore');
Route::post('/remarks', [StageController::class, 'Remark'])->name('remarks.store');


Route::get('/all/feed', [StageController::class, 'AllFeed'])->name('allfeedback');
//  






Route::post('/reply/feedback/{id}', [StageController::class, 'reply'])->name('reply.feedback');

// Route for replying to remarks
Route::post('/reply/remark/{id}', [StageController::class, 'replyr'])->name('reply.remark');

