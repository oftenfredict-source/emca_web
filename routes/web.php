<?php

use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiryController as AdminEnquiryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [EnquiryController::class, 'store'])->name('contact.store');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/service/details', fn () => redirect()->route('services.show', 'ict-consultancy', 301))->name('service.details');
Route::get('/service/details/{slug}', function (string $slug) {
    return redirect()->route('services.show', $slug, 301);
});
Route::get('/service/{slug}', [PageController::class, 'serviceDetails'])->name('services.show');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/team/{slug}', [PageController::class, 'teamDetails'])->name('team.details');
Route::redirect('/team/details', '/team', 301);
Route::get('/team/details/{slug}', function (string $slug) {
    return redirect()->route('team.details', $slug, 301);
});
Route::redirect('/news/grid', '/news', 301);

Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{slug}', [PageController::class, 'newsDetails'])->name('news.details');

Route::redirect('/blogs', '/news', 301);
Route::get('/blogs/{slug}', function (string $slug) {
    return redirect()->route('news.details', $slug, 301);
});
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/coaching', [PageController::class, 'coaching'])->name('coaching');
Route::get('/coaching/details', [PageController::class, 'coachingDetails'])->name('coaching.details');
Route::get('/country', [PageController::class, 'country'])->name('country');
Route::get('/country/details', [PageController::class, 'countryDetails'])->name('country.details');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('/solutions/{slug}', [PageController::class, 'solution'])->name('solutions.show');

Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');

Route::get('/preview-404', function () {
    return response()->view('errors.404', [], 404);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
        Route::get('/login/verify', [AuthController::class, 'showVerifyOtp'])->name('login.verify');
        Route::post('/login/verify', [AuthController::class, 'verifyOtp'])->name('login.verify.submit');
        Route::post('/login/verify/resend', [AuthController::class, 'resendOtp'])->name('login.verify.resend');
    });

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('posts', PostController::class)->except(['show']);
        Route::resource('testimonials', TestimonialController::class)->except(['show']);
        Route::resource('team-members', TeamMemberController::class)->only(['index', 'edit', 'update']);

        Route::get('/enquiries', [AdminEnquiryController::class, 'index'])->name('enquiries.index');
        Route::get('/enquiries/{enquiry}', [AdminEnquiryController::class, 'show'])->name('enquiries.show');
        Route::put('/enquiries/{enquiry}', [AdminEnquiryController::class, 'update'])->name('enquiries.update');
        Route::delete('/enquiries/{enquiry}', [AdminEnquiryController::class, 'destroy'])->name('enquiries.destroy');

        Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
    });
});
