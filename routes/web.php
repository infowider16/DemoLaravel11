<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/')->namespace('App\Http\Controllers')->group(function() {
    Route::get('test', 'UserController@test')->name('test');
    Route::get('login', 'UserController@index')->name('login');
    Route::post('login', 'UserController@loginAction')->name('login');
    Route::get('login-out', 'UserController@LogOut');

    Route::prefix('/admin')->middleware(['admin-auth'])->name('admin.')->group(function() {
        Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
        Route::get('new-page', 'UserController@newPage')->name('new-page');
    });

});
