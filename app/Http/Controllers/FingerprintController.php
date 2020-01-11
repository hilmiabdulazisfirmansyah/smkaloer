<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Finger;
use \App\Siswa;
use DB;

class FingerprintController extends Controller
{
	public function index(){
		$users = auth()->user()->role;
		$nama = auth()->user()->name;
		$judul = 'Settings Device';
		$device = Finger::all();
		$listSiswa = Siswa::all();
		return view('users.user.dashboard.finger', compact(['device','listSiswa','users','nama','judul']));
	}

	public function getDevice(Request $request){
		$listFinger = Finger::where('No', '=', $request->id)->get();
		foreach ($listFinger as $finger) {
			$port = $finger->server_port;
			$ip = $finger->server_IP;
			$sn = $finger->device_sn;
		}
		$url = $ip.'/dev/info';
		$sn = 'sn='.$sn;
		$data = webservice($port, $url, $sn);
		return $data;
	}

	public function getUser(Request $request){
		$parameter = 'sn='.$request->sn.'&limit=1000';
		$port = $request->port;
		$url = $request->ip.'/user/all/paging';
		$data = webservice($port,$url,$parameter);
		dd($data);
		return $data;
	}

	public function delUser(Request $request){
		$parameter = 'sn='.$request->sn;
		$port = $request->port;
		$url = $request->ip.'/user/delall';
		DB::connection('mysql2')->table('tb_user')->delete();
		DB::connection('mysql2')->table('tb_template')->delete();
		$data = webservice($port,$url,$parameter);
		return $data;
	}

	public function setUser(Request $request){
// test
// $data = $request->all();
// return $data;

		// $device = Finger::all();
		$listSiswa = Siswa::all();
	// INPUT DATA SISWA 
	// dari Database Sekolah 				-> Database Finger
	// dari tabel siswa 
	// 	- nipd							-> tb_user(pin) & tb_template(pin + alg_ver = 39)
	// 	- nama (substr 5) strtoupper	-> tb_user(nama) 
		set_time_limit(6000);
		foreach ($listSiswa as $siswa) {
			$nama_siswa = strtoupper(substr($siswa->nama, 0, 15));
			DB::connection('mysql2')->table('tb_user')->insert(['pin' => $siswa->id, 'nama' => $nama_siswa]);
			DB::connection('mysql2')->table('tb_template')->insert(['pin' => $siswa->id, 'alg_ver' => 39]);
		}

		$port = 80;
		$url = 'localhost/index.php?m=content&p=user';
		$parameter = 'i_pagingGet=&i_pagingSet=1000&b_SetAllUser=Set+All+User&i_setUser=&i_delUser=';
		webservice($port,$url,$parameter);

		return 'sukses';
	}

	
}
