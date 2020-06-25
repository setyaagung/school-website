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
Route::get('/pendaftaran', 'SitePendaftaranController@index')->name('site.pendaftaran');
Route::get('/prosedur_pendaftaran', 'SitePendaftaranController@prosedur');
Route::get('/formulir-pendaftaran', 'SitePendaftaranController@formulir');
Route::get('/formulir-pendaftaran/{slug}/daftar', 'SitePendaftaranController@site_create_formulir')->name('site.form.create');
Route::post('/formulir-pendaftaran/{pendaftaran}/store', 'SitePendaftaranController@site_store_formulir')->name('site.form.store')->middleware('web');
Route::get('/list_pendaftar', 'SitePendaftaranController@list_pendaftar');
Route::get('/list_pendaftar/pendaftaran/{slug}', 'SitePendaftaranController@list')->name('site.list.pendaftar');
Route::get('/cari_formulir', 'SitePendaftaranController@cari_formulir');
Route::get('/cari_formulir/{formulir}/cetak_formulir', 'SitePendaftaranController@cetak')->name('site.cetak.formulir');

//backend
Route::get('/admin', 'AuthController@admin')->name('login');
Route::post('/admin/postlogin', 'AuthController@postlogin');
Route::get('/admin/logout', 'AuthController@logout');

Route::group(['prefix' => 'administrator', 'middleware' => ['auth', 'checkRole:Administrator']], function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('kontak', 'KontakController')->only(['edit', 'update']);
    Route::resource('staff', 'StaffController');
    Route::resource('informasi', 'InformasiController');
    Route::resource('pendaftaran', 'PendaftaranController');
    Route::get('/{pendaftaran}/ubahstatus', 'PendaftaranController@ubahstatus')->name('ubahstatus');
    Route::get('/pendaftaran/{pendaftaran}/formulir/create', 'PendaftaranController@create_formulir')->name('formulir.create');
    Route::post('/pendaftaran/{pendaftaran}/formulir/store', 'PendaftaranController@store_formulir')->name('formulir.store');
    Route::get('/pendaftaran/{pendaftaran}/formulir/{formulir}/edit', 'PendaftaranController@edit_formulir')->name('formulir.edit');
    Route::patch('/pendaftaran/{pendaftaran}/formulir/{formulir}/update', 'PendaftaranController@update_formulir')->name('formulir.update');
    Route::delete('/pendaftaran/{formulir}/destroy_formulir', 'PendaftaranController@destroy_formulir')->name('formulir.destroy');
    Route::get('/pendaftaran/{pendaftaran}/formulir/cetak_pendaftar', 'PendaftaranController@cetak_pendaftar')->name('pendaftaran.cetak');
    Route::get('/pendaftaran/{pendaftaran}/formulir/{formulir}/cetak_formulir', 'PendaftaranController@cetak_formulir')->name('formulir.cetak');
    Route::resource('user', 'UserController');
});
