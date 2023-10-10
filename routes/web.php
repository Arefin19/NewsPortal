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
Route::get('/contactus', function () {
    return view('contact');
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
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});

Route::get('/api', function () {
    return view('dbconn');
});

// Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('/sendAPI', function () {
    return ('Send API');
});
Route::get('/getAPI', function () {
    return ('got ');
});




