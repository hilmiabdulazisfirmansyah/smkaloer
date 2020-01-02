<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class BackupController extends Controller
{
	
	public function index(){
		return view('users.user.data.backup.dapodik.backup');
	}

	public function dapodik($param){

		$param = $param;
		switch ($param) {
			case 'sekolah':
			$col = 'sekolah_id';
			$url = 'http://192.168.100.6:5774/rest/Sekolah';
			break;

			case 'data_periodik':
			$col = 'sekolah_id';
			$url = 'http://192.168.100.6:5774/rest/SekolahLongitudinal';
			break;

			case 'sanitasi':
			$col = 'semester_id';
			$url = 'http://192.168.100.6:5774/rest/Sanitasi';
			break;

			case 'kepanitiaan':
			$col = 'id_panitia';
			$url = 'http://192.168.100.6:5774/rest/Kepanitiaan';
			break;

			case 'blockgrant':
			$col = 'blockgrant_id';
			$url = 'http://192.168.100.6:5774/rest/Blockgrant';
			break;

			case 'ekstrakulikuler':
			$col = 'id_kelas_ekskul';
			$url = 'http://192.168.100.6:5774/rest/KelasEkskul';
			break;

			case 'yayasan':
			$col = 'yayasan_id';
			$url = 'http://192.168.100.6:5774/rest/Yayasan';
			break;

			case 'jurusan':
			$col = 'jurusan_sp_id';
			$url = 'http://192.168.100.6:5774/rest/JurusanSp';
			break;

			case 'dudi':
			$col = 'dudi_id';
			$url = 'http://192.168.100.6:5774/rest/Dudi';
			break;

			case 'unit_produksi':
			$col = 'unit_usaha_id';
			$url = 'http://192.168.100.6:5774/rest/UnitUsaha';
			break;

			case 'mou':
			$col = 'mou_id';
			$url = 'http://192.168.100.6:5774/rest/Mou';
			break;

			case 'tanah':
			$col = 'id_tanah';
			$url = 'http://192.168.100.6:5774/rest/Tanah';
			break;

			case 'bangunan':
			$col = 'id_bangunan';
			$url = 'http://192.168.100.6:5774/rest/Bangunan';
			break;

			case 'ruang':
			$col = 'id_ruang';
			$url = 'http://192.168.100.6:5774/rest/Ruang';
			break;

			case 'alat':
			$col = 'id_alat';
			$url = 'http://192.168.100.6:5774/rest/Alat';
			break;

			case 'buku':
			$col = 'id_buku';
			$url = 'http://192.168.100.6:5774/rest/Buku';
			break;

			case 'guru':
			$col = 'ptk_terdaftar_id';
			$url = 'http://192.168.100.6:5774/rest/Ptk?_dc=1577896447976&entry_sekolah_id=07275a29-4663-4642-bee0-823762714895&ptk_module=ptkterdaftar&tahun_ajaran_id=2019&jenis_gtk=guru&limit=1000000&penugasan_null=2&page=1&start=0';
			break;

			case 'tendik':
			$col = 'ptk_terdaftar_id';
			$url = 'http://192.168.100.6:5774/rest/Ptk?_dc=1577896635970&entry_sekolah_id=07275a29-4663-4642-bee0-823762714895&ptk_module=ptkterdaftar&tahun_ajaran_id=2019&jenis_gtk=tendik&limit=25&penugasan_null=2&page=1&start=0';
			break;

			case 'peserta_didik':
			$col = 'peserta_didik_id';
			$url = 'http://192.168.100.6:5774/rest/PesertaDidik?_dc=1577897074541&sekolah_id=07275a29-4663-4642-bee0-823762714895&pd_module=pdterdaftar&limit=1000000&ascending=nama&page=1&start=0';
			break;

			case 'rombel':
			$col = 'rombongan_belajar_id';
			$url = 'http://192.168.100.6:5774/rest/RombonganBelajar';
			break;

			default:
			echo 'error';
			break;
		}

		// cek parameter route			
			$grab 	= backup_guru($url); // fungsi CURL
			$select = DB::connection('mysql3')->table($param)->get(); //cek data yang tersedia

			if (count($select) == 0) { // jika data tidak tersedia maka data akan di masukkan satu persatu
				foreach ($grab as $data) {

					$insert = DB::connection('mysql3')->table($param)->insert([
						$col => $data[$col]
					]); // insert data id ptk

					$update = DB::connection('mysql3')->table($param)->where($col, $data[$col])->update($data);
					// update data sesuai dengan id ptk yang telah di insert
				}
			}else{ // jika data tersedia maka akan di lakukan update
				foreach ($grab as $data) {
					$update = DB::connection('mysql3')->table($param)->where($col, $data[$col])->update($data);
				}
			}


		return '<script>
		alert("Data '.$param.' berhasil di update");
		</script>';
		// end script
	}
}
