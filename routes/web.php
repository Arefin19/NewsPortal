<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/politics', function () {
    return view('politics');
});
Route::get('/business', function () {
    return view('business');
});
Route::get('/sports', function () {
    return view('sports');
});
Route::get('/fashion', function () {
    return view('fashion');
});
Route::get('/more', function () {
    return view('more');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/service', function () {
    return view('service');
});
















Route::get('/sendAPI', function () {
    return ('Send API');
});
Route::get('/getAPI', function () {
    return ('got ');
});


//Authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


