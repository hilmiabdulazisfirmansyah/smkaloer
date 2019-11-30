<?php

function grab($url){
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

$url= 'http://110.136.104.230:1746/api/pengguna?kandidat=99&tahun=2019&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTEwLjEzNi4xMDQuMjMwOjE3NDYvYXBpL2xvZ2luIiwiaWF0IjoxNTc0OTg3MzA0LCJuYmYiOjE1NzQ5ODczMDQsImp0aSI6InVGQjlVSVE2aGRMcGtFVDIiLCJzdWIiOiIxMDNlNmE1Yy1hNGYyLTRiNTQtYjVjNy04YmFkNGQ3MDNjMTkiLCJwcnYiOiJhMjgzZmM5MTZmYTE0YzQwZGRiZTU5MzE0MWExNjcxNjMxNzNkYTg0In0.x1Non29ZJGR193lyz_3P79Zh9AtPLjfpH8T3r0D_cqc&start=20&limit=700&keyword=&peran=99&sekolah_id=07275a29-4663-4642-bee0-823762714895';

$daftar_siswa = grab($url);


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




?>
<style type="text/css">
	body {
		background-color: #d7d6d3;
		font-family:'verdana';
	}
	.id-card-holder {
		width: 225px;
		padding: 4px;
		float: left;
		margin-left: 1vw;
		margin-bottom: 2vh;
		background-color: #1f1f1f;
		border-radius: 5px;
		position: relative;
	}
	.id-card-holder:after {
		content: '';
		width: 7px;
		display: block;
		background-color: #0a0a0a;
		height: 100px;
		position: absolute;
		top: 105px;
		border-radius: 0 5px 5px 0;
	}
	.id-card-holder:before {
		content: '';
		width: 7px;
		display: block;
		background-color: #0a0a0a;
		height: 100px;
		position: absolute;
		top: 105px;
		left: 222px;
		border-radius: 5px 0 0 5px;
	}
	.id-card {

		background-color: #fff;
		padding: 10px;
		border-radius: 10px;
		text-align: center;
		box-shadow: 0 0 1.5px 0px #b9b9b9;
	}
	.id-card img {
		margin: 0 auto;
	}
	.header img {
		width: 45px;
		margin-top: 15px;
	}
	.photo img {
		width: 80px;
		margin-top: 15px;
	}
	h2 {
		font-size: 15px;
		margin: 5px 0;
	}
	h3 {
		font-size: 12px;
		margin: 2.5px 0;
		font-weight: 300;
	}
	.qr-code img {
		width: 50px;
	}
	p {
		font-size: 5px;
		margin: 2px;
	}
	.id-card-hook {
		background-color: #000;
		width: 70px;
		margin: 0 auto;
		height: 15px;
		border-radius: 5px 5px 0 0;
	}
	.id-card-hook:after {
		content: '';
		background-color: #d7d6d3;
		width: 47px;
		height: 6px;
		display: block;
		margin: 0px auto;
		position: relative;
		top: 6px;
		border-radius: 4px;
	}
	.id-card-tag-strip {
		width: 45px;
		height: 40px;
		background-color: #0950ef;
		margin: 0 auto;
		border-radius: 5px;
		position: relative;
		top: 9px;
		z-index: 1;
		border: 1px solid #0041ad;
	}
	.id-card-tag-strip:after {
		content: '';
		display: block;
		width: 100%;
		height: 1px;
		background-color: #c1c1c1;
		position: relative;
		top: 10px;
	}
	.id-card-tag {
		width: 0;
		height: 0;
		border-left: 100px solid transparent;
		border-right: 100px solid transparent;
		border-top: 100px solid #0958db;
		margin: -10px auto -30px auto;
	}
	.id-card-tag:after {
		content: '';
		display: block;
		width: 0;
		height: 0;
		border-left: 50px solid transparent;
		border-right: 50px solid transparent;
		border-top: 100px solid #d7d6d3;
		margin: -10px auto -30px auto;
		position: relative;
		top: -130px;
		left: -50px;
	}
</style>

@foreach ($daftar_siswa as $siswa)


<div class="id-card-holder">
	<div class="id-card">
		<div class="header">
			<img src="{{ asset('img/logo.png') }}" >
		</div>
		<h2>{{$siswa['nama']}}</h2><br>
		<h3>Username: <span>{{$siswa['email']}}</span></h3><br>
		<h3>Tanggal Lahir : <span>{{$siswa['tanggal_lahir']}}</span></h3><br>
		<hr>
		<p><strong>"CATATAN"</strong>Username digunakan untuk login <strong>PMP EDS DIKDASMEN</strong><p>
			<p>Untuk Pertanyaan silahkankan hubungi Pihak Sekolah <strong>SMK ALOER WARGAKUSUMAH</strong></p>

		</div>
	</div>
	@endforeach