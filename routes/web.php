<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffRegisterController;
use App\Http\Controllers\StaffLoginController;


/*
|--------------------------------------------------------------------------
| PATIENT / MAIN PAGES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/find-doctors', function () {
    return view('find-doctors');
})->name('find-doctors');


Route::get('/book-token', function () {
    return view('book-token');
})->name('book-token');


Route::get('/live-status', function () {
    return view('live-status');
})->name('live-status');


/*
|--------------------------------------------------------------------------
| PATIENT LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
})->name('login');


/*
|--------------------------------------------------------------------------
| PATIENT REGISTRATION
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    return view('register');
})->name('register');


/*
|--------------------------------------------------------------------------
| PATIENT PROFILE
|--------------------------------------------------------------------------
*/

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


/*
|--------------------------------------------------------------------------
| PATIENT RECORDS
|--------------------------------------------------------------------------
*/

Route::get('/records', function () {
    return view('records');
})->name('records');


/*
|--------------------------------------------------------------------------
| STAFF LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/staff-login', [
    StaffLoginController::class,
    'showLogin'
])->name('staff-login');


Route::post('/staff-login', [
    StaffLoginController::class,
    'login'
])->name('staff-login.submit');


/*
|--------------------------------------------------------------------------
| STAFF REGISTER
|--------------------------------------------------------------------------
*/

Route::get('/staff-register', function () {
    return view('staff-register');
})->name('staff-register');


Route::post('/staff-register', [
    StaffRegisterController::class,
    'store'
])->name('staff-register.submit');


/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/*
|--------------------------------------------------------------------------
| ADMIN STAFF MANAGEMENT
|--------------------------------------------------------------------------
*/

Route::get('/admin/staff-create', function () {
    return view('admin.staff-create');
})->name('admin.staff.create');


Route::get('/admin-staff', function () {
    return view('admin-staff');
})->name('admin-staff');


/*
|--------------------------------------------------------------------------
| LANGUAGE
|--------------------------------------------------------------------------
*/

Route::get('/lang/{locale}', function ($locale) {

    if (in_array($locale, ['en', 'ur'])) {
        session(['locale' => $locale]);
    }

    return redirect()->back();

})->name('language');