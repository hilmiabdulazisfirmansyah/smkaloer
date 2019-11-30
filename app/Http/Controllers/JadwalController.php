<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
use App\Jadwal;
use App\Guru;

class JadwalController extends Controller
{
     public function index(){
    	$users = auth()->user()->role;
    	$nama = auth()->user()->name;
    	$judul = 'Akademik Jadwal Pelajaran';
    	return view('users.user.dashboard.jadwal', compact('users','nama','judul'));
    }

    public function tambahJadwal(Request $request){
    	$Jadwal = Jadwal::insert($request->all());
    	return back()->with('sukses_tambah_data', 'Data');
    }

     public function editJadwal($id){
    	$data = Jadwal::find($id);
    	return $data;
    }

    public function updateJadwal(Request $request){
    	$Jadwal = Jadwal::where('id', '=', $request->id);

        $Jadwal->update($request->all());

        return back()->with('sukses_ubah_data', 'Data Berhasil di perbaharui');
    }

    public function deleteJadwal(Request $request){
    	$data = Jadwal::where('id', '=', $request->id)->delete();
    	return $data;
    }

    public function getJadwal($id){

    	$data = Mapel::find($id)->get();
    	foreach ($data as $data_guru) {
    		$id_guru = $data_guru->guru_id;
    	}

    	$data = Guru::where('id', '=', $id_guru)->get(['id','nama','user_id'])->first();
    	return $data;
    }
}
