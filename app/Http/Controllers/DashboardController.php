<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Siswa;
use App\Ortu;
use App\User;
use App\Guru;
use DB;
use Str;

class DashboardController extends Controller
{
	public function index(){
		return view('users.user.index');
	}

	public function dashboard(){
		$judul = 'Dashboard';
		$users = auth()->user()->role;
		$user_id = auth()->user()->id;
		$nama = auth()->user()->name;

		//kehadiran siswa
		$kehadiran = User::find($user_id);
		
		$total_kehadiran = $kehadiran->kehadiran;
		$total_hadir = $kehadiran->kehadiran->where('id', '=', '1')->count();
		$total_alpha = $kehadiran->kehadiran->where('id', '=', '0')->count();
		$total_sakit = $kehadiran->kehadiran->where('id', '=', '2')->count();
		$total_izin = $kehadiran->kehadiran->where('id', '=', '3')->count();
		$total_bolos = $kehadiran->kehadiran->where('id', '=', '4')->count();
		$total_terlambat = $kehadiran->kehadiran->where('id', '=', '5')->count();

		$jumlah_kbm_efektif = $kehadiran->kehadiran->count();

		//hitung skor kehadiran
		$skor_hadir = $total_hadir*100;
		$skor_alpha = $total_alpha*0;
		$skor_sakit = $total_sakit*90;
		$skor_izin = $total_izin*80;
		$skor_bolos = $total_bolos*0;
		$skor_terlambat = $total_terlambat*95;
		// $rata=($totalnilai!=0)?($totalnilai/$jumlah) * 100:0;
		//persentase kehadiran
		$persentase_hadir = ($skor_hadir!=0 && $jumlah_kbm_efektif!=0)?($skor_hadir/$jumlah_kbm_efektif):0;
		$persentase_hadir = Str::limit($persentase_hadir, 2);

		$persentase_alpha = ($skor_alpha!=0 && $jumlah_kbm_efektif!=0)?($skor_alpha/$jumlah_kbm_efektif):0;
		$persentase_alpha = Str::limit($persentase_alpha, 2);

		$persentase_sakit = ($skor_sakit!=0 && $jumlah_kbm_efektif!=0)?($skor_sakit/$jumlah_kbm_efektif):0;
		$persentase_sakit = Str::limit($persentase_sakit, 2);

		$persentase_izin = ($skor_izin!=0 && $jumlah_kbm_efektif!=0)?($skor_izin/$jumlah_kbm_efektif):0;
		$persentase_izin = Str::limit($persentase_izin, 2);

		$persentase_bolos = ($skor_bolos!=0 && $jumlah_kbm_efektif!=0)?($skor_bolos/$jumlah_kbm_efektif):0;
		$persentase_bolos = Str::limit($persentase_bolos, 2);

		$persentase_terlambat = ($skor_terlambat!=0 && $jumlah_kbm_efektif!=0)?($skor_terlambat/$jumlah_kbm_efektif):0;
		$persentase_terlambat = Str::limit($persentase_terlambat, 2);

		return view('users.user.dashboard.'.$judul,compact([
			'nama',
			'judul',
			'users',
			'total_hadir',
			'total_alpha',
			'total_sakit', 
			'total_izin',
			'total_bolos', 
			'total_terlambat',
			'persentase_hadir',
			'persentase_alpha',
			'persentase_sakit',
			'persentase_izin',
			'persentase_bolos',
			'persentase_terlambat',

		]));
	}

	public function profile(){
		$judul = 'Profile';
		$users = auth()->user()->role;
		$tanggal_pendaftaran = auth()->user()->created_at->toDateString();
		$user_id = auth()->user()->id;
		$nama = auth()->user()->name;
		if (strlen($nama) > 18) {
			$nama = substr($nama,0, 18);
		}


		if ($users == 'Siswa') {
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
			$kode_wilayah = auth()->user()->siswa->kode_wilayah;
			$kecamatan_siswa = DB::table('kecamatan')->where('kode_wilayah', '=', $kode_wilayah)->get('nama');
			$desa_siswa = auth()->user()->siswa->desa_kelurahan;

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
				'user_id',
				'nama'
			]));
		}

		if ($users == 'Guru') {

			return view('users.user.dashboard.'.$judul, compact('user_id','users','judul', 'nama','users'));
		}


	}

}
