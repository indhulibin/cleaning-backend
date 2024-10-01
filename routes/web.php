<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

/* Front */

//HomeController
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/booking',[HomeController::class,'booking'])->name('booking');
Route::post('/booking/submit',[HomeController::class,'bookingSubmission'])->name('bookingSubmission');
Route::post('/api/fetch-time',[HomeController::class,'get_time']);

