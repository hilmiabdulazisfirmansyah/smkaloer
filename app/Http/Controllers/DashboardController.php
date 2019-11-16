<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Siswa;
use App\Ortu;

class DashboardController extends Controller
{
	public function index(){
		return view('users.user.index');
	}

	public function dashboard(){
		$judul = 'Dashboard';
		$users = auth()->user()->role;
		return view('users.user.dashboard.'.$judul,compact(['judul','users']));
	}

	public function profile(){
		$judul = 'Profile';
		$users = auth()->user()->role;
		$tanggal_pendaftaran = auth()->user()->created_at->toDateString();
		$user_id = auth()->user()->id;

		// DATA SISWA
		$tanggal_lahir_siswa = auth()->user()->siswa->tanggal_lahir;
		$no_hp_siswa = auth()->user()->siswa->nomor_telepon_seluler;
		$agama_siswa = auth()->user()->siswa->agama;
		$email_siswa = auth()->user()->email;

		//ALAMAT SISWA
		$alamat_siswa = auth()->user()->siswa->alamat_jalan;
		$rt_siswa = auth()->user()->siswa->rt;
		$rw_siswa = auth()->user()->siswa->rw;
		$provinsi_siswa = auth()->user()->siswa->id_provinsi;
		$kabupaten_siswa = auth()->user()->siswa->id_kabupaten;
		$kecamatan_siswa = auth()->user()->siswa->id_kecamatan;
		$desa_siswa = auth()->user()->siswa->id_desa;

		//DATA LAINNYA DARI SISWA
		$asal_sekolah = auth()->user()->siswa->asal_sekolah;
		$nik_siswa = auth()->user()->siswa->NIK;
		$nik_ayah = auth()->user()->siswa->nik_ayah;

		// DATA ORTU
		$ortu_siswa = Ortu::where('nik_ayah', '=', $nik_ayah)->get();

		return view('users.user.dashboard.'.$judul,compact([
			'judul',
			'users',
			'tanggal_pendaftaran',
			'tanggal_lahir_siswa',
			'no_hp_siswa',
			'agama_siswa', 
			'email_siswa', 
			'alamat_siswa',
			'rt_siswa',
			'rw_siswa',
			'provinsi_siswa', 
			'kabupaten_siswa', 
			'kecamatan_siswa', 
			'desa_siswa', 
			'asal_sekolah', 
			'nik_siswa',
			'ortu_siswa',
			'user_id'
		]));
	}

}
