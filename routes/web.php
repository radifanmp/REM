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

// HOME
Route::get('/', 'Frontend\HomeController@Index');
Route::get('/about', 'Frontend\HomeController@About');
Route::get('/index', 'Frontend\HomeController@Index');
Route::get('/contact', 'Frontend\HomeController@Contact');

// Login, Daftar Dan Logout
Route::post('/login','Frontend\LoginController@login');
Route::get('/logout','Frontend\LoginController@logout');
Route::post('/daftar','Frontend\LoginController@daftarAnggota');

// Profil dan Ganti Password
Route::get('/profil/edit','Frontend\ProfilController@editProfil');
Route::get('/profil','Frontend\ProfilController@index');
Route::post('/profil/edit/simpan','Frontend\ProfilController@simpanEdit');
Route::get('/profil/gantipass','Frontend\ProfilController@gantipass');

// Agama
Route::get('/agama/kategori/{nama}','Frontend\AgamaController@Kategori');



//  Backend

// Wilayah
Route::get('backend/wilayah/tambah','Backend\WilayahController@tambah');
Route::post('backend/wilayah/tambah/proses','Backend\WilayahController@simpanTambah');

// Organisasi
Route::get('org/me', 'Frontend\OrganisasiController@organSaya');
Route::get('org/add', 'Frontend\OrganisasiController@tambahOrgan');
// Route::get('org/me', 'Frontend\OrganisasiController@eventSaya');

