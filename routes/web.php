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
    // ROUTE
    Route::get('/start', function () {
        return view('Start.index');
    });
    Route::get('/register', function () {
        return view('Register-Log_in.register');
    });
    Route::get('/log_in', function () {
        return view('Register-Log_in.logIn');
    });
