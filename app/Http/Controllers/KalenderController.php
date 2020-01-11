<?php

namespace App\Http\Controllers;
use App\kehadiran_user;
use DB;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function index(){
    	$users = auth()->user()->role;
    	$nama = auth()->user()->name;
    	$judul = 'Kalender';

    	return view('users.user.dashboard.kalender', compact(['users','nama', 'judul']));
    }

    public function siswa($id){
    	$database = kehadiran_user::where('user_id', '=', $id)->get();
    	foreach ($database as $data) {
    		$kehadiran = DB::table('kehadiran')->find($data->kehadiran_id);
    		switch ($kehadiran->nama) {
    			case 'Hadir':
    				$color = '#00a65a';	
    			break;

    			case 'Alpha':
    				$color = '#f56954';	
    			break;

    			case 'Izin':
    				$color = '#f39c12';	
    			break;

    			case 'Sakit':
    				$color = '#00c0ef';	
    			break;

    			case 'Terlambat':
    				$color = '#605ca8';	
    			break;

    			case 'Bolos':
    				$color = '#ccc';	
    			break;
    			
    			default:
    				# code...
    				break;
    		}

    		$kalender[] = array(
    			'title' => $kehadiran->nama,
    			'start' => $data->created_at, 
    			'backgroundColor' => $color, 
    		);
    	}
    	echo json_encode($kalender);
    }
}
