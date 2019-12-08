<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guru;
use App\Ortu;
use App\User;
use App\kehadiran_user;
use DB;
use Str;

class AbsensiController extends Controller
{
	public function siswa()
	{
		$judul = 'Absensi';
		$users = auth()->user()->role;
		$user_id = auth()->user()->id;
		$nama = auth()->user()->name;
		if (strlen($nama) > 18) 
		{
			$nama = substr($nama,0, 18);
		}

		//kehadiran siswa
		$kehadiran = User::find($user_id);
		$kehadiran_siswa = $kehadiran->kehadiran_user;

		if ($kehadiran_siswa == null) 
		{
			$kehadiran_siswa = 'kosong';
		}
		else
		{
			$kehadiran_siswa = $kehadiran->kehadiran_user->where('user_id', '=', $user_id)->get();
		}

		$nama_kehadiran = $kehadiran->kehadiran;

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
		

		return view('users.user.dashboard.absensi', compact([
			'users',
			'judul',
			'kehadiran',
			'nama',
			'kehadiran_siswa',
			'nama_kehadiran',
			'persentase_hadir',
			'persentase_alpha',
			'persentase_sakit',
			'persentase_izin',
			'persentase_bolos',
			'persentase_terlambat',
		]));
	}

	public function guru()
	{
		$judul = 'Absensi';
		$users = auth()->user()->role;
		$user_id = auth()->user()->id;
		$nama = auth()->user()->name;
		if (strlen($nama) > 18) {
			$nama = substr($nama,0, 18);
		}
		//kehadiran siswa
		$kehadiran = User::find($user_id);
		$kehadiran_guru = $kehadiran->kehadiran_user;

		$kehadiran_siswa = User::where('role', '=', 'Siswa')->get();

		if ($kehadiran_guru == null) {
			$kehadiran_guru = 'kosong';
		}
		else
		{
			$kehadiran_guru = $kehadiran->kehadiran_user->where('user_id', '=', $user_id)->get();
		}

		$nama_kehadiran = $kehadiran->kehadiran;

		
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


		return view('users.user.dashboard.absensi', compact([
			'users',
			'judul',
			'kehadiran',
			'nama',
			'kehadiran_siswa',
			'kehadiran_guru',
			'nama_kehadiran',
			'persentase_hadir',
			'persentase_alpha',
			'persentase_sakit',
			'persentase_izin',
			'persentase_bolos',
			'persentase_terlambat',
		]));
	}

	public function verifGuru(Request $request)
	{
		$id = $request->id;
		$data = kehadiran_user::where('user_id', '=', $id)->update(['verifikasi_guru' => 'Sudah Di Verifikasi']);
		return $data;
	}

	public function batalVerifGuru(Request $request)
	{
		$id = $request->id;
		$data = kehadiran_user::where('user_id', '=', $id)->update(['verifikasi_guru' => 'Belum Di Verifikasi']);
		return $data;
	}

	public function edit($id)
	{
		$data = User::find($id);
		return $data;

	}

	public function update(Request $request)
	{
		$user_id = kehadiran_user::where('user_id', '=', $request->user_id);

        $user_id->update($request->all());

        return back()->with('sukses', 'Data Berhasil di perbaharui');
	}

	public function getKehadiranGuru(Request $request){
		return view('users.user.data.absensi.absensiSiswa');
	}

}