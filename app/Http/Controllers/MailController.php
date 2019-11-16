<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\User;

class MailController extends Controller
{
	public function verifEmail(){
		return view('email.verifNotif');
	}

	public function KirimEmailSukses($email, $verifyToken){
		$user = User::where(['email' => $email, 'verifyToken' => $verifyToken])->first();
		if ($user) 
		{
			User::where(['email' => $email, 'verifyToken' => $verifyToken])->update(['verifEmailStatus'=>'1','verifyToken'=>NULL]);
			return view('email.verifSukses');;

		}else{
			return redirect('/');
		}
	}
}