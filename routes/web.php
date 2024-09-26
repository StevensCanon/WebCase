<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


/* DB::listen(function($query){
    var_dump($query->sql);
}); Revisar las consultaas de nuestra aplicacion */

route::view('/', 'Home')->name('Home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    route::view('/about', 'about')->name('about');
    route::view('/contact', 'contact')->name('contact');
    route::post('/contact', [MessageController::class, 'store'])->name('messages.store');

    Route::resource('portfolio', ProjectController::class)->parameters(['portfolio' => 'project'])->names('projects');
});

Route::get('categorias/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::patch('portfolio/{project}/restore', [ProjectController::class, 'restore'])->name('projects.restore');
Route::delete('portfolio/{project}/forceDelete', [ProjectController::class, 'forceDelete'])->name('projects.forceDelete');

require __DIR__ . '/auth.php';
