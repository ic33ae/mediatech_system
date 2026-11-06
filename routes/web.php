<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/sales-orders', 'sales.sales-orders.index')
    ->name('sales-orders.index');
    
