<?php

namespace App\Http\Controllers;
use DB;
use Str;
use App\kehadiran_user;
use Illuminate\Http\Request;

class SyncController extends Controller
{
	public function dapodik($param){
		$sekolah_id = '07275a29-4663-4642-bee0-823762714895';
		$semester_id = '20192';
		$param = $param;
		switch ($param) {
			case 'sekolah':
			$url = "http://4.4.4.1:5774/rest/Sekolah/".$sekolah_id;
			$database = DB::connection('dapodik')->table('sekolah')->get(['status_kepemilikan_id', 'yayasan_id', 'mbs', 'nm_wp', 'npwp', 'no_rekening', 'nama_bank', 'cabang_kcp_unit', 'rekening_atas_nama', 'nomor_telepon', 'nomor_fax', 'email', 'website']);
			break;

			case 'data_periodik':
			$url = "http://4.4.4.1:5774/rest/SekolahLongitudinal/".$sekolah_id."%3A".$semester_id;
			$database = DB::connection('dapodik')->table('data_periodik')->get(['waktu_penyelenggaraan_id', 'sumber_listrik_id', 'daya_listrik', 'kontinuitas_listrik', 'partisipasi_bos', 'sertifikasi_iso_id', 'akses_internet_2_id', 'akses_internet_id']);
			break;

			case 'sanitasi':
			$url = 'http://4.4.4.1:5774/rest/Sanitasi/'.$sekolah_id.'%3A'.$semester_id;
			$database = DB::connection('dapodik')->table('sanitasi')->where('semester_id', $semester_id)->get(['ketersediaan_air','kecukupan_air','siswa_bawa_air','minum_siswa', 'memproses_air', 'tempat_cuci_tangan', 'a_sabun_air_mengalir', 'toilet_siswa_kk', 'tipe_jamban', 'jml_jamban_l_g', 'jml_jamban_p_g', 'jml_jamban_lp_g', 'jml_jamban_l_tg', 'jml_jamban_p_tg', 'jml_jamban_lp_tg']);
			break;

			case 'kepanitiaan':
			// cek jumlah data yang ada di dapodik
			$cek_dapodik = backup_dapodik('http://4.4.4.1:5774/rest/Kepanitiaan');
			$cek_dapodik = count($cek_dapodik);

			// cek jumlah data yang ada di database
			$cek_db = DB::connection('dapodik')->table('kepanitiaan')->get();
			$cek_db = count($cek_db);

			// jika sama akan melakukan update 
			if ($cek_dapodik == $cek_db) {
				
				$database = DB::connection('dapodik')->table('kepanitiaan')->get();
				foreach ($database as $data) {
					$url = 'http://4.4.4.1:5774/rest/Kepanitiaan/'.$data->id_panitia;
					$sync_update = DB::connection('dapodik')->table('kepanitiaan')->where('id_panitia', $data->id_panitia)->get();
					$sync_update = json_encode($sync_update, true);
					$sync_update = Str::replaceFirst('[', '', $sync_update);
					$sync_update = Str::replaceLast(']', '', $sync_update);
					sync_dapodik($url, $sync_update);
				}

			}elseif($cek_dapodik <= $cek_db){
			// jika data dapodik lebih kecil dari data di database maka akan melakukan tambah data
			// -------------------
			// api dapodik
				$url = 'http://4.4.4.1:5774/rest/Kepanitiaan'; 
				$database = DB::connection('dapodik')->table('kepanitiaan')->get(['sekolah_id','id_jns_panitia', 'nm_panitia', 'instansi', 'tkt_panitia', 'sk_tugas', 'tmt_sk_tugas', 'tst_sk_tugas', 'a_pasang_papan', 'a_formulir', 'a_silabus', 'a_berlaku_pos', 'a_sosialisasi_pos', 'a_ks_edukatif', 'id_panitia', 'sekolah_id_str', 'id_jns_panitia_str']); //ambil data dari database
				$cek_lagi_dapodik = backup_dapodik($url);
				echo $cek_lagi_dapodik;
				// foreach ($database as $data) {
				// 	post_dapodik($url, json_encode($data, true));
				// }
				
				// $database = Str::replaceFirst('[', '', $database);
				// $database = Str::replaceLast(']', '', $database);
				// echo $database;
				// post_dapodik($url, $database);

				// foreach ($database as $data) {
				// 	$url = 'http://4.4.4.1:5774/rest/Kepanitiaan'; // api dapodik
				// 	$postfields = '{"sekolah_id":"'.$data->sekolah_id.'","id_jns_panitia":'.$data->id_jns_panitia.',"nm_panitia":"'.$data->nm_panitia.'","instansi":"'.$data->instansi.'","tkt_panitia":"'.$data->tkt_panitia.'","sk_tugas":"'.$data->sk_tugas.'","tmt_sk_tugas":"'.$data->tmt_sk_tugas.'","tst_sk_tugas":'.$data->tst_sk_tugas.',"a_pasang_papan":'.$data->a_pasang_papan.',"a_formulir":'.$data->a_formulir.',"a_silabus":'.$data->a_silabus.',"a_berlaku_pos":'.$data->a_berlaku_pos.',"a_sosialisasi_pos":'.$data->a_sosialisasi_pos.',"a_ks_edukatif":'.$data->a_ks_edukatif.',"id_panitia":"Admin.model.Kepanitiaan-1","sekolah_id_str":"'.$data->sekolah_id_str.'","id_jns_panitia_str":"'.$data->id_jns_panitia_str.'"}';
				// 	echo $postfields;

				// 	//post_dapodik($url, $postfields);
				// }

				

					// $sync_insert = json_encode($database, true);
					// $sync_insert = Str::replaceFirst('[', '', $sync_insert);
					// $sync_insert = Str::replaceLast(']', '', $sync_insert);
					// dd($sync_insert);
					// post_dapodik($url, $sync_insert);



				}
			// 
			// 

				break;

				default:
				# code...
				break;
			}

			if ($param != 'kepanitiaan') {
				$database = json_encode($database, true);
				$database = Str::replaceFirst('[', '', $database);
				$database = Str::replaceLast(']', '', $database);
				sync_dapodik($url, $database);
			}

		}

	}

