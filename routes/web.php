<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

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

// vacancy  listings
Route::get('listings', ListingController::class . '@index')->name('listings.index');
Route::get('listings/create', ListingController::class . '@create')->name('listings.create');
Route::post('listings', ListingController::class . '@store')->name('listings.store');



require __DIR__.'/auth.php';
