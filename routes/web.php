<?php

use App\Http\Controllers\FPController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users',[FPController::class,'listusers'])->name('listusers')->middleware(['auth']);
Route::get('/addusers',[FPController::class,'addusers'])->name('addusers')->middleware(['auth']);
Route::get('/insertUser',[FPController::class,'insertUser'])->name('insertUser')->middleware(['auth']);

Route::get('/user/{id}',[FPController::class,'datauser'])->name('datauser')->middleware(['auth']);
Route::post('/update/{id}',[FPController::class,'updatedata'])->name('updatedata')->middleware(['auth']);
Route::get('/delete/{id}',[FPController::class,'delete'])->name('delete')->middleware(['auth']);

Route::get('/items',[FPController::class,'listItem'])->name('item');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

require __DIR__.'/auth.php';
