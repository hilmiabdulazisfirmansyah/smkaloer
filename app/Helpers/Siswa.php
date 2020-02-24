<?php

function grabDapo(){
	$ip_dapodik = '192.168.100.6';
	$username = 'dedeheryanto15@gmail.com';
	$password = 'Samrat235';
	$semester_id = '20192';

	$url = 'https://data.dikdasmen.kemdikbud.go.id';
	$cookie = "cookie.txt";
	if (file_exists($cookie)) {
		unlink($cookie);
	}

	$postfields = 'authuser='.$username.'&authpass='.$password;

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_COOKIEJAR => $cookie,
		CURLOPT_COOKIEFILE => $cookie,
		CURLOPT_POSTFIELDS => $postfields,
		CURLOPT_POST => 1,
		CURLOPT_REFERER => $url,
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/x-www-form-urlencoded",
			"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);
	return $response;
}

function loginDapodikSiswa(){
	$ip_dapodik = '192.168.100.6';
	$username = 'dedeheryanto15@gmail.com';
	$password = 'Samrat235';
	$semester_id = '20192';

	$url = 'http://'.$ip_dapodik.':5774/login';
	$cookie = "cookie.txt";
	if (file_exists($cookie)) {
		unlink($cookie);
	}

	$postfields = 'username=dedeheryanto15%40gmail.com&password=Samrat235&semester_id=20192';

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_COOKIEJAR => $cookie,
		CURLOPT_COOKIEFILE => $cookie,
		CURLOPT_POSTFIELDS => $postfields,
		CURLOPT_POST => 1,
		CURLOPT_REFERER => $url,
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/x-www-form-urlencoded",
			"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);
}

function siswa()
{
	$ip_dapodik = '192.168.100.6';
	$url = 'http://'.$ip_dapodik.':5774/rest/PesertaDidik?_dc=1573411993332&sekolah_id=07275a29-4663-4642-bee0-823762714895&pd_module=pdterdaftar&limit=100&ascending=nama&page=1&start=600';

	$cookie = base_path("cookie.txt");

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_COOKIEFILE => $cookie,
		CURLOPT_POST => 0,
	));

	$data = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		$data = json_decode($data, true);
		return $data['rows'];
	}

}

function grabSiswa($sekolah_id, $tahun_ajaran)
{
	$ip_dapodik = 'data.dikdasmen.kemdikbud.go.id';
	$url = 'https://data.dikdasmen.kemdikbud.go.id/sp/loadsiswa/'.$sekolah_id.'/'.$tahun_ajaran;

	$cookie = base_path("cookie.txt");

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_COOKIEFILE => $cookie,
		CURLOPT_POST => 0,
	));

	$data = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		$data = json_decode($data, true);
		return $data;
	}

}

function grabAlumni($sekolah_id, $tahun_ajaran)
{
	$ip_dapodik = 'data.dikdasmen.kemdikbud.go.id';
	$url = 'https://data.dikdasmen.kemdikbud.go.id/sp/loadsiswaakhir/'.$sekolah_id.'/'.$tahun_ajaran;

	$cookie = base_path("cookie.txt");

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_COOKIEFILE => $cookie,
		CURLOPT_POST => 0,
	));

	$data = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		$data = json_decode($data, true);
		return $data;
	}

}

function ds_where($nis, $param)
{
	$list = siswa();

	foreach($list as $data){
		if($data["nipd"] == $nis){
			$result = $data;
		}
	}

	$result = isset($result) ? $result : null;
	return $result[$param];
}

function getListDesa($id_kecamatan=null){
	$fileDesa = Storage::disk('local')->get('desa.json');
	$dataDesa = json_decode($fileDesa, true);
	$result   = array();
	$num = 1;
	foreach($dataDesa as $desa){
		if($id_kecamatan == $desa['id_kecamatan']){
			$result = $desa['data_desa'];
		}
	}
	return $result;
}

function kehadiran($siswa_id, $kehadiran_id){

	switch ($kehadiran_id) {
		case 'Alpha':
		echo "<span class='badge bg-red'>Alpha</span>";
		break;

		case 'Hadir':
		echo "<span class='badge bg-green'>Hadir</span>";
		break;

		case 'Sakit':
		echo "<span class='badge bg-blue'>Sakit</span>";
		break;

		case 'Izin':
		echo "<span class='badge bg-yellow'>Izin</span>";
		break;

		case 'Bolos':
		echo "<span class='badge bg-grey'>Bolos</span>";
		break;

		case 'Terlambat':
		echo "<span class='badge bg-purple'>Terlambat</span>";
		break;
		
		default:
		echo "";
		break;
	}
}

function verif($status){
	switch($status){
		case 'Belum Di Verifikasi':
			echo "<span class='badge bg-red'>Belum Di Verifikasi</span>";	
		break;

		case 'Sudah Di Verifikasi':
			echo "<span class='badge bg-red'>Belum Di Verifikasi</span>";	
		break;

		default:
			echo "";
		break;
	}
}

function str_kehadiran($data){
	switch ($data) {
		case '0':
		echo "Alpha";
		break;

		case '1':
		echo "Hadir";
		break;

		case '2':
		echo "Sakit";
		break;

		case '3':
		echo "Izin";
		break;

		case '4':
		echo "Bolos";
		break;

		case '5':
		echo "Terlambat";
		break;
		
		default:
		echo "";
		break;
	}
}