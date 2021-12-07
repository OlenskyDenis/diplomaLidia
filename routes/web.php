<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/contact', [ContactsController::class, 'index'])->name("contact");
Route::get('/news', [NewsController::class, 'index'])->name("news");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
