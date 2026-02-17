<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout.app');
// });
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');



Route::get('/merchant-accounts', function () {
    return view('merchant.merchant', [
        'title' => 'MERCHANT ACCOUNTS'
    ]);
})->name('merchant.merchant');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/page-403', function () {
    return view('error.403');
})->name('page-403');

Route::get('/page-404', function () {
    return view('error.404');
})->name('page-404');
Route::get('/page-500', function () {
    return view('error.500');
})->name('page-500');
