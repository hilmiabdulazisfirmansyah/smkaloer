<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostinganController extends Controller
{
    public function index(){
    	$users = auth()->user()->role;
    	$nama = auth()->user()->name;
    	$judul = 'Postingan';

    	return view('users.user.postingan.index', compact('users','nama','judul'));
    }
}
