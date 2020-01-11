<?php

namespace App\Http\Controllers;
use DB;

use Session;
 
use App\Imports\UserImportFinger;
use App\Imports\TemplateImportFinger;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImportController extends Controller
{
	public function index(){

	}

	public function import_fingerprint($role) 
	{
		switch ($role) {
			case 'siswa':
			$user_siswa = DB::connection('fingerprint')->table('tb_user')->get();
			$template_siswa = DB::connection('fingerprint')->table('tb_template')->get();
			return view('export/siswa',compact(['user_siswa','template_siswa']));
			break;
			
			default:
				# code...
			break;
		}
	}

	public function import_fingerprint_siswa(Request $request, $param){
		switch ($param) {
			case 'user':
			$this->validate($request, [
				'file' => 'required|mimes:csv,xls,xlsx'
			]);

	// menangkap file excel
			$file = $request->file('file');

	// membuat nama file unik
			$nama_file = rand().$file->getClientOriginalName();

	// upload ke folder file_siswa di dalam folder public
			$file->move('user_finger',$nama_file);

	// import data
			Excel::import(new UserImportFinger, public_path('user_finger/'.$nama_file));

	// notifikasi dengan session
			Session::flash('sukses','Data Siswa Berhasil Diimport!');

	// alihkan halaman kembali
			return redirect('import/fingerprint/siswa');
			break;

			case 'template':
			$this->validate($request, [
				'file' => 'required|mimes:csv,xls,xlsx'
			]);

	// menangkap file excel
			$file = $request->file('file');

	// membuat nama file unik
			$nama_file = rand().$file->getClientOriginalName();

	// upload ke folder file_siswa di dalam folder public
			$file->move('temp_finger',$nama_file);

	// import data
			Excel::import(new TemplateImportFinger, public_path('temp_finger/'.$nama_file));

	// notifikasi dengan session
			Session::flash('sukses','Data Siswa Berhasil Diimport!');

	// alihkan halaman kembali
			return redirect('import/fingerprint/siswa');
			break;

			default:
						# code...
			break;
		}
	}
}
