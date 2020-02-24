<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UploadController extends Controller
{
    public function avatar(Request $request){
    	$token = $request->input('_token');
    	$filepath = $request->input('filepath');
    	$id = $request->input('id');

    	$user = User::find($id);
    	$user->avatar = $filepath;
    	$user->save();
    	return back();
    }
}
