<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobSiswaController extends Controller
{
    public function index(){

	$users = auth()->user()->role;
	$nama = auth()->user()->name;
	$judul = 'HRM Tugas Siswa';
	return view('users.user.dashboard.jobSiswa', compact('users','nama','judul'));
	
	}

	public function tambahJobSiswa(Request $request){
		JobSiswa::insert($request->all());

		return back()->with('sukses_tambah_data', 'sukses');
	}

	public function editJobSiswa($id){
		$data = JobSiswa::find($id)->get(['id','nama','title'])->first();
		return $data;
	}

	public function updateJobSiswa(Request $request){
		$data = JobSiswa::where('nama', '=', $request->nama)->update($request->all());
		// update data Siswa yang ada di tabel Siswa
		Siswa::where('nama', '=', $request->nama)->update(['job_title' => $request->title]);
		// update data job title yang ada ditabel users
		User::where('name', '=', $request->nama)->update(['job_title' => $request->title]);
		return back()->with('sukses_ubah_data', 'ubah');
	}

	public function deleteJobSiswa(Request $request){
    	$data = JobSiswa::where('id', '=', $request->id)->delete();
    	return $data;
    }
}
