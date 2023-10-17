<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Route::post('/CreatePost', [NewsController::class,'createPost'])->name('CreatePost');
Route::get('/adminlogin', function () {
    return view('adminLogin');
});
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/', function () {
    return view('homepage');
})->name('home');
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



Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/Adminlogin', [AdminController::class, 'login'])->name('Adminlogin');
Route::post('/registration', [RegistrationController::class, 'registration'])->name('registration');



// Route::get('/registration', [RegistrationController::class, 'create'])->name('registration');
Route::post('/registration/store', [RegistrationController::class, 'store'])->name('store');






Route::get('/sendAPI', function () {
    return ('Send API');
});
Route::get('/getAPI', function () {
    return ('got ');
});




