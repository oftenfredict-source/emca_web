<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/service/details', fn () => redirect()->route('services.show', 'ict-consultancy'))->name('service.details');
Route::get('/service/details/{slug}', [PageController::class, 'serviceDetails'])->name('services.show');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/team/details', [PageController::class, 'teamDetails'])->name('team.details');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/grid', [PageController::class, 'newsGrid'])->name('news.grid');
Route::get('/news/details', [PageController::class, 'newsDetails'])->name('news.details');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/coaching', [PageController::class, 'coaching'])->name('coaching');
Route::get('/coaching/details', [PageController::class, 'coachingDetails'])->name('coaching.details');
Route::get('/country', [PageController::class, 'country'])->name('country');
Route::get('/country/details', [PageController::class, 'countryDetails'])->name('country.details');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('/solutions/{slug}', [PageController::class, 'solution'])->name('solutions.show');

Route::get('/preview-404', function () {
    return response()->view('errors.404', [], 404);
});
