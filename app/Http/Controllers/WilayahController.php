<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WilayahController extends Controller
{
	public function provinsi(){
		return view('data.wilayah.provinsi');
	}

	public function kabupaten(){
		return view('data.wilayah.kabupaten');
	}

	public function kecamatan(){
		return view('data.wilayah.kecamatan');
	}

	public function desa(){
		return view('data.wilayah.desa');
	}
}
