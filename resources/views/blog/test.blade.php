<?php
	//post_dapodik($url, $postfields);
<<<<<<< HEAD
	
//$data = '{"website":"http://www.smkaloerwargakusumah.sch.i"}';




=======

//$data = '{"website":"http://www.smkaloerwargakusumah.sch.i"}';




>>>>>>> 67f4089ac00f9a0a874c5c888387493d215ec299
//$url= 'http://110.136.104.230:1746/api/pengguna?kandidat=99&tahun=2019&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTEwLjEzNi4xMDQuMjMwOjE3NDYvYXBpL2xvZ2luIiwiaWF0IjoxNTc0OTg3MzA0LCJuYmYiOjE1NzQ5ODczMDQsImp0aSI6InVGQjlVSVE2aGRMcGtFVDIiLCJzdWIiOiIxMDNlNmE1Yy1hNGYyLTRiNTQtYjVjNy04YmFkNGQ3MDNjMTkiLCJwcnYiOiJhMjgzZmM5MTZmYTE0YzQwZGRiZTU5MzE0MWExNjcxNjMxNzNkYTg0In0.x1Non29ZJGR193lyz_3P79Zh9AtPLjfpH8T3r0D_cqc&start=20&limit=700&keyword=&peran=99&sekolah_id=07275a29-4663-4642-bee0-823762714895';

//$daftar_siswa = grab($url);

// 
// 
// $cookie = base_path("cookie.txt");
// $sekolah = DB::table('sekolah')->where('id', '=', '51')->get('sekolah_id');
// $tahun_ajaran = '2018';

// DB::update('update dapodik_siswa set tahun_ajaran = "2019"');

// foreach ($sekolah as $id) {
//   $grab = grabAlumni($id->sekolah_id, $tahun_ajaran);
//   foreach ($grab as $siswa) {
//     $cek = DB::table('dapodik_siswa')->where('peserta_didik_id', '=', $siswa['peserta_didik_id'])->get();
//     $siswa['sekolah_id'] = $id->sekolah_id;
//     $siswa['tahun_ajaran'] = $tahun_ajaran-1;
//       if ($cek->count() == 0) {
//         DB::table('dapodik_siswa')->insert($siswa);
//       }
//   }
// }
//$grab = siswa();
// dd($grab);
//foreach ($grab as $siswa) {
  //  DB::table('siswa')->insert($siswa);
//}



//
// A very simple PHP example that sends a HTTP POST to a remote site
//
function getDevice(){
	$ch = curl_init();
<<<<<<< HEAD

	curl_setopt($ch, CURLOPT_URL,"http://192.168.100.8:7005/dev/info");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		"sn=61627018330936");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($ch);
	return $data = json_decode($server_output, true);
	curl_close ($ch);

}

function getUser(){
	$ch = curl_init();
	set_time_limit(6000);
	curl_setopt($ch, CURLOPT_URL,"http://192.168.100.8:7005/user/all/paging");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		http_build_query(array('sn' => '61627018330936', 'limit' => '1000')));

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($ch);
	return $data = json_decode($server_output, true);
	curl_close ($ch);
}



function getDataScan(){
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,"http://192.168.8.1:8080/scanlog/all/paging");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		"sn=61627018330936");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($ch);
	return $data = json_decode($server_output, true);
	curl_close ($ch);

}

function setData(){
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,"http://192.168.8.1:8080/user/set");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		"sn=61627018330936&pin=1718101&nama=AAN&priv=User&pwd=");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER,["Content-Type: application/x-www-form-urlencoded"]);

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...

	$server_output = curl_exec($ch);
	return $data = json_decode($server_output, true);
	curl_close ($ch);

}

dd(getUser());

=======

	curl_setopt($ch, CURLOPT_URL,"http://192.168.100.8:7005/dev/info");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		"sn=61627018330936");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($ch);
	return $data = json_decode($server_output, true);
	curl_close ($ch);

}

function getUser(){
	$ch = curl_init();
	set_time_limit(0);
	curl_setopt($ch, CURLOPT_URL,"http://192.168.100.8:7005/user/all/paging");
	//curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		http_build_query(array('sn' => '61627018330936')));

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($ch);
	curl_close ($ch);
	return $data = json_decode($server_output, true);
}



function getDataScan(){
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,"http://192.168.8.1:8080/scanlog/all/paging");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		"sn=61627018330936");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($ch);
	return $data = json_decode($server_output, true);
	curl_close ($ch);

}

function setData(){
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,"http://192.168.8.1:8080/user/set");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
		"sn=61627018330936&pin=1718101&nama=AAN&priv=User&pwd=");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER,["Content-Type: application/x-www-form-urlencoded"]);

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...

	$server_output = curl_exec($ch);
	return $data = json_decode($server_output, true);
	curl_close ($ch);

}

function getTemplateAll($pinT){
	$header = '"Template":[';
	$footer = "]";
	$database = DB::connection('mysql2')->table('tb_template')->where('pin', '=', $pinT)->get();
	foreach ($database as $data) {
		$content = '{"pin":"'.$data->pin.'","idx":"'.$data->finger_idx.'","alg_ver":"'.$data->alg_ver.'","template":"'.$data->template.'"}';
	}
	return ($header.$content.$footer);
}


$port = 7005;
$url = '192.168.100.8/user/set-all';
$sn = '61627018330877';

$header = '{"Result":true,"Data":[';
$footer = "]}";
$database = DB::connection('mysql2')->table('tb_user')->get();
$content = json_encode($database, true);
$data = $header.$content.$footer;
$parameter = "sn=".$sn."&data=".$data;
$server_output = webservice($port,$url,$parameter);

dd($server_output);
>>>>>>> 67f4089ac00f9a0a874c5c888387493d215ec299
?>

{{-- <p>Get Device Info</p>

<form action="http://192.168.8.1:8080/dev/info" method="post">
	<input type="text" name="sn">
	<input type="submit" value="ok">
</form>

<p>Get Data User</p>

<form action="http://192.168.8.1:8080/user/all/paging" method="post">
	<input type="text" name="sn">
	<input type="submit" value="ok">
</form>

<p>Delete Data User</p>
<form action="http://192.168.8.1:8080/user/delall" method="post">
	<input type="text" name="sn">
	<input type="submit" value="ok">
</form> --}}
