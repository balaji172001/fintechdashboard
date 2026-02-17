<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout.app');
// });
Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard');


Route::get('/merchant-accounts', function () {
    return view('merchant.merchant', [
        'title' => 'MERCHANT ACCOUNTS'
    ]);
})->name('merchant.merchant');

