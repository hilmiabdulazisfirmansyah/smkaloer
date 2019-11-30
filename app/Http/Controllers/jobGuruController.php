<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobGuru;
use App\Guru;
use App\User;

class jobGuruController extends Controller
{

	public function index(){

	$users = auth()->user()->role;
	$nama = auth()->user()->name;
	$judul = 'HRM Tugas Guru';
	return view('users.user.dashboard.jobGuru', compact('users','nama','judul'));
	
	}

	public function tambahJobGuru(Request $request){
		JobGuru::insert($request->all());

		Guru::where('nama', '=', $request->nama)->update(['job_title' => $request->title]);

		User::where('name', '=', $request->nama)->update(['job_title' => $request->title]);

		return back()->with('sukses_tambah_data', 'sukses');
	}

	public function editJobGuru($id){
		$data = JobGuru::where('id', '=', $id)->get(['id','nama','title'])->first();
		return $data;
	}

	public function updateJobGuru(Request $request){
		$data = JobGuru::where('nama', '=', $request->nama)->update($request->all());
		// update data guru yang ada di tabel guru
		Guru::where('nama', '=', $request->nama)->update(['job_title' => $request->title]);
		// update data job title yang ada ditabel users
		User::where('name', '=', $request->nama)->update(['job_title' => $request->title]);
		return back()->with('sukses_ubah_data', 'ubah');
	}

	public function deleteJobGuru(Request $request){
    	Guru::where('nama', '=', $request->nama)->update(['job_title' => 'Guru']);
    	User::where('name', '=', $request->nama)->update(['job_title' => 'Guru']);
    	JobGuru::where('id', '=', $request->id)->delete();
    	$data = JobGuru::count();
    	return $data;
    }
}
