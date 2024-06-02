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

Route::get('/jkh/news', [IndexController::class, 'newsIndex'])->name('news.index');

Route::get('/jkh/faq', [IndexController::class, 'faqIndex'])->name('faq.index');

Route::get('/jkh/auth', [IndexController::class, 'authIndex'])->name('auth.index');

Route::post('/jkh/auth', [IndexController::class, 'authStore'])->name('auth.store');

Route::get('/jkh/logout', [IndexController::class, 'logout'])->name('auth.logout');

Route::get('/jkh/registration', [IndexController::class, 'registrationIndex'])->name('registration.index');

Route::post('/jkh/registration', [IndexController::class, 'registrationStore'])->name('registration.store');

Route::get('/jkh/profile', [IndexController::class, 'profileShow'])->name('profile.show');

Route::get('/jkh/admin', [IndexController::class, 'profileAdminShow'])->name('profileAdmin.show');

Route::post('/jkh/profile', [IndexController::class, 'messageStore'])->name('message.store');

Route::get('/jkh/profile/editinfo', [IndexController::class, 'editinfoShow'])->name('editinfo.show');

Route::post('/jkh/profile/editinfo', [IndexController::class, 'editinfoStore'])->name('editinfo.store');