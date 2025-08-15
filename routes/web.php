<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceDetailsrController;
use App\Http\Controllers\TermsConditionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/page-not-found', [ErrorController::class, 'index'])->name('page-not-found');
Route::get('/service-details', [ServiceDetailsrController::class, 'index'])->name('service-details');
Route::get('/terms-conditions', [TermsConditionController::class, 'index'])->name('terms-conditions');

Route::post('/forms/contact', [ContactController::class, 'store'])->name('contact.submit');