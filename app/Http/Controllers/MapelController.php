<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
use DB;

class MapelController extends Controller
{
    public function index(){
    	$users = auth()->user()->role;
    	$nama = auth()->user()->name;
    	$judul = 'Akademik Mapel';
    	return view('users.user.dashboard.mapel', compact('users','nama','judul'));
    }

    public function tambahMapel(Request $request){
    	$mapel = Mapel::insert($request->all());
    	return back()->with('sukses_tambah_data', 'Data');
    }

     public function editMapel($id){
    	$data = Mapel::find($id);
    	return $data;
    }

    public function updateMapel(Request $request){
    	$mapel = Mapel::where('id', '=', $request->id);

        $mapel->update($request->all());

        return back()->with('sukses_ubah_data', 'Data Berhasil di perbaharui');
    }

    public function deleteMapel(Request $request){
    	$data = Mapel::where('id', '=', $request->id)->delete();
    	return $data;
    }
}
