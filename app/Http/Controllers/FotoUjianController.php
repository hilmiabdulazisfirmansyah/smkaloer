<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoUjianController extends Controller
{
    public function index()
    {
    	return view('ujian.index');
    }

    public function kelas($kelas)
    {
    	switch ($kelas) {
    		case 'tav':
    			$k = 'XII TAV';
    			$dir = 'XIITAV';
    		break;

    		case 'tkj1':
    			$k = 'XII TKJ 1';
    			$dir = 'XIITKJ1';
    		break;

    		case 'tkj2':
    			$k = 'XII TKJ 2';
    			$dir = 'XIITKJ2';
    		break;

    		case 'tkj3':
    			$k = 'XII TKJ 3';
    			$dir = 'XIITKJ3';
    		break;

    		case 'tkj4':
    			$k = 'XII TKJ 4';
    			$dir = 'XIITKJ4';
    		break;

    		case 'tkr':
    			$k = 'XII TKR';
    			$dir = 'XIITKR';
    		break;
    		
    		default:
    			# code...
    			break;
    	}

    	return view('ujian.file', compact('k','dir'));
    }

    public function ganti_nama(Request $request, $file){
    	$dir = '/Project_Laravel/smkaloer/public/'.$request->input('dir');
    	$nama = $request->input('nama');
    	rename($dir."/".$file, $dir."/".$nama.".jpg");
    	return back()->with('sukses_ubah_data','Berhasil mengubah nama');
    }
}
