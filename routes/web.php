<?php

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

Route::group(['middleware' => 'adminlocalize'], function(){
    Route::prefix('admin')->group(function () {

        //------------ AUTH ------------
        Route::get('/login', 'App\Http\Controllers\Auth\Back\LoginController@showForm')->name('back.login');
        Route::post('/login-submit', 'App\Http\Controllers\Auth\Back\LoginController@login')->name('back.login.submit');
        Route::post('/logout', 'App\Http\Controllers\Auth\Back\LoginController@logout')->name('back.logout');

        //------------ FORGOT ------------
        Route::get('/forgot', 'App\Http\Controllers\Auth\Back\ForgotController@showForm')->name('back.forgot');
        Route::post('/forgot-submit', 'App\Http\Controllers\Auth\Back\ForgotController@forgot')->name('back.forgot.submit');
        Route::get('/change-password/{token}', 'App\Http\Controllers\Auth\Back\ForgotController@showChangePassForm')->name('back.change.token');
        Route::post('/change-password-submit', 'App\Http\Controllers\Auth\Back\ForgotController@changepass')->name('back.change.password');

        //------------ DASHBOARD & PROFILE ------------
        Route::get('/', 'App\Http\Controllers\Back\AccountController@index')->name('back.dashboard');
        Route::get('/profile', 'App\Http\Controllers\Back\AccountController@profileForm')->name('back.profile');
        Route::post('/profile/update', 'App\Http\Controllers\Back\AccountController@updateProfile')->name('back.profile.update');
        Route::get('/password', 'App\Http\Controllers\Back\AccountController@passwordResetForm')->name('back.password');
        Route::post('/password/update', 'App\Http\Controllers\Back\AccountController@updatePassword')->name('back.password.update');

    });
});