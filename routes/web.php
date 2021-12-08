<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/index',[CustomerController::class,'index']);
Route::post('/confirm',[CustomerController::class,'confirm']);
Route::post('/thanks',[CustomerController::class,'thanks']);
Route::get('/search',[CustomerController::class,'search']);
Route::get('/find',[CustomerController::class,'find']);
Route::post('/find',[CustomerController::class,'search']);
Route::get('/person/{person}', [CustomerController::class, 'bind']);
// Route::get('/show', [CustomerController::class, 'show']);