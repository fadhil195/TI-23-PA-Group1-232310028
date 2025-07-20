<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */


// Route::get('/home', [HomeController:: class, 'index'])->name('home');


// Route::get('/calculate', function () {
//     return view('main.calculate');
// });

// Route::get('/paydayloan', function () {
//     return view('main.paydayloan');
// });

// Route::get('/moredetails/{id}', function () {
//     return view('main.moredetails');
// });

// Route::get('/paydaydetails', function () {
//     return view('main.paydaydetails');
// });

// Route::get('/history', function () {
//     return view('main.history');
// });

 
use App\Http\Controllers\LoanProviderController;
use App\Http\Controllers\LoanApplicationController;
use App\Http\Controllers\AuthController;

Route::middleware('auth')->group(function () {
    Route::get('/home', [LoanProviderController::class, 'index']);
    Route::get('/loanproviders/{id}', [LoanProviderController::class, 'show']);
    Route::get('/calculate/{id}', [LoanApplicationController::class, 'calculate'])->name('loanapplication.calculate');
    Route::post('/calculate', [LoanApplicationController::class, 'store'])->name('loanapplication.store');
    Route::get('/paydayloan', function () { return view('main.paydayloan'); });
    Route::get('/moredetails', function () { return view('main.moredetails'); });
    Route::get('/paydaydetails', function () { return view('main.paydaydetails'); });
    Route::get('/history', [LoanApplicationController::class, 'history'])->middleware('auth');
});

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/signin', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'showRegister']);
Route::post('/signup', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');