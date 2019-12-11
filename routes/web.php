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

Route::get('/', 'HomeController@index');
//profil
Route::get('/profil-sekolah/katasambutan', 'ProfilSekolahController@kata_sambutan');
Route::get('/profil-sekolah/sejarah', 'ProfilSekolahController@sejarah');
Route::get('/profil-sekolah/visi-misi', 'ProfilSekolahController@visi_misi');
//informasi
Route::get('/informasi', 'SiteInformasiController@index');
Route::get('/informasi/{slug}', [
    'uses' => 'SiteInformasiController@singleinformasi',
    'as' => 'site.single.informasi',
]);

//backend
Route::get('/admin', 'AuthController@admin')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['prefix' => 'administrator', 'middleware' => ['auth', 'checkRole:Administrator']], function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('kontak', 'KontakController')->only(['edit', 'update']);
    Route::resource('staff', 'StaffController');
    Route::resource('informasi', 'InformasiController');
    Route::resource('user', 'UserController');
});
