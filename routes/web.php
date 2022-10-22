<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/landing_1', function () {
    return view('landing_1');
});

Route::get('/gate_pass_form', function () {
    return view('gate_pass_form');
});

Route::get('/lost_found_form', function () {
    return view('lost_found_form');
});

Route::get('/login_form', function () {
    return view('login_form');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/Scanner', function () {
    return view('Scanner');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/admin', function () {
    return view('admin');
});