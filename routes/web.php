<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/index',[CustomerController::class,'index']);
Route::post('/confirm',[CustomerController::class,'confirm']);
Route::post('/thanks',[CustomerController::class,'thanks']);

