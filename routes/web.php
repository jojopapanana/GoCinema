<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpcomingController;
use App\Http\Controllers\MoviesController;


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

// Route::resource('home', HomeController::class);
// Route::get('/upcoming', [UpcomingController::class, 'index'])->name('upcoming');
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/details/{id}', [DetailsController::class, 'index'])->name('details');

Route::get('movies/upcoming', [MoviesController::class, 'upcoming']);
Route::resource('movies', MoviesController::class);
Route::get('/bali', function () {
    return view('cinemas.bali');
});

// Route::view('upcoming', 'upcoming');