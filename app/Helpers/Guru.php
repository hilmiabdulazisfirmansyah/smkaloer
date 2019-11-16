<?php

function guru(){
	$username = 'dedeheryanto15@gmail.com';
	$password = 'Samrat235';
	$semester_id = '20191';

	$url = 'http://dapodik.smkaloerwargakusumah.sch.id:5774/login?username='.$username.'&password='.$password.'&semester_id='.$semester_id;



	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Key:'.$apikey, 'npsn:'.$npsn));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);

	return $result;
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