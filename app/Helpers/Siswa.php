<?php
function siswa(){
	$url = 'http://192.168.100.98:5774/rest/PesertaDidik?_dc=1573411993332&sekolah_id=07275a29-4663-4642-bee0-823762714895&pd_module=pdterdaftar&limit=1000000&ascending=nama&page=1&start=0';
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("Cookie: killme=dont; PHPSESSID=pb3gfstkf3stpv4klfk08e07a6; penugasan=oke"));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);
	$result = json_decode($result, true);
	return $result['rows'];
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
