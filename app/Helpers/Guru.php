<?php

function guru(){
	$ip_dapodik = '192.168.0.2';

	$url = 'http://'.$ip_dapodik.':5774/rest/Ptk?_dc=1574193396908&entry_sekolah_id=07275a29-4663-4642-bee0-823762714895&ptk_module=ptkterdaftar&tahun_ajaran_id=2019&jenis_gtk=guru&limit=1000000&penugasan_null=2&page=1&start=0';
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



function d_where($nik, $param)
{
	$list = guru();

	foreach($list as $data){
		if($data["nik"] == $nik){
			$result = $data;
		}
	}

	$result = isset($result) ? $result : null;
	return $result[$param];
}

function statusKepegawaian($id){
	switch ($id) {
		case 1:
		return 'PNS';
		break;
		case 2:
		return 'PNS Diperbantukan';
		break;
		case 3:
		return 'PNS Depag';
		break;
		case 4:
		return 'GTY/PTY';
		break;
		case 5:
		return 'Honor Daerah TK.I Provinsi';
		break;
		case 6:
		return 'Honor Daerah TK.II Kab/Kota';
		break;
		case 8:
		return 'Guru Honor Sekolah';
		break;
		case 9:
		return 'Tenaga Honor Sekolah';
		break;
		case 10:
		return 'CPNS';
		break;
		case 51:
		return 'Kontak Kerja WNA';
		break;
		case 11:
		return 'PPPK';
		break;
		case 12:
		return 'PPNPN';
		break;
		case 13:
		return 'Guru Pengganti';
		break;
		default:
		return "Data Tidak ditemukan";
		break;
	}
}

function status_perkawinan($id){
	switch ($id) {
		case 1:
		return 'Menikah';
		break;
		case 2:
		return 'Belum Menikah';
		break;
		default:
		echo "Data Tidak Ditemukan";
		break;
	}
}