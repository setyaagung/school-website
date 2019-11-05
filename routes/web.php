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
//Login
Route::get('/admin', 'AuthController@admin')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'checkRole:Administrator']], function () {
    Route::get('/admin/dashboard', 'DashboardController@index');
    Route::resource('/admin/staff', 'StaffController');
    Route::resource('/admin/user', 'UserController');
    Route::resource('/admin/berita', 'BeritaController');
});
