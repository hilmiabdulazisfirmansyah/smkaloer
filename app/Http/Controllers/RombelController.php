<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rombel;
use DB;

class RombelController extends Controller
{
    public function index(){
    	$users = auth()->user()->role;
    	$nama = auth()->user()->name;
    	$judul = 'Akademik Rombel';
    	return view('users.user.dashboard.rombel', compact('users','nama','judul'));
    }

    public function tambahRombel(Request $request){
    	$Rombel = Rombel::insert($request->all());
    	return back()->with('sukses_tambah_data', 'Data');
    }

     public function editRombel($id){
    	$data = Rombel::find($id);
    	return $data;
    }

    public function updateRombel(Request $request){
    	$Rombel = Rombel::where('id', '=', $request->id);

        $Rombel->update($request->all());

        return back()->with('sukses_ubah_data', 'Data Berhasil di perbaharui');
    }

    public function deleteRombel(Request $request){
    	$data = Rombel::where('id', '=', $request->id)->delete();
    	return $data;
    }
}
