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
// eksperiment
//
// Route untuk Halaman Awal
Route::GET('/', 'BlogController@index')->name('home');
Route::GET('test', function(){
	return view('blog.test');
});
Route::GET('/sejarah', 'BlogController@sejarah');
Route::GET('/visi', 'BlogController@visi');
Route::GET('/tav', 'BlogController@tav');
Route::GET('/tkr', 'BlogController@tkr');
Route::GET('/tkj', 'BlogController@tkj');
Route::GET('/mikrotik', 'BlogController@mikrotik');
Route::GET('/bkk', 'BlogController@mikrotik');
	// route lokasi
Route::GET('/provinsi', 'WilayahController@provinsi');
Route::GET('/kabupaten', 'WilayahController@kabupaten');
Route::GET('/kecamatan', 'WilayahController@kecamatan');
Route::GET('/desa', 'WilayahController@desa');

// route untuk CRUD Siswa
// Registrasi Siswa ke Siswa Controller
Route::POST('register/', 'SiswaController@create');
Route::POST('register/ortu', 'OrtuController@create');
Route::POST('register/guru', 'GuruController@create');
Route::POST('register/alumni', 'AlumniController@create');

Route::GET('verifEmail','MailController@verifEmail')->name('verifyEmail');
Route::GET('verify/{email}/{verifyToken}','MailController@KirimEmailSukses')->name('KirimEmailSukses');
// // Membuat Data Siswa
// Route::GET('/admin_ppdb/dashboard', 'AdminPpdbController@index');

// route untuk halaman Login
// Halaman login
Route::GET('login', 'LoginController@index')->name('login');
Route::POST('/siswa', 'LoginController@login');
Route::POST('/users', 'LoginController@home');

// Cek Login yang mengarah ke http://localhost/siswa
// jika login sebagai siswa dia akan mengarah ke -> halaman siswa dengan menggunakan ID User role
Route::group(['middleware' => ['auth','checkRole:Guru,Orang Tua Siswa,Siswa,Alumni']], function(){
	Route::GET('/dashboard', 'DashboardController@dashboard');
	Route::GET('/profile', 'DashboardController@profile');

	Route::POST('/alamat', 'SiswaController@update');
});

//Logout
Route::GET('/logout', 'LoginController@logout');