<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');


Route::prefix('admin')->group(function (){
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::resource('admin', 'Admin\AdminController');
    Route::post('changeAdminPass', 'Admin\AdminController@changePassword')->name('admin.changePassword');
    Route::DELETE('delete/{id}', 'Admin\AdminController@destroy');
    Route::post('ban/{id}', 'Admin\AdminController@ban');
    Route::get('edit/{id}', 'Admin\AdminController@editProfile')->name('admin.update.profile');


    Route::get('/users/{id}/edit', 'Admin\UserController@edit')->name('admin.users.edit');
    Route::PATCH('/users/update/{id}', 'Admin\UserController@update')->name('admin.users.update');
    Route::post('/users/change-password', 'Admin\UserController@changePassword')->name('admin.users.changePassword');
    Route::DELETE('/users/{id}', 'Admin\UserController@destroy')->name('admin.users.delete');
    Route::POST('/users/ban/{id}', 'Admin\UserController@ban')->name('admin.users.ban');
    Route::get('/users/create', 'Admin\UserController@create')->name('admin.users.create');
    Route::POST('/users/store', 'Admin\UserController@store')->name('admin.users.store');
    Route::get('/users', 'Admin\UserController@index')->name('admin.user.list');


    Route::get('/', 'Admin\AdminController@home')->name('admin.dashboard');
});