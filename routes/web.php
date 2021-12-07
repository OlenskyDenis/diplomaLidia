<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/contact', [ContactsController::class, 'index'])->name("contact");
