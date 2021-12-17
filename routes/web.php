<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ResearchTypeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReservoirController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\vendor\voyager\VoyagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/contact', [ContactController::class, 'index'])->name("contact");
Route::get('/about', [AboutController::class, 'index'])->name("about");
Route::get('/services', [ServiceController::class, 'index'])->name("services");
Route::get('/research', [ResearchController::class, 'index'])->name("research");
// Route::post('/research', [ResearchController::class, 'index'])->name("research");
//-
// Route::get('/python', [ResearchController::class, 'python'])->name("python");

Route::post('/send_application', [ContactController::class, 'send_application'])->name("send_application");

Route::get('/deposits', [DepositController::class, 'index'])->name("deposits");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/', [VoyagerController::class, 'index'])->name('voyager.dashboard');
    Route::post('/predict', [VoyagerController::class, 'predict'])->name('predict');
    Route::post('/research/store', [VoyagerController::class, 'research_store'])->name('research.store');
});
