<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/jkh', [IndexController::class, 'index'])->name('jkh.index');

Route::get('/jkh/rates', [IndexController::class, 'ratesIndex'])->name('ratex.index');

Route::get('/jkh/company', [IndexController::class, 'companyIndex'])->name('company.index');

Route::get('/jkh/faq', [IndexController::class, 'faqIndex'])->name('faq.index');

Route::get('/jkh/auth', [IndexController::class, 'authIndex'])->name('auth.index');

Route::get('/jkh/registration', [IndexController::class, 'registrationIndex'])->name('registration.index');
