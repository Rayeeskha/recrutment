<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  \App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\LangController;


Route::get('/', HomeController::class)->name('home');


Route::match(['POST','GET'],'{slug}',  [HomeController::class, 'urlRouting'])->name('urlRouting');

Route::get('lang/change/{lang}', [LangController::class, 'change'])->name('changeLang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
