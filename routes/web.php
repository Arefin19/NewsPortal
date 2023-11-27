<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserDeviceAPIController;

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/category', 'CategoryController@category')->name('home.category');
    Route::get('/contactus', 'ContactController@contact')->name('home.contact');
    Route::get('/admin-login', 'AdminController@getlogin')->name('admin.login');
    Route::post('/admin-login', 'AdminController@login')->name('admin.check');
    Route::post('/admin-login', 'AdminController@conf')->name('admin.conf');
    Route::get('/admin', 'AdminController@show')->name('admin.show');
    Route::post('/admin', 'AdminController@createPost')->name('admin.post');
    Route::get('/news', 'NewsController@news')->name('home.news');
    Route::get('post/{id}', 'PostController@show')->name('post.show');
    Route::post('postLike/{id}', 'PostController@setLike')->name('posts.like');
    Route::post('postRemove/{id}', 'PostController@removeLike')->name('post.removeLike');
    Route::get('/sports', 'CategoryController@sports')->name('home.sports');
    Route::get('/business', 'CategoryController@business')->name('home.business');
    Route::get('/fashion', 'CategoryController@fashion')->name('home.fashion');
    Route::get('/politics', 'CategoryController@politics')->name('home.politics');
    Route::get('/tech', 'CategoryController@tech')->name('home.tech');
    Route::get('/world', 'CategoryController@world')->name('home.world');
    Route::get('/media', 'CategoryController@media')->name('home.media');
    Route::get('send-mail', 'MailController@index')->name('user.mail');

    Route::group(['middleware' => ['guest']], function () {
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::post('/store-token', 'NotificationSendController@updateDeviceToken')->name('store.token');
        Route::post('/send-web-notification', 'NotificationSendController@sendNotification')->name('send.web-notification');
        Route::get('/profile/{id}', 'ProfileController@profile')->name('home.profile');
        Route::post('/profile/{id}', 'ProfileController@edit')->name('profile.edit');
        Route::post('/profileDp', 'ProfileController@changeDp')->name('profile.dp');
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
