<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;


Route::view('/','welcome');

Route::get('/sendmail', [SendMailController::class, 'create'])->name('sendmail.create');

Route::post('/sendmail', [SendMailController::class, 'store'])->name('sendmail.store');


Route::view('privacidade', 'privacidade');