<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FPController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/addusers', function () {
//     return view('addusers');
// })->name('userList');

Route::get('/error', function () {
    return view('error');
})->name('error');

Route::get('/users',[FPController::class,'listusers'])->name('listusers');
Route::get('/addusers',[FPController::class,'addusers'])->name('addusers');  
Route::get('/insertUser',[FPController::class,'insertUser'])->name('insertUser');

Route::get('/user/{id}',[FPController::class,'datauser'])->name('datauser');  
Route::post('/update/{id}',[FPController::class,'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[FPController::class,'delete'])->name('delete');  

Route::fallback(function () {
    return redirect('error'); 
});