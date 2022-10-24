<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use Resources\views\images\front_pic;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resource('rooms',RoomController::class);
require __DIR__.'/auth.php';

Route::resource('customers',CustomerController::class);

Route::resource('bookings',BookingController::class); 
Route::resource('payments', PaymentController::class);