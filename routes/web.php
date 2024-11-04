<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

// Route mặc định cho trang home của người dùng, yêu cầu phải đăng nhập
Route::get('/',function () {
    return view('user.common');
});

// Route::get('/', function () {
//     return view('user.home');
// })->middleware('auth');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', function() {
        return view('user.home');
    });
});

// Route group cho các route yêu cầu quyền admin
Route::group(['middleware' => 'auth.admin'], function() {
    Route::get('/admin', function() {
        return view('admin.dashboard');
    });
});

// Route cho trang login
Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route cho trang register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request'); // Hiển thị form nhập email
Route::post('/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email'); // Gửi email reset mật khẩu
Route::get('/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset'); // Hiển thị form đặt lại mật khẩu
Route::post('/reset', [ForgotPasswordController::class, 'reset'])->name('password.update'); // Xử lý cập nhật mật khẩu mới
Route::post('/', [LoginController::class, 'logout'])->name('logout');