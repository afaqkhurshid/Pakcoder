<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ServiceDetailsrController;

// Auth routes
require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.list');
// Route::get('/portfolio/{id}', [PortfolioController::class, 'index'])->name('portfolio.id');
Route::get('/portfolio/{slug?}/{id?}', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/page-not-found', [ErrorController::class, 'index'])->name('page-not-found');
Route::get('/service-details', [ServiceDetailsrController::class, 'index'])->name('service-details');
Route::get('/terms-conditions', [TermsConditionController::class, 'index'])->name('terms-conditions');

// Static pages
Route::get('/privacy-policy', function () {return view('privacy');});
Route::get('/terms-conditions', function () {return view('terms');});
Route::post('/forms/contact', [ContactController::class, 'store'])->name('contact.submit');

// Language switcher
Route::get('/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
})->name('lang.switch');

Route::get('/run-migrations', function () {Artisan::call('migrate', ['--force' => true]);return 'Migration completed: ' . Artisan::output();});
Route::get('/run-optimize', function () {Artisan::call('optimize');return 'Optimization completed: ' . Artisan::output();});
Route::get('/clear-cache', function() {Artisan::call('cache:clear');return 'Application cache cleared!';});
Route::get('/route-clear', function() {Artisan::call('route:clear');return 'Route cache cleared!';});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/create', [ProjectController::class, 'create'])->name('admin.create');
    Route::post('/store', [ProjectController::class, 'store'])->name('admin.store');
});