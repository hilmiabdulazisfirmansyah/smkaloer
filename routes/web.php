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

Route::GET('backup/dapodik', 'BackupController@index');
Route::GET('backup/dapodik/{param}', 'BackupController@dapodik');

Route::GET('sync/dapodik','SyncController@dapodik');

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
Route::group(['middleware' => ['auth','checkRole:Siswa,Guru']], function(){
	Route::GET('/dashboard', 'DashboardController@dashboard');
	Route::GET('/absensi/siswa', 'AbsensiController@siswa')->name('absensiSiswa');
	Route::GET('/profile', 'DashboardController@profile');
	Route::POST('/alamat', 'SiswaController@update');
});

Route::group(['middleware' => ['auth','checkRole:Guru']], function(){
	Route::GET('/absensi/guru', 'AbsensiController@guru')->name('absensiGuru');
	Route::GET('/verifikasi','AbsensiController@verifGuru')->name('verifikasiAbsensi');
	Route::GET('/batalVerif','AbsensiController@batalVerifGuru')->name('verifikasiAbsensi');
	Route::GET('/edit/{id}', 'AbsensiController@edit');
	Route::POST('/update/kehadiran', 'AbsensiController@update');
	Route::GET('getKehadiranGuru', 'AbsensiController@getKehadiranGuru');

// Mata Pelajaran khusus job title Kurikulum
	Route::GET('rombel', 'RombelController@index');
	Route::POST('tambahRombel', 'RombelController@tambahRombel');
	Route::GET('/editRombel/{id}', 'RombelController@editRombel');
	Route::POST('/updateRombel/{id}', 'RombelController@updateRombel');
	Route::GET('/deleteRombel/{id}', 'RombelController@deleteRombel');

//Mata Pelajaran khusus job title Kurikulum
	Route::GET('/mapel', 'MapelController@index');
	Route::POST('/tambahMapel', 'MapelController@tambahMapel');
	Route::GET('/editMapel/{id}', 'MapelController@editMapel');
	Route::POST('/updateMapel/{id}', 'MapelController@updateMapel');
	Route::GET('/deleteMapel/{id}', 'MapelController@deleteMapel');

	Route::GET('jadwal', 'JadwalController@index');
	Route::GET('getJadwal/{id}', 'JadwalController@getJadwal');
	Route::POST('/tambahJadwal', 'JadwalController@tambahJadwal');
	Route::GET('/editJadwal/{id}', 'JadwalController@editJadwal');
	Route::POST('/updateJadwal/{id}', 'JadwalController@updateJadwal');
	Route::GET('/deleteJadwal/{id}', 'JadwalController@deleteJadwal');

// HRM / JobTitle
	Route::GET('jobGuru', 'jobGuruController@index');
	Route::POST('/tambahJobGuru', 'JobGuruController@tambahJobGuru');
	Route::GET('/editJobGuru/{id}', 'JobGuruController@editJobGuru');
	Route::POST('/updateJobGuru/{id}', 'JobGuruController@updateJobGuru');
	Route::GET('/deleteJobGuru/{id}', 'JobGuruController@deleteJobGuru');

// HRM Job SISWA
	Route::GET('jobSiswa', 'jobSiswaController@index');
	Route::POST('/tambahJobSiswa', 'JobSiswaController@tambahJobSiswa');
	Route::GET('/editJobSiswa/{id}', 'JobSiswaController@editJobSiswa');
	Route::POST('/updateJobSiswa/{id}', 'JobSiswaController@updateJobSiswa');
	Route::GET('/deleteJobSiswa/{id}', 'JobSiswaController@deleteJobSiswa');

	Route::GET('finger', 'FingerprintController@index');
	Route::POST('finger/getDevice', 'FingerprintController@getDevice');
	Route::POST('finger/getUser', 'FingerprintController@getUser');
	Route::POST('finger/delUser', 'FingerprintController@delUser');
	Route::POST('finger/setUser', 'FingerprintController@setUser');
	
});
	Route::GET('/chats', 'ChatsController@index');
	Route::GET('/messages', 'ChatsController@fetchMessages');
	Route::POST('/messages', 'ChatsController@sendMessage');

//Logout
Route::GET('/logout', 'LoginController@logout');