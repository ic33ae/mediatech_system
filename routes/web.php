<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/commission-rules', 'commission.rules.index')
    ->name('commission-rules.index');