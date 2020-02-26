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
Route::GET('test/users','TestController@index');

Route::GET('/','BlogController@index')->name('home');
Route::GET('absensi', function(){return View('users.user.index');})->name('absensi');
Route::GET('struktur','BlogController@index')->name('struktur');
Route::GET('sejarah', 'BlogController@index')->name('sejarah');
Route::GET('visi', 'BlogController@visi')->name('visi_misi');
Route::GET('tav', 'BlogController@tav')->name('tav');
Route::GET('tkr', 'BlogController@tkr')->name('tkr');
Route::GET('tkj', 'BlogController@tkj')->name('tkj');
Route::GET('mikrotik', 'BlogController@mikrotik')->name('mikrotik');
Route::GET('bkk', 'BlogController@bkk');
Route::GET('mpd', 'BlogController@index')->name('mpd');
Route::GET('learning', 'BlogController@index')->name('learning');
Route::GET('library', 'BlogController@index')->name('library');
Route::GET('training', 'BlogController@index')->name('training');
Route::GET('monitoring', 'BlogController@index')->name('monitoring');
Route::GET('paskibra', 'BlogController@index')->name('paskibra');
Route::GET('olahraga', 'BlogController@index')->name('olahraga');
Route::GET('pmr', 'BlogController@index')->name('pmr');
Route::GET('pramuka', 'BlogController@index')->name('pramuka');
Route::GET('tsm', 'BlogController@index')->name('tsm');
Route::GET('silat', 'BlogController@index')->name('silat');
Route::GET('seni', 'BlogController@index')->name('seni');
Route::GET('konfiden', 'BlogController@index')->name('konfiden');


// Route::GET('/', 'BlogController@index')->name('home');


Route::GET('backup/dapodik', 'BackupController@index');
Route::GET('backup/dapodik/{param}', 'BackupController@dapodik');

Route::GET('sync/dapodik/{param}','SyncController@dapodik');
Route::GET('sync/fingerprint','SyncController@finger');

Route::GET('export/{param}','ExportController@index');

Route::GET('export/fingerprint/{role}','ExportController@export_fingerprint');
Route::GET('export/fingerprint/siswa/{param}','ExportController@export_fingerprint_siswa');

Route::GET('import/{param}','ImportController@index');
Route::GET('import/fingerprint/{role}','ImportController@import_fingerprint');
Route::POST('import/fingerprint/siswa/{param}','ImportController@import_fingerprint_siswa');


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
// Route::GET('login', 'LoginController@index')->name('login');
Route::POST('/siswa', 'LoginController@login');
Route::POST('/users', 'LoginController@home');

// Cek Login yang mengarah ke http://localhost/siswa
// jika login sebagai siswa dia akan mengarah ke -> halaman siswa dengan menggunakan ID User role
Route::group(['middleware' => ['auth','checkRole:Siswa,Guru']], function(){
	Route::GET('/dashboard', 'DashboardController@dashboard');
	Route::GET('/absensi/siswa', 'AbsensiController@siswa')->name('absensiSiswa');
	Route::GET('/absensi/kalender', 'KalenderController@index');
	Route::GET('/kalender/absensi/{id}', 'KalenderController@siswa');
	Route::GET('/profile', 'DashboardController@profile')->name('profile');
	Route::POST('/alamat', 'SiswaController@update');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
	\UniSharp\LaravelFilemanager\Lfm::routes();
});

// Route::group(array('before' => 'auth'), function ()
// {
//     Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
//     Route::get('/laravel-filemanager/crop', '\UniSharp\LaravelFilemanager\Controllers\CropController@getCrop');
//     Route::get('/laravel-filemanager/cropimage', '\UniSharp\LaravelFilemanager\Controllers\CropController@getCropimage');
//     Route::get('/laravel-filemanager/cropnewimage', '\UniSharp\LaravelFilemanager\Controllers\CropController@getNewCropimage');
//     Route::get('/laravel-filemanager/delete', '\UniSharp\LaravelFilemanager\Controllers\DeleteController@getDelete');
//     Route::get('/laravel-filemanager/demo', '\UniSharp\LaravelFilemanager\Controllers\DemoController@index');
//     Route::get('/laravel-filemanager/domove', '\UniSharp\LaravelFilemanager\Controllers\ItemsController@domove');
//     Route::get('/laravel-filemanager/doresize', '\UniSharp\LaravelFilemanager\Controllers\ResizeController@performResize');
//     Route::get('/laravel-filemanager/download', '\UniSharp\LaravelFilemanager\Controllers\DownloadController@getDownload');
//     Route::get('/laravel-filemanager/errors', '\UniSharp\LaravelFilemanager\Controllers\LfmController@getErrors');
//     Route::get('/laravel-filemanager/folders', '\UniSharp\LaravelFilemanager\Controllers\FolderController@getFolders');
//     Route::get('/laravel-filemanager/jsonitems', '\UniSharp\LaravelFilemanager\Controllers\ItemsController@getItems');
//     Route::get('/laravel-filemanager/move', '\UniSharp\LaravelFilemanager\Controllers\ItemsController@move');
//     Route::get('/laravel-filemanager/newfolder', '\UniSharp\LaravelFilemanager\Controllers\FolderController@getAddfolder');
//     Route::get('/laravel-filemanager/rename', '\UniSharp\LaravelFilemanager\Controllers\RenameController@getRename');
//     Route::get('/laravel-filemanager/resize', '\UniSharp\LaravelFilemanager\Controllers\ResizeController@getResize');
//     Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
// });

Route::group(['middleware' => ['auth','checkRole:Guru']], function(){
	Route::GET('/absensi/guru', 'AbsensiController@guru')->name('absensiGuru');
	Route::GET('/verifikasi/{jobTitle}','AbsensiController@verifGuru')->name('verifikasiAbsensi');
	Route::GET('/batalVerif/{jobTitle}','AbsensiController@batalVerifGuru');
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

Route::GET('postingan', 'PostinganController@index');
Route::POST('postingan/baru', 'PostinganController@create');
Route::GET('postingan/detail/{id}', 'PostinganController@detail')->name('postingan_detail');

Route::GET('ujian','FotoUjianController@index');
Route::GET('ujian/{kelas}','FotoUjianController@kelas');

Route::POST('rename/{file}','FotoUjianController@ganti_nama');

Route::post('/upload_image', function() {
	$CKEditor = Input::get('CKEditor');
	$funcNum = Input::get('CKEditorFuncNum');
	$message = $url = '';
	if (Input::hasFile('upload')) {
		$file = Input::file('upload');
		if ($file->isValid()) {
			$filename = $file->getClientOriginalName();
			$file->move(storage_path().'/images/', $filename);
			$url = public_path() .'/images/' . $filename;
		} else {
			$message = 'An error occured while uploading the file.';
		}
	} else {
		$message = 'No file uploaded.';
	}
	return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
});

Route::POST('upload/avatar','UploadController@avatar');

//Logout
Route::GET('/logout', 'LoginController@logout')->name('logout');

Auth::routes();