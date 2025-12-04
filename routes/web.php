<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AdminController::class,'showAdmin'])->name('admin.show');
Route::get('/user/{id}',[AdminController::class,'singleAdmin'])->name('admin.view');
Route::view('single-admin','single-admin');

Route::get('/add',[AdminController::class,'addAdmin']);

Route::get('/update',[AdminController::class,'updateAdmin']);

Route::get('/delete/{id}',[AdminController::class,'deleteAdmin'])->name('admin.delete');