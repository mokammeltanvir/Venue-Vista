<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\VenueController;
use App\Http\Controllers\Frontend\HomeController;
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
Route::prefix('')->group(function(){
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/venue', [HomeController::class, 'venuePage'])->name('venue.page');
    Route::get('/venue-details/{venue_slug}', [HomeController::class, 'venueDetails'])->name('venue.details');

    Route::get('/about', function () {
        return view('frontend.pages.about');
    });
    Route::get('/contact', function () {
        return view('frontend.pages.contact');
    });
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
