<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/cruise', [HomeController::class, 'cruise_listing'])->name('cruise_listing');
Route::get('/cruise-booking', [HomeController::class, 'cruise_booking'])->name('cruise_booking');
Route::get('/luxury-cruise', [HomeController::class, 'luxury_cruise'])->name('luxury_cruise');
Route::get('/adventure-cruise', [HomeController::class, 'adventure_cruise'])->name('adventure_cruise');
Route::get('/river-cruise', [HomeController::class, 'river_cruise'])->name('river_cruise');
Route::get('/family-cruise', [HomeController::class, 'family_cruise'])->name('family_cruise');
Route::get('/sailing-cruise', [HomeController::class, 'sailing_cruise'])->name('sailing_cruise');
Route::get('/world-cruise', [HomeController::class, 'world_cruise'])->name('world_cruise');
Route::get('/cruise-details', [HomeController::class, 'cruise_details'])->name('cruise_details');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::post('contact_add', [HomeController::class, 'contact_add'])->name('contact_add');
Route::post('cruise_add', [HomeController::class, 'cruise_add'])->name('cruise_add');
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms-condition', [HomeController::class, 'terms_condition'])->name('terms_condition');
Route::get('/refund-policy', [HomeController::class, 'refund_policy'])->name('refund_policy');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    Route::GET('/bookings', [AdminController::class, 'bookings'])->name('bookings');
    Route::get('/bookings/data', [AdminController::class, 'getBookingData'])->name('bookings.data');
    Route::get('/bookings/{id}', [AdminController::class, 'show']);
    Route::GET('/booking-info/{id}', [AdminController::class, 'booking_info'])->name('booking_info');
    Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('enquiries');
    Route::get('/enquiries/data', [AdminController::class, 'getEnqData'])->name('enquiries.data');
    Route::get('/enquiries/{id}', [AdminController::class, 'show_enq']);
    Route::get('/enquiry/{id}', [AdminController::class, 'enq_destroy'])->name('enquiry.destroy');
    Route::get('/company-info', [AdminController::class, 'company_info'])->name('company_info');
    Route::post('/company-info', [AdminController::class, 'company_info_update'])->name('company_info_update');
    Route::get('/seo-pages', [AdminController::class, 'seo_pages'])->name('seo_pages');
    Route::post('/seo-pages', [AdminController::class, 'seo_pages_update'])->name('seo_pages_update');
    Route::get('/change-password', [AdminController::class, 'change_password'])->name('change_password');
    Route::post('/change-password', [AdminController::class, 'update_password'])->name('update_password');
    Route::get('/admin_logout', [AdminController::class, 'admin_logout'])->name('admin_logout');
});

Route::any('{all}', [HomeController::class, 'default'])->where('all', '.*');
