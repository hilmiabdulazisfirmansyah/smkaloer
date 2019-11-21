<?php



function loginDapodikSiswa(){
	$ip_dapodik = '192.168.100.98';
	$username = 'dedeheryanto15@gmail.com';
	$password = 'Samrat235';
	$semester_id = '20191';

	$url = 'http://'.$ip_dapodik.':5774/login';
	$cookie = "cookie.txt";

	$postfields = 'username=dedeheryanto15%40gmail.com&password=Samrat235&semester_id=20191';

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
	$ip_dapodik = '192.168.100.98';
	$url = 'http://'.$ip_dapodik.':5774/rest/PesertaDidik?_dc=1573411993332&sekolah_id=07275a29-4663-4642-bee0-823762714895&pd_module=pdterdaftar&limit=10&ascending=nama&page=1&start=0';

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
