<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use DB;

class WilayahController extends Controller
{
	public function index(){
		return view('data.wilayah.kecamatan');
	}

	public function provinsi(){
		return view('data.wilayah.provinsi');
	}

	public function kabupaten(){
		return view('data.wilayah.kabupaten');
	}

	public function kecamatan(Request $request){
		$query = $request->get('query');
		$data = DB::table('kecamatan')
		->where('nama', 'like', '%'.$query.'%')
		->offset(0)
		->limit(5)
		->get();

		foreach ($data as $key) {
			$kode_wilayah = trim($key->kode_wilayah);
			$nama_kecamatan = trim($key->nama);
			 echo "<li class='list-group-item'>";
			 echo "<input type='hidden' id='kode_wilayah' value='$kode_wilayah'/>";
			 echo "<a href='#' name='kode_wilayah' class='kode_wilayah'>";
			 echo  $nama_kecamatan;
			 echo "</a>";
			 echo "</li>";
		}

		return view('data.wilayah.kecamatan');
	}

	public function desa(){
		return view('data.wilayah.desa');
	}
}
