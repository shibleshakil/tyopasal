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

        // vendor form
        Route::get('/vendor-create', 'App\Http\Controllers\Back\AccountController@createVendor')->name('createVendor');
        Route::post('/vendor-create', 'App\Http\Controllers\Back\AccountController@storeVendor')->name('storeVendor');
        //------------ DASHBOARD & PROFILE ------------
        Route::get('/', 'App\Http\Controllers\Back\AccountController@index')->name('back.dashboard');
        Route::get('/profile', 'App\Http\Controllers\Back\AccountController@profileForm')->name('back.profile');
        Route::post('/profile/update', 'App\Http\Controllers\Back\AccountController@updateProfile')->name('back.profile.update');
        Route::get('/password', 'App\Http\Controllers\Back\AccountController@passwordResetForm')->name('back.password');
        Route::post('/password/update', 'App\Http\Controllers\Back\AccountController@updatePassword')->name('back.password.update');

        //------------ SETTING ------------
        Route::get('/setting/menu', 'App\Http\Controllers\Back\SettingController@menu')->name('back.setting.menu');
        Route::get('/setting/social', 'App\Http\Controllers\Back\SettingController@social')->name('back.setting.social');
        Route::get('/setting/system', 'App\Http\Controllers\Back\SettingController@system')->name('back.setting.system');
        Route::post('/setting/update', 'App\Http\Controllers\Back\SettingController@update')->name('back.setting.update');
        Route::post('/setting/update/visiable', 'App\Http\Controllers\Back\SettingController@visiable')->name('back.setting.visible.update');
        Route::get('/announcement', 'App\Http\Controllers\Back\SettingController@announcement')->name('back.subscribers.announcement');
        Route::get('/cookie/alert', 'App\Http\Controllers\Back\SettingController@cookie')->name('back.cookie.alert');
        Route::get('/maintainance', 'App\Http\Controllers\Back\SettingController@maintainance')->name('back.setting.maintainance');
        
        //------------ EMAIL TEMPLATE ------------
        Route::get('/setting/email', 'App\Http\Controllers\Back\EmailSettingController@email')->name('back.setting.email');
        Route::post('/setting/email/update', 'App\Http\Controllers\Back\EmailSettingController@emailUpdate')->name('back.email.update');
        Route::get('email/template/{template}/edit', 'App\Http\Controllers\Back\EmailSettingController@edit')->name('back.template.edit');
        Route::put('email/template/update/{template}', 'App\Http\Controllers\Back\EmailSettingController@update')->name('back.template.update');
        
        // bulk delete
        Route::get('bulk/deletes', 'App\Http\Controllers\Back\BulkDeleteController@bulkDelete')->name('back.bulk.delete');
        // Route::group(['middleware' => 'permissions:Manage Categories'], function () {
            //------------ CATEGORY ------------
            Route::get('category/status/{id}/{status}', 'App\Http\Controllers\Back\CategoryController@status')->name('back.category.status');
            Route::get('category/feature/{id}/{status}', 'App\Http\Controllers\Back\CategoryController@feature')->name('back.category.feature');
            Route::resource('category', 'App\Http\Controllers\Back\CategoryController', ['as' => 'back', 'except' => 'show']);

            //------------ SUB CATEGORY ------------
            Route::get('subcategory/status/{id}/{status}', 'App\Http\Controllers\Back\SubCategoryController@status')->name('back.subcategory.status');
            Route::resource('subcategory', 'App\Http\Controllers\Back\SubCategoryController', ['as' => 'back', 'except' => 'show']);

            //------------ CHILD CATEGORY ------------
            Route::get('childcategory/status/{id}/{status}', 'App\Http\Controllers\Back\ChildCategoryController@status')->name('back.childcategory.status');
            Route::resource('childcategory', 'App\Http\Controllers\Back\ChildCategoryController', ['as' => 'back', 'except' => 'show']);
        // });

        // Route::group(['middleware' => 'permissions:Manage Products'], function () {
            //------------ BRAND ------------
            Route::get('brand/status/{id}/{status}/{type}', 'App\Http\Controllers\Back\BrandController@status')->name('back.brand.status');
            Route::resource('brand', 'App\Http\Controllers\Back\BrandController', ['as' => 'back', 'except' => 'show']);
        // });

        
        // Route::group(['middleware' => 'permissions:Manage Faqs Contents'], function () {

            //------------ FAQ CATEGORY ------------
            Route::get('faq-category/status/{id}/{status}', 'App\Http\Controllers\Back\FcategoryController@status')->name('back.fcategory.status');
            Route::resource('fcategory', 'App\Http\Controllers\Back\FcategoryController', ['as' => 'back', 'except' => 'show']);

            //------------ FAQ ------------
            Route::resource('faq', 'App\Http\Controllers\Back\FaqController', ['as' => 'back', 'except' => 'show']);
        // });

        // Route::group(['middleware' => 'permissions:Manage Blogs'], function () {
            //------------ CATEGORY ------------
            Route::get('bcategory/status/{id}/{status}', 'App\Http\Controllers\Back\BcategoryController@status')->name('back.bcategory.status');
            Route::resource('bcategory', 'App\Http\Controllers\Back\BcategoryController', ['as' => 'back', 'except' => 'show']);

            //------------ POST ------------
            Route::resource('post', 'App\Http\Controllers\Back\PostController', ['as' => 'back', 'except' => 'show']);
            Route::delete('post/delete/{key}/{id}', 'App\Http\Controllers\Back\PostController@delete')->name('back.post.photo.delete');
            
        // });
        // Route::group(['middleware' => 'permissions:Manages Pages'], function () {

            //------------ PAGE ------------
            Route::get('page/pos/{id}/{pos}', 'App\Http\Controllers\Back\PageController@pos')->name('back.page.pos');
            Route::resource('page', 'App\Http\Controllers\Back\PageController', ['as' => 'back', 'except' => 'show']);
        // });
        //common
        Route::get('get/subcategory', 'App\Http\Controllers\Back\CommonController@getsubCategory')->name('back.get.subcategory');
        
    });
});