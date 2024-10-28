<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('user.home');
    });
    Route::group(['middleware' => 'auth.admin'], function() {
        Route::get('/admin', function() {
            return view('admin.dashboard');
        });
    });
});
Route::get('/login',[LoginController::class, 'showForm'])->name('login');
Route::post('/login',[LoginController::class, 'login']);