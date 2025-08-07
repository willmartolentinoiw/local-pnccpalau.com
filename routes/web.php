<?php

use Illuminate\Support\Facades\Route;
//use Inertia\Inertia;
use App\Http\Controllers\HomePageController;

//Route::get('/', function () {
//    return Inertia::render('welcome');
//})->name('home');

//Route::middleware(['auth', 'verified'])->group(function () {
//    Route::get('dashboard', function () {
//        return Inertia::render('dashboard');
//    })->name('dashboard');
//});

Route::get('/', HomePageController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
