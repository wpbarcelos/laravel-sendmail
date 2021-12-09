<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendMailController;

Route::get('/sendmail', [SendMailcontroller::class, 'create'])->name('sendmail.create');

Route::post('/sendmail', [SendMailcontroller::class, 'store'])->name('sendmail.store');
