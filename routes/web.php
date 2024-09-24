<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

route::view('/', 'Home')->name('Home');

route::view('/about', 'about')->name('about');
route::view('/contact', 'contact')->name('contact');
route::post('/contact', [MessageController::class, 'store'])->name('messages.store');

Route::resource('portfolio', ProjectController::class)->parameters(['portfolio' => 'project'])->names('projects');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
