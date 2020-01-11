<?php

namespace App\Http\Controllers;

use DB;
use App\UserFinger;
use App\Exports\TemplateFingerExport;
use App\Exports\UserFingerExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ExportController extends Controller
{
	public function index(){
		
	}

	public function export_fingerprint($role) 
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

	public function export_fingerprint_siswa($param){
		switch ($param) {
			case 'user':
			return Excel::download(new UserFingerExport, 'user_finger_siswa.xlsx');
			break;

			case 'template':
			return Excel::download(new TemplateFingerExport, 'template_finger_siswa.xlsx');
			break;

			default:
						# code...
			break;
		}
	}
}
