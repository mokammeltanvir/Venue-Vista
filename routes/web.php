<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\VenueController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TestimonialController;

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
// * Frontend Routes */
Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/venue-list', function () {
    return view('frontend.pages.venue-list');
});
Route::get('/venue-details', function () {
    return view('frontend.pages.venue-details');
});

/*Admin Auth routes */
Route::prefix('admin/')->group(function(){
    Route::get('login', [LoginController::class, 'loginPage'])->name('admin.loginpage');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');


    Route::middleware(['auth'])->group(function(){
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    });

    // * Resource Controller */
    Route::resource('location', LocationController::class);
    Route::resource('venue', VenueController::class);
    Route::resource('testimonial', TestimonialController::class);




});
/*Admin Auth routes */
