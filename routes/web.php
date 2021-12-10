<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/index',[CustomerController::class,'index']);
Route::post('/confirm',[CustomerController::class,'confirm']);
Route::post('/thanks',[CustomerController::class,'thanks']);
Route::get('/seek',[CustomerController::class,'seek']);
Route::get('/find',[CustomerController::class,'find'])->name('find');
Route::post('/find',[CustomerController::class,'search']);
Route::post('/delete/{id}', [CustomerController::class, 'delete'])->name('delete');
