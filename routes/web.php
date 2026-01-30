<?php
use App\Http\Controllers\AccessVerificationController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
 
Route::post('/AccessVerification/save', [AccessVerificationController::class, 'save'])->name('AccessVerification.save');
Route::get('/AccessVerification', [AccessVerificationController::class, 'showForm'])->name('AccessVerification');
Route::get('/thankyoupage', function () {return view('thankyoupage');});
Route::get('/Form', function () {return view('Form');});
Route::get('/', function () {return view('index');});

