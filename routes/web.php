<?php

use App\Models\Venue;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\VenueController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Backend\BookingController as BookingListController;
use App\Http\Controllers\Backend\CustomerController as BackendCustomerController;

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
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/venue', [HomeController::class, 'venuePage'])->name('venue.page');
    Route::get('/venue-details/{venue_slug}', [HomeController::class, 'venueDetails'])->name('venue.details');

//     Route::get('/venues/{venue}/book', [BookingController::class, 'create'])->name('bookings.create');
// Route::post('/venues/{venue}/book', [BookingController::class, 'store'])->name('bookings.store');

// View booking form for specific venue
Route::get('/venues/{venue}/book',[BookingController::class,'create'])->name('bookings.create');
// Store new booking
Route::post('/bookings/{venue}', [BookingController::class,'store'])->name('bookings.store');

    /*Authentication routes for Customer/Guest */
    Route::get('/register', [RegisterController::class, 'registerPage'])->name('register.page');
    Route::post('/register', [RegisterController::class, 'registerStore'])->name('register.store');
    Route::get('/login', [RegisterController::class, 'loginPage'])->name('login.page');
    Route::post('/login', [RegisterController::class, 'loginStore'])->name('login.store');

    Route::prefix('customer/')->middleware(['auth', 'is_customer'])->group(function(){
        Route::get('dashboard',[CustomerController::class, 'dashboard'])->name('customer.dashboard');
        Route::get('logout', [RegisterController::class, 'logout'])->name('customer.logout');

    });


        // SSLCOMMERZ Start

        Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay.online');

        Route::post('/success', [SslCommerzPaymentController::class, 'success']);
        Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
        Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

        //SSLCOMMERZ END


});



/*Admin Auth routes */
Route::prefix('admin/')->group(function(){
    Route::get('login', [LoginController::class, 'loginPage'])->name('admin.loginpage');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');


    Route::middleware(['auth', 'is_admin'])->group(function(){
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    // * Resource Controller */
        Route::resource('location', LocationController::class);
        Route::resource('venue', VenueController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::get('customer-list', [BackendCustomerController::class, 'index'])->name('admin.customerlist');

        Route::get('booking-list', [BookingListController::class, 'index'])->name('admin.bookinglist');
        Route::post('booking-list/{booking}/approve', [BookingListController::class, 'approve'])->name('admin.bookings.approve');
        Route::post('booking-list/{booking}/reject', [BookingListController::class, 'reject'])->name('admin.bookings.reject');

    });
});
/*Admin Auth routes */
