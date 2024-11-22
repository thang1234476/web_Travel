<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\TourController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\BookingTourController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LocationsController;
use App\Http\Controllers\Admin\ToursController;


// Route mặc định cho trang home của người dùng, yêu cầu phải đăng nhập
Route::get('/', [TourController::class, 'index'])->name('common');
Route::get('/tour', [TourController::class, 'index'])->defaults('view', 'user.tour')->name('guest.tour');


// Route::get('/', function () {
//     return view('user.home');
// })->middleware('auth');
Route::group(['prefix' => 'home', 'middleware' => 'auth'], function () {
    Route::get('/', [TourController::class, 'index'])->name('home');
    Route::get('/tour', [TourController::class, 'index'])->defaults('view', 'user.tour')->name('user.tour');
});

// Route group cho các route yêu cầu quyền admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin', 'namespace' => 'Admin', 'name' => 'admin.'], function () {
    // routes/web.php
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    /* Account Routing */
    Route::get('/account', [AccountController::class, 'index'])->name('list_taikhoan');
    Route::get('/edit_account', [AccountController::class, 'show_edit_taikhoan'])->name('edit_taikhoan');
    Route::get('/edit_account/{id}', [AccountController::class, 'edit'])->name('edit_taikhoan');
    Route::put('/edit_account/{id}', [AccountController::class, 'update'])->name('edit_taikhoan_post');
    Route::delete('/delete_account/{id}', [AccountController::class, 'delete_account'])->name('delete_account');

    /* Booking Tour Routing */
    Route::get('/bills', [BookingTourController::class, 'index'])->name('list_booking');
    Route::get('/detail_booking', [BookingTourController::class, 'detail_booking'])->name('detail_booking');
    Route::delete('/delete_bill/{ma_dat_tour}', [BookingTourController::class, 'delete_bill'])->name('delete_bill');

    /* Locations Routing */
    Route::get('/locations', [LocationsController::class, 'index'])->name('list_diadiem');
    Route::get('/add_locations', [LocationsController::class, 'show_add_diadiem'])->name('add_diadiem');
    Route::post('/add_diadiem_post', [LocationsController::class, 'add_diadiem'])->name('add_diadiem_post');
    Route::get('/edit_location/{ma_dia_diem}', [LocationsController::class, 'edit'])->name('edit_diadiem');
    Route::put('/edit_location/{ma_dia_diem}', [LocationsController::class, 'update'])->name('edit_diadiem_post');
    Route::delete('/delete_locations/{ma_dia_diem}', [LocationsController::class, 'delete_locations'])->name('delete_locations');

    /* Tours Routing */
    Route::get('/tours', [ToursController::class, 'index'])->name('list_tour');
    Route::get('/add_tour', [ToursController::class, 'show_add_tour'])->name('add_tour');
    Route::post('/add_tour_post', [ToursController::class, 'add_tour'])->name('add_tour_post');
    Route::get('/edit_tour/{ma_tour}', [ToursController::class, 'edit'])->name('edit_tour');
    Route::put('/edit_tour/{ma_tour}', [ToursController::class, 'update'])->name('edit_tour_post');
    Route::delete('/delete_tour/{ma_tour}', [ToursController::class, 'delete_tour'])->name('delete_tour');
    Route::get('/search-tour', [ToursController::class, 'searchTours'])->name('search_tours');

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
