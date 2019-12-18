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

Route::get('/', 'SiteController@home');
Route::get('/login', 'SiteController@login');
Route::post('/postlogin', 'SiteController@postLogin');
Route::get('/register', 'SiteController@register');
Route::post('/postregister', 'SiteController@postregister');
Route::get('/logout', 'SiteController@logout');

//profil
Route::get('/profil-sekolah/katasambutan', 'ProfilSekolahController@kata_sambutan');
Route::get('/profil-sekolah/sejarah', 'ProfilSekolahController@sejarah');
Route::get('/profil-sekolah/visi-misi', 'ProfilSekolahController@visi_misi');
//informasi
Route::get('/informasi', 'SiteInformasiController@index');
Route::get('/informasi/berita', 'SiteInformasiController@berita');
Route::get('/informasi/pengumuman', 'SiteInformasiController@pengumuman');
Route::get('/informasi/{slug}', [
    'uses' => 'SiteInformasiController@singleinformasi',
    'as' => 'site.single.informasi',
]);
//pendaftaran online
Route::get('/pendaftaran', 'SitePendaftaranController@index');

//backend
Route::get('/admin', 'AuthController@admin')->name('login');
Route::post('/admin/postlogin', 'AuthController@postlogin');
Route::get('/admin/logout', 'AuthController@logout');

Route::group(['prefix' => 'administrator', 'middleware' => ['auth', 'checkRole:Administrator']], function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('kontak', 'KontakController')->only(['edit', 'update']);
    Route::resource('staff', 'StaffController');
    Route::resource('informasi', 'InformasiController');
    Route::resource('user', 'UserController');
});
