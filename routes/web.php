<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/contact', [ContactController::class, 'index'])->name("contact");
Route::get('/news', [NewsController::class, 'index'])->name("news");
Route::get('/about', [AboutController::class, 'index'])->name("about");
Route::get('/services', [ServiceController::class, 'index'])->name("services");
Route::get('/research', [ResearchController::class, 'index'])->name("research");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
